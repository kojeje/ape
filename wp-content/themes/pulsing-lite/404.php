<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Pulsing Lite
 */

get_header(); ?>

<div class="container">
    <div class="site_innerpage_holder">
        <section class="site_innerpage_content_wrap">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'pulsing-lite' ); ?></h1>                
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php esc_html_e( 'Looks like you have taken a wrong turn.....<br />Don\'t worry... it happens to the best of us.', 'pulsing-lite' ); ?></p>  
            </div><!-- .page-content -->
        </section>
        <?php get_sidebar();?>       
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>