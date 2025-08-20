<?php
// Prevent direct access
if (!defined('ABSPATH')) { exit; }

if (!class_exists('Examiner_Theme_Updater')) {
    class Examiner_Theme_Updater {
        private const REPO_OWNER = 'Stepfox';
        private const REPO_NAME  = 'examiner';
        private const BRANCH     = 'main';
        private static $last_branch = self::BRANCH;
        private static $last_source_dir = null;

        public static function init() {
            add_filter('pre_set_site_transient_update_themes', [__CLASS__, 'check_for_update']);
            add_filter('themes_api', [__CLASS__, 'themes_api'], 10, 3);
            add_filter('upgrader_source_selection', [__CLASS__, 'fix_github_zip_folder'], 10, 4);
            add_filter('upgrader_package_options', [__CLASS__, 'ensure_clear_destination']);
            add_action('load-update-core.php', [__CLASS__, 'maybe_bust_cache']);
            add_action('load-themes.php', [__CLASS__, 'maybe_bust_cache']);
            add_filter('upgrader_install_package_result', [__CLASS__, 'log_install_result'], 10, 2);
            add_action('upgrader_pre_install', [__CLASS__, 'log_pre_install'], 10, 2);
            add_action('upgrader_post_install', [__CLASS__, 'log_post_install'], 10, 3);
        }

        public static function check_for_update($transient) {
            if (empty($transient) || !is_object($transient)) { return $transient; }

            $theme      = wp_get_theme();
            $stylesheet = get_stylesheet();
            $current_version = $theme->get('Version');

            $remote_version = self::get_remote_version();
            if ($remote_version && version_compare($remote_version, $current_version, '>')) {
                $transient->response[$stylesheet] = array(
                    'theme'       => $stylesheet,
                    'new_version' => $remote_version,
                    'url'         => 'https://github.com/' . self::REPO_OWNER . '/' . self::REPO_NAME,
                    'package'     => self::get_download_zip_url(),
                );
            } else {
                // Ensure removal of stale notices
                unset($transient->response[$stylesheet]);
            }
            return $transient;
        }

        public static function themes_api($result, $action, $args) {
            if ($action !== 'theme_information' || empty($args->slug) || $args->slug !== get_stylesheet()) {
                return $result;
            }
            $remote_version = self::get_remote_version();
            $info = (object) array(
                'name'        => wp_get_theme()->get('Name'),
                'slug'        => get_template(),
                'version'     => $remote_version ?: wp_get_theme()->get('Version'),
                'author'      => '<a href="https://stepfoxthemes.com">Stepfox</a>',
                'homepage'    => 'https://github.com/' . self::REPO_OWNER . '/' . self::REPO_NAME,
                'download_link' => self::get_download_zip_url(),
                'sections'    => array( 'description' => 'Examiner theme auto-updates from GitHub.' ),
            );
            return $info;
        }

        public static function fix_github_zip_folder($source, $remote_source, $upgrader, $hook_extra) {
            if (empty($hook_extra['theme']) || $hook_extra['theme'] !== get_stylesheet()) { return $source; }
            $source_basename = basename($source);
            $theme_dir_name = get_stylesheet();

            $has_style = file_exists(trailingslashit($source) . 'style.css') || file_exists(trailingslashit($source) . $theme_dir_name . '/style.css');
            $has_nested = is_dir(trailingslashit($source) . $theme_dir_name) && file_exists(trailingslashit($source) . $theme_dir_name . '/style.css');
            if ($has_nested) { self::$last_source_dir = trailingslashit($source) . $theme_dir_name; return self::$last_source_dir; }
            if ($has_style && $source_basename !== $theme_dir_name) {
                $new_source = trailingslashit(dirname($source)) . $theme_dir_name;
                if (is_dir($new_source)) { self::rrmdir($new_source); }
                @rename($source, $new_source);
                self::$last_source_dir = is_dir($new_source) ? $new_source : $source;
                return self::$last_source_dir;
            }
            if (strpos($source_basename, self::REPO_NAME) !== false && $source_basename !== $theme_dir_name) {
                $new_source = trailingslashit(dirname($source)) . $theme_dir_name;
                if (is_dir($new_source)) { self::rrmdir($new_source); }
                @rename($source, $new_source);
                self::$last_source_dir = is_dir($new_source) ? $new_source : $source;
                return self::$last_source_dir;
            }
            self::$last_source_dir = $source;
            return $source;
        }

        private static function get_remote_version() {
            $cache_key = 'examiner_theme_remote_version';
            $cached = get_site_transient($cache_key);
            if ($cached && !isset($_GET['force-check'])) { return $cached; }

            $branches = array_unique(array_filter(array(
                'popravan',
                self::BRANCH,
                self::get_repo_default_branch(),
                'master',
            )));

            $body = '';
            foreach ($branches as $branch) {
                // Try common locations first
                $candidates = array(
                    'https://raw.githubusercontent.com/' . self::REPO_OWNER . '/' . self::REPO_NAME . '/' . $branch . '/style.css',
                    'https://raw.githubusercontent.com/' . self::REPO_OWNER . '/' . self::REPO_NAME . '/' . $branch . '/wp-content/themes/examiner/style.css',
                );
                $discovered = self::discover_style_path($branch);
                if ($discovered) {
                    $candidates[] = 'https://raw.githubusercontent.com/' . self::REPO_OWNER . '/' . self::REPO_NAME . '/' . $branch . '/' . ltrim($discovered, '/');
                }
                foreach ($candidates as $url) {
                    $res = wp_remote_get($url, array('timeout' => 10, 'user-agent' => 'WordPress/' . get_bloginfo('version')));
                    if (!is_wp_error($res) && wp_remote_retrieve_response_code($res) === 200) {
                        $tmp = wp_remote_retrieve_body($res);
                        if (is_string($tmp) && $tmp !== '') { $body = $tmp; self::$last_branch = $branch; break 2; }
                    }
                }
            }
            if (!$body) { return null; }
            if (preg_match('/^\s*Version:\s*([^\r\n]+)/mi', $body, $m)) {
                $version = trim($m[1]);
                set_site_transient($cache_key, $version, 5 * MINUTE_IN_SECONDS);
                return $version;
            }
            return null;
        }

        private static function get_repo_default_branch() {
            $cache_key = 'examiner_theme_default_branch';
            $cached = get_site_transient($cache_key);
            if ($cached && is_string($cached)) { return $cached; }
            $url = 'https://api.github.com/repos/' . self::REPO_OWNER . '/' . self::REPO_NAME;
            $res = wp_remote_get($url, array('timeout' => 10, 'user-agent' => 'WordPress/' . get_bloginfo('version')));
            if (!is_wp_error($res) && wp_remote_retrieve_response_code($res) === 200) {
                $data = json_decode(wp_remote_retrieve_body($res), true);
                if (is_array($data) && !empty($data['default_branch'])) {
                    set_site_transient($cache_key, $data['default_branch'], 30 * MINUTE_IN_SECONDS);
                    return $data['default_branch'];
                }
            }
            return null;
        }

        private static function discover_style_path($branch) {
            $cache_key = 'examiner_theme_style_path_' . sanitize_title($branch);
            $cached = get_site_transient($cache_key);
            if (is_string($cached) && $cached !== '') { return $cached; }
            $url = 'https://api.github.com/repos/' . self::REPO_OWNER . '/' . self::REPO_NAME . '/git/trees/' . rawurlencode($branch) . '?recursive=1';
            $res = wp_remote_get($url, array('timeout' => 10, 'user-agent' => 'WordPress/' . get_bloginfo('version')));
            if (!is_wp_error($res) && wp_remote_retrieve_response_code($res) === 200) {
                $data = json_decode(wp_remote_retrieve_body($res), true);
                if (isset($data['tree']) && is_array($data['tree'])) {
                    foreach ($data['tree'] as $node) {
                        if (isset($node['path']) && preg_match('/(^|\/)style\.css$/i', $node['path'])) {
                            set_site_transient($cache_key, $node['path'], 30 * MINUTE_IN_SECONDS);
                            return $node['path'];
                        }
                    }
                }
            }
            return null;
        }

        private static function get_download_zip_url() {
            $branch = self::$last_branch ?: self::BRANCH;
            return 'https://codeload.github.com/' . self::REPO_OWNER . '/' . self::REPO_NAME . '/zip/refs/heads/' . $branch;
        }

        public static function maybe_bust_cache() {
            if (isset($_GET['force-check'])) { delete_site_transient('examiner_theme_remote_version'); }
        }

        public static function ensure_clear_destination($options) {
            if (!is_array($options)) { return $options; }
            $hook_extra = isset($options['hook_extra']) ? $options['hook_extra'] : array();
            if (isset($hook_extra['theme']) && $hook_extra['theme'] === get_stylesheet()) {
                $options['clear_destination'] = true;
                $options['abort_if_destination_exists'] = false;
                $options['destination'] = trailingslashit(get_theme_root());
                $options['destination_name'] = get_stylesheet();
            }
            return $options;
        }

        private static function rrmdir($dir) {
            if (!is_dir($dir)) { return; }
            $items = scandir($dir);
            if ($items === false) { return; }
            foreach ($items as $item) {
                if ($item === '.' || $item === '..') { continue; }
                $path = $dir . DIRECTORY_SEPARATOR . $item;
                if (is_dir($path)) { self::rrmdir($path); } else { @unlink($path); }
            }
            @rmdir($dir);
        }

        public static function log_install_result($result, $hook_extra) {
            self::debug_log('install_result: ' . (is_wp_error($result) ? ('WP_Error ' . $result->get_error_code() . ' - ' . $result->get_error_message()) : json_encode($result)));
            if (is_wp_error($result)) {
                // First, if we have an extracted source dir, try copying it over
                if (self::$last_source_dir && is_dir(self::$last_source_dir)) {
                    $copied = self::manual_copy(self::$last_source_dir);
                    if ($copied) { return $copied; }
                }
                // As a last resort, download and install from ZIP ourselves
                $zip_url = self::get_download_zip_url();
                $tmp = download_url($zip_url);
                if (!is_wp_error($tmp) && file_exists($tmp)) {
                    $work = trailingslashit(WP_CONTENT_DIR) . 'upgrade/examiner-manual-' . time();
                    @mkdir($work, 0755, true);
                    $unzipped = unzip_file($tmp, $work);
                    @unlink($tmp);
                    if (!is_wp_error($unzipped)) {
                        // Pick the first directory in the unzipped path
                        $dirs = glob($work . '/*', GLOB_ONLYDIR);
                        if ($dirs && is_dir($dirs[0])) {
                            $copied = self::manual_copy($dirs[0]);
                            if ($copied) { return $copied; }
                        }
                    }
                }
            }
            return $result;
        }

        public static function log_pre_install($bool, $hook_extra) { self::debug_log('pre_install: ' . json_encode($hook_extra)); return $bool; }
        public static function log_post_install($bool, $hook_extra, $result) { self::debug_log('post_install: ' . (is_wp_error($result) ? ('WP_Error ' . $result->get_error_code()) : json_encode($result))); return $bool; }
        private static function rcopy($src, $dst) {
            if (is_file($src)) { @copy($src, $dst); return; }
            if (!is_dir($src)) { return; }
            if (!is_dir($dst)) { @mkdir($dst, 0755, true); }
            $items = scandir($src);
            if ($items === false) { return; }
            foreach ($items as $item) {
                if ($item === '.' || $item === '..') { continue; }
                $from = $src . DIRECTORY_SEPARATOR . $item;
                $to   = $dst . DIRECTORY_SEPARATOR . $item;
                if (is_dir($from)) { self::rcopy($from, $to); } else { @copy($from, $to); }
            }
        }
        private static function manual_copy($source_dir) {
            $dest = trailingslashit(get_theme_root()) . get_stylesheet();
            // Normalize if the style.css is nested one level deeper under a folder with theme slug
            if (!file_exists(trailingslashit($source_dir) . 'style.css')) {
                $nested = trailingslashit($source_dir) . get_stylesheet();
                if (is_dir($nested) && file_exists(trailingslashit($nested) . 'style.css')) {
                    $source_dir = $nested;
                }
            }
            self::debug_log('manual_copy: from=' . $source_dir . ' to=' . $dest);
            if (is_dir($dest)) { self::rrmdir($dest); }
            @mkdir($dest, 0755, true);
            self::rcopy($source_dir, $dest);
            if (file_exists($dest . '/style.css')) {
                self::debug_log('manual_copy: success');
                return array('destination' => $dest, 'destination_name' => get_stylesheet(), 'source' => $source_dir);
            }
            self::debug_log('manual_copy: failed');
            return false;
        }
        private static function debug_log($msg) { error_log('[Examiner Theme Updater] ' . (is_string($msg) ? $msg : json_encode($msg))); }
    }
}


