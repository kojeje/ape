<?php

/**
 * Template name : actu
 */
get_header(); ?>

<?php do_action('accelerate_before_body_content'); ?>
<div id="primary">
    <h1>Les parents élus au conseil d'école</h1>
    <!-- <h3>Les questions fréquemment posées au conseil décole, ainsi que les réponses...</h2> -->
    <div id="content" class="clearfix">
        <?php $loop = new WP_Query(array('post_type' => 'trombis',  'posts_per_page' => '10')); ?>
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
        <div class="text-bloc-content">
            <h1 class="col-12">Nous contacter</h1>
            <div class="col-12">
                <?php the_content() ?>
            </div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->


<?php accelerate_sidebar_select(); ?>

<?php do_action('accelerate_after_body_content'); ?>

<?php get_footer(); ?>