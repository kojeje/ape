<?php

/**
 * Theme Page Section for our theme.
 *
 * @package    ThemeGrill
 * @subpackage Accelerate
 * @since      Accelerate 1.0
 */
get_header(); ?>

<?php do_action('accelerate_before_body_content'); ?>

<div id="primary">
    <div id="content" class="row clearfix">
        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content-blog-small-image', 'page'); ?>

            <?php
            do_action('accelerate_before_comments_template');
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number()) {
                comments_template();
            }
            do_action('accelerate_after_comments_template');
            ?>

        <?php endwhile; ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php accelerate_sidebar_select(); ?>

<?php do_action('accelerate_after_body_content'); ?>

<?php get_footer(); ?>