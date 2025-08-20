<?php
// Prevent direct access
if (!defined('ABSPATH')) { exit; }

if (!class_exists('Examiner_Theme_Updater')) {
    class Examiner_Theme_Updater {
        private const REPO_OWNER = 'Stepfox';
        private const REPO_NAME  = 'examiner';
        private const BRANCH     = 'main';

        public static function init() {
            add_filter('pre_set_site_transient_update_themes', [__CLASS__, 'check_for_update']);
            add_filter('themes_api', [__CLASS__, 'themes_api'], 10, 3);
            add_filter('upgrader_source_selection', [__CLASS__, 'fix_github_zip_folder'], 10, 4);
            add_action('load-update-core.php', [__CLASS__, 'maybe_bust_cache']);
            add_action('load-themes.php', [__CLASS__, 'maybe_bust_cache']);
        }

        public static function check_for_update($transient) {
            if (empty($transient) || !is_object($transient)) { return $transient; }

            $theme      = wp_get_theme();
            $stylesheet = get_template();
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
            if ($action !== 'theme_information' || empty($args->slug) || $args->slug !== get_template()) {
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
            if (empty($hook_extra['theme']) || $hook_extra['theme'] !== get_template()) { return $source; }
            $source_basename = basename($source);
            $theme_dir_name = get_template();

            $has_style = file_exists(trailingslashit($source) . 'style.css');
            $has_nested = is_dir(trailingslashit($source) . $theme_dir_name) && file_exists(trailingslashit($source) . $theme_dir_name . '/style.css');
            if ($has_nested) { return trailingslashit($source) . $theme_dir_name; }
            if ($has_style && $source_basename !== $theme_dir_name) {
                $new_source = trailingslashit(dirname($source)) . $theme_dir_name;
                if (is_dir($new_source)) { self::rrmdir($new_source); }
                @rename($source, $new_source);
                return is_dir($new_source) ? $new_source : $source;
            }
            if (strpos($source_basename, self::REPO_NAME) !== false && $source_basename !== $theme_dir_name) {
                $new_source = trailingslashit(dirname($source)) . $theme_dir_name;
                if (is_dir($new_source)) { self::rrmdir($new_source); }
                @rename($source, $new_source);
                return is_dir($new_source) ? $new_source : $source;
            }
            return $source;
        }

        private static function get_remote_version() {
            $cache_key = 'examiner_theme_remote_version';
            $cached = get_site_transient($cache_key);
            if ($cached && !isset($_GET['force-check'])) { return $cached; }
            $candidates = array(
                'https://raw.githubusercontent.com/' . self::REPO_OWNER . '/' . self::REPO_NAME . '/' . self::BRANCH . '/style.css',
                'https://raw.githubusercontent.com/' . self::REPO_OWNER . '/' . self::REPO_NAME . '/' . self::BRANCH . '/theme/style.css',
            );
            $body = '';
            foreach ($candidates as $url) {
                $res = wp_remote_get($url, array('timeout' => 10, 'user-agent' => 'WordPress/' . get_bloginfo('version')));
                if (!is_wp_error($res) && wp_remote_retrieve_response_code($res) === 200) {
                    $tmp = wp_remote_retrieve_body($res);
                    if ($tmp) { $body = $tmp; break; }
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

        private static function get_download_zip_url() {
            return 'https://codeload.github.com/' . self::REPO_OWNER . '/' . self::REPO_NAME . '/zip/refs/heads/' . self::BRANCH;
        }

        public static function maybe_bust_cache() {
            if (isset($_GET['force-check'])) { delete_site_transient('examiner_theme_remote_version'); }
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
    }
}


