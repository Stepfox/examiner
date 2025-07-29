<?php
/**
 * Comments Template
 * Required by ThemeForest even for block themes
 * 
 * @package Examiner
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Don't load directly
if (post_password_required()) {
    return;
}

// For block themes, comments are handled via blocks
if (function_exists('wp_is_block_theme') && wp_is_block_theme()) {
    // Block themes handle comments through blocks
    // This file exists for ThemeForest compliance
    return;
}

// Fallback for traditional comment handling (if needed)
if (have_comments()) : ?>
    <div id="comments" class="comments-area">
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ('1' === $comments_number) {
                printf(_x('One thought on &ldquo;%s&rdquo;', 'comments title', 'examiner'), get_the_title());
            } else {
                printf(
                    _nx(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'examiner'
                    ),
                    number_format_i18n($comments_number),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 42,
            ));
            ?>
        </ol>

        <?php
        the_comments_navigation();
        ?>
    </div>
<?php endif;

// Comment form
if (comments_open() || get_comments_number()) {
    comment_form();
} 