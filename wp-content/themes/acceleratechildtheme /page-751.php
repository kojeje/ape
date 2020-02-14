<?php

/**
 * Template name : faq
 */
get_header(); ?>

<?php do_action('accelerate_before_body_content'); ?>

<div id="primary">
    <h1>Conseil d'école: La Foire aux questions</h1>
    <h3>Les questions fréquemment posées au conseil décole, ainsi que les réponses...</h2>
        <ul id="content" class="clearfix">
            <?php $loop = new WP_Query(array('post_type' => 'faqs', 'posts_per_page' => '10')); ?>
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
</div><!-- #primary -->


<?php accelerate_sidebar_select(); ?>

<?php do_action('accelerate_after_body_content'); ?>

<?php get_footer(); ?>