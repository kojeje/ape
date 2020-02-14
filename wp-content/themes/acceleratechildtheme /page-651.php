<?php

/**
 * Template name : actu
 */
get_header(); ?>

<?php do_action('accelerate_before_body_content'); ?>
<div id="primary">
    <h1>L'actualité des représentants de parents d'élèves au conseil d'école</h1>
    <!-- <h3>Les questions fréquemment posées au conseil décole, ainsi que les réponses...</h2> -->
    <div id="content" class="clearfix">
        <?php $loop = new WP_Query(array('post_type' => 'post', 'category_name' => 'RPE',  'posts_per_page' => '10')); ?>
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
    </div><!-- #content -->
</div><!-- #primary -->




<?php accelerate_sidebar_select(); ?>

<?php do_action('accelerate_after_body_content'); ?>

<?php get_footer(); ?>
