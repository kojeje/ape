<?php
/**
 *Pulsing Lite About Theme
 *
 * @package Pulsing Lite
 */

//about theme info
add_action( 'admin_menu', 'pulsing_lite_abouttheme' );
function pulsing_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'pulsing-lite'), __('About Theme Info', 'pulsing-lite'), 'edit_theme_options', 'pulsing_lite_guide', 'pulsing_lite_mostrar_guide');   
} 

//Info of the theme
function pulsing_lite_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'pulsing-lite'); ?></h3>
		   </div>
          <p><?php esc_html_e('Pulsing Lite is a creative and unbounded, sophisticated and modern, colorful and youthful, beautiful and outspoken, highly customizable and readily responsive organic farm WordPress theme. This theme help you create an impressive website for agriculture, food, gardening, landscaping, lawn, organic and health stores. This amazingly flexible, fast loading and multipurpose theme well suited for fulfilling the requirement of all type of websites. It can be used to develop a website for corporate, business, portfolio, product catalog, personal blog and services web pages. You can also use it for construction, real estate, traveling, tourism websites, eCommerce ventures, hotel projects and more.','pulsing-lite'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'pulsing-lite'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'pulsing-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'pulsing-lite'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'pulsing-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'pulsing-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'pulsing-lite'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'pulsing-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'pulsing-lite'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'pulsing-lite'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">			
        <div>				
            <a href="<?php echo esc_url(PULSING_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'pulsing-lite'); ?></a> | 
            <a href="<?php echo esc_url( PULSING_LITE_PROTHEME_URL ); ?>" target="_blank"><?php esc_html_e('Purchase Pro', 'pulsing-lite'); ?></a> | 
            <a href="<?php echo esc_url( PULSING_LITE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'pulsing-lite'); ?></a>
        </div>		
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>