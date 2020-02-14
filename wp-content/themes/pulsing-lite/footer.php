<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pulsing Lite
 */
 $pulsing_lite_show_footersocial_section = get_theme_mod('pulsing_lite_show_footersocial_section', false);
?>

<div class="footer-wrapper">       
            <div class="container">                       	
                <div class="design-by">                
                <?php bloginfo('name'); ?> | <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pulsing-lite' ) ); ?>">
				     <?php
				         /* translators: %s: WordPress. */
				          printf( __( 'Proudly Powered by %s.', 'pulsing-lite' ), 'WordPress' );
				     ?>
			       </a>
                   <a href="<?php echo esc_url( __( 'https://gracethemes.com/themes/pulsing-lite/', 'pulsing-lite' ) ); ?>" target="_blank">
				       <?php printf( __( 'Theme by %s', 'pulsing-lite' ), 'Grace Themes' ); ?>
                    </a>  
                
                </div>
                
             <?php if( $pulsing_lite_show_footersocial_section != ''){ ?> 
                 <div class="footersocial">                                                
                   <?php $pulsing_lite_fb_link = get_theme_mod('pulsing_lite_fb_link');
                    if( !empty($pulsing_lite_fb_link) ){ ?>
                    <a title="facebook" class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($pulsing_lite_fb_link); ?>"></a>
                   <?php } ?>
                
                   <?php $pulsing_lite_twitt_link = get_theme_mod('pulsing_lite_twitt_link');
                    if( !empty($pulsing_lite_twitt_link) ){ ?>
                    <a title="twitter" class="fab fa-twitter" target="_blank" href="<?php echo esc_url($pulsing_lite_twitt_link); ?>"></a>
                   <?php } ?>
            
                  <?php $pulsing_lite_gplus_link = get_theme_mod('pulsing_lite_gplus_link');
                    if( !empty($pulsing_lite_gplus_link) ){ ?>
                    <a title="google-plus" class="fab fa-google-plus" target="_blank" href="<?php echo esc_url($pulsing_lite_gplus_link); ?>"></a>
                  <?php }?>
            
                  <?php $pulsing_lite_linked_link = get_theme_mod('pulsing_lite_linked_link');
                    if( !empty($pulsing_lite_linked_link) ){ ?>
                    <a title="linkedin" class="fab fa-linkedin" target="_blank" href="<?php echo esc_url($pulsing_lite_linked_link); ?>"></a>
                  <?php } ?>                  
              </div><!--end .footersocial--> 
            <?php } ?>  
          </div><!--end .container-->                     
     </div><!--end #footer-wrapper-->
</div><!--#end sitelayout_type-->

<?php wp_footer(); ?>
</body>
</html>