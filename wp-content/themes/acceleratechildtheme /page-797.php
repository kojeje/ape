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
            <ul id="content" class="clearfix">
                <?php $loop = new WP_Query(array('post_type' => 'post', 'category_name' => 'menu_cantine', 'posts_per_page' => '1')); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <a class="faq-list" href="<?php the_permalink() ?>">
                        <li class="row">
                            <div class="col-2">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </div>
                            <p class="faq-list-title col-10"><?php the_title() ?></p>

                        </li>
                    </a>

                <?php endwhile;
                wp_reset_query(); ?>


            </ul><!-- #content -->
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