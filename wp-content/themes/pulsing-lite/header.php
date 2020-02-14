<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Pulsing Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$pulsing_lite_show_homepageslider_section 	  		            = get_theme_mod('pulsing_lite_show_homepageslider_section', false);
$pulsing_lite_show_4circlecolumn_section 	  	    = get_theme_mod('pulsing_lite_show_4circlecolumn_section', false);
$show_pulsing_lite_welcomepagebx	                = get_theme_mod('show_pulsing_lite_welcomepagebx', false);
$pulsing_lite_show_aboutuspageboxl_section 	  	        = get_theme_mod('pulsing_lite_show_aboutuspageboxl_section', false);
?>
<div id="sitelayout_type" <?php if( get_theme_mod( 'pulsing_lite_boxlayout' ) ) { echo 'class="boxlayout"'; } ?>>
<?php
if ( is_front_page() && !is_home() ) {
	if( !empty($pulsing_lite_show_homepageslider_section)) {
	 	$inner_cls = '';
	}
	else {
		$inner_cls = 'siteinner';
	}
}
else {
$inner_cls = 'siteinner';
}
?>

<div class="site-header <?php echo $inner_cls; ?>">      
<div class="container">  
     <div class="logo">
        <?php pulsing_lite_the_custom_logo(); ?>
           <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div><!-- logo -->
       <div class="right_headernav">
		    <div class="toggle">
                <a class="toggleMenu" href="#"><?php esc_html_e('Menu','pulsing-lite'); ?></a>
            </div><!-- toggle --> 
            <div class="mycustommenu">                   
               <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
           </div><!--.mycustommenu -->
        </div><!--.right_headernav -->
      <div class="clear"></div>  
 
  </div><!-- .container -->  
  </div><!--.site-header --> 

  
<?php 
if ( is_front_page() && !is_home() ) {
if($pulsing_lite_show_homepageslider_section != '') {
	for($i=1; $i<=3; $i++) {
	  if( get_theme_mod('pulsing_lite_homesliderpagebx'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('pulsing_lite_homesliderpagebx'.$i,true));
	  }
	}
?> 
<div class="nivo_slider_wrapper">                
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo $i; ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo $i; ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo $j; ?>" class="nivo-html-caption">     
    	<h2><?php the_title(); ?></h2>
    	<?php the_excerpt(); ?>
		<?php
        $pulsing_lite_homepageslider_readmore = get_theme_mod('pulsing_lite_homepageslider_readmore');
        if( !empty($pulsing_lite_homepageslider_readmore) ){ ?>
            <a class="slide_more" href="<?php the_permalink(); ?>"><?php echo esc_html($pulsing_lite_homepageslider_readmore); ?></a>
        <?php } ?>          
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>  
<div class="clear"></div>  
</div><!--end .nivo_slider_wrapper -->     
<?php } ?>
<?php } } ?>
       
        
<?php if ( is_front_page() && ! is_home() ) {
 if( $show_pulsing_lite_welcomepagebx != ''){ ?>  
<section id="sitewelcomepage_wrap">
<div class="container">                               
<?php 
if( get_theme_mod('pulsing_lite_welcomepagebx',false)) {     
$welcomequery = new WP_Query('page_id='.absint(get_theme_mod('pulsing_lite_welcomepagebx',true)) );			
    while( $welcomequery->have_posts() ) : $welcomequery->the_post(); ?>                               
     <div class="welcome_contentbox">   
      <h3><?php the_title(); ?></h3>     
      <?php if(has_post_thumbnail() ) { ?>
		<div class="welcome_bigimgbox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>        
	  <?php } ?>       
     <?php the_content();  ?> 
      <a class="learnmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more','pulsing-lite'); ?></a>	    
    </div> 
                                            
    <?php endwhile;
     wp_reset_postdata(); ?>                                    
    <?php } ?>                                 
<div class="clear"></div>                       
</div><!-- container -->
</section><!-- #sitewelcomepage_wrap-->
<?php } ?>


<?php if( $pulsing_lite_show_4circlecolumn_section != ''){ ?> 
<section id="section_wrap_2"> 
<div class="container">                      
<?php 
for($n=1; $n<=4; $n++) {    
if( get_theme_mod('pulsing_lite_circle_services_pagecol'.$n,false)) {      
	$servicesquery = new WP_Query('page_id='.absint(get_theme_mod('pulsing_lite_circle_services_pagecol'.$n,true)) );		
	while( $servicesquery->have_posts() ) : $servicesquery->the_post(); ?>     
	<div class="circle_4columnbx <?php if($n % 4 == 0) { echo "last_column"; } ?>">                                       
		<?php if(has_post_thumbnail() ) { ?>
		<div class="circle_imagebox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>        
		<?php } ?>	
         <div class="circle_4columncontent_bx">	
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                     
            <?php the_excerpt(); ?>	
            <a class="pagemore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more...','pulsing-lite'); ?></a>	
         </div>                                                  
	</div>
	<?php endwhile;
	wp_reset_postdata();                                  
} } ?>                                 
  <div class="clear"></div>  
 </div><!-- .container --> 
</section><!-- #section-wrap-2-->                	      
<?php } ?>


<?php if( $pulsing_lite_show_aboutuspageboxl_section != ''){ ?>  
<section id="aboutus_section">
<div class="container">                      
<?php   
if( get_theme_mod('pulsing_lite_aboutuspagecol',false)) {      
	$aboutquery = new WP_Query('page_id='.absint(get_theme_mod('pulsing_lite_aboutuspagecol',true)) );		
	while( $aboutquery->have_posts() ) : $aboutquery->the_post(); ?>     
	<div class="aboutpage_griper">                                       
		<?php if(has_post_thumbnail() ) { ?>
		<div class="aboutpage_imgcol"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>        
		<?php } ?>
		<div class="aboutpage_contentbox">
		<h3><?php the_title(); ?></h3>                                     
		<?php the_content(); ?>                      
		</div>                                   
	 </div>
	<?php endwhile;
	wp_reset_postdata();                                  
} ?>                                 
<div class="clear"></div>  
</div><!-- .container -->                  
</section><!-- #aboutus_section-->                      	      
<?php } ?>
<?php } ?>