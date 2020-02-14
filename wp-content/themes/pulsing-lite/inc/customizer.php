<?php    
/**
 *Pulsing Lite Theme Customizer
 *
 * @package Pulsing Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pulsing_lite_customize_register( $wp_customize ) {	
	
	function pulsing_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );
	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function pulsing_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}  
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	 //Panel for section & control
	$wp_customize->add_panel( 'pulsing_lite_panel_area', array(
		'priority' => null,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Options Panel', 'pulsing-lite' ),		
	) );
	
	//Layout Options
	$wp_customize->add_section('pulsing_lite_layout_option',array(
		'title' => __('Site Layout','pulsing-lite'),			
		'priority' => 1,
		'panel' => 	'pulsing_lite_panel_area',          
	));		
	
	$wp_customize->add_setting('pulsing_lite_boxlayout',array(
		'sanitize_callback' => 'pulsing_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'pulsing_lite_boxlayout', array(
    	'section'   => 'pulsing_lite_layout_option',    	 
		'label' => __('Check to Box Layout','pulsing-lite'),
		'description' => __('If you want to box layout please check the Box Layout Option.','pulsing-lite'),
    	'type'      => 'checkbox'
     )); //Layout Section 
	
	$wp_customize->add_setting('pulsing_lite_color_scheme',array(
		'default' => '#26bdef',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'pulsing_lite_color_scheme',array(
			'label' => __('Color Scheme','pulsing-lite'),			
			'description' => __('More color options in PRO Version','pulsing-lite'),
			'section' => 'colors',
			'settings' => 'pulsing_lite_color_scheme'
		))
	);	
		
	
	// Homepage Slider Section		
	$wp_customize->add_section( 'pulsing_lite_homepage_sliderpanel', array(
		'title' => __('Homepage Slider', 'pulsing-lite'),
		'priority' => null,
		'description' => __('Default image size for slider is 1400 x 690 pixel.','pulsing-lite'), 
		'panel' => 	'pulsing_lite_panel_area',           			
    ));
	
	$wp_customize->add_setting('pulsing_lite_homesliderpagebx1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('pulsing_lite_homesliderpagebx1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide one:','pulsing-lite'),
		'section' => 'pulsing_lite_homepage_sliderpanel'
	));	
	
	$wp_customize->add_setting('pulsing_lite_homesliderpagebx2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('pulsing_lite_homesliderpagebx2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide two:','pulsing-lite'),
		'section' => 'pulsing_lite_homepage_sliderpanel'
	));	
	
	$wp_customize->add_setting('pulsing_lite_homesliderpagebx3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('pulsing_lite_homesliderpagebx3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide three:','pulsing-lite'),
		'section' => 'pulsing_lite_homepage_sliderpanel'
	));	// Slider Section	
	
	$wp_customize->add_setting('pulsing_lite_homepageslider_readmore',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('pulsing_lite_homepageslider_readmore',array(	
		'type' => 'text',
		'label' => __('Add slider Read more button name here','pulsing-lite'),
		'section' => 'pulsing_lite_homepage_sliderpanel',
		'setting' => 'pulsing_lite_homepageslider_readmore'
	)); // Slider Read More Button Text
	
	$wp_customize->add_setting('pulsing_lite_show_homepageslider_section',array(
		'default' => false,
		'sanitize_callback' => 'pulsing_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'pulsing_lite_show_homepageslider_section', array(
	    'settings' => 'pulsing_lite_show_homepageslider_section',
	    'section'   => 'pulsing_lite_homepage_sliderpanel',
	     'label'     => __('Check To Show This Section','pulsing-lite'),
	   'type'      => 'checkbox'
	 ));//Show Slider Section	
	 
	 
	 // Welcome Section 
	$wp_customize->add_section('pulsing_lite_sitewelcome_section', array(
		'title' => __('Welcome Section','pulsing-lite'),
		'description' => __('Select Pages from the dropdown for welcome section','pulsing-lite'),
		'priority' => null,
		'panel' => 	'pulsing_lite_panel_area',          
	));		
	
	$wp_customize->add_setting('pulsing_lite_welcomepagebx',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'pulsing_lite_welcomepagebx',array(
		'type' => 'dropdown-pages',			
		'section' => 'pulsing_lite_sitewelcome_section',
	));		
	
	$wp_customize->add_setting('show_pulsing_lite_welcomepagebx',array(
		'default' => false,
		'sanitize_callback' => 'pulsing_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_pulsing_lite_welcomepagebx', array(
	    'settings' => 'show_pulsing_lite_welcomepagebx',
	    'section'   => 'pulsing_lite_sitewelcome_section',
	    'label'     => __('Check To Show This Section','pulsing-lite'),
	    'type'      => 'checkbox'
	));//Show Welcome Section 
	 
	 
	 // Four column Services section
	$wp_customize->add_section('pulsing_lite_4circlelservices_area', array(
		'title' => __('Four Column Services Section','pulsing-lite'),
		'description' => __('Select pages from the dropdown for services section','pulsing-lite'),
		'priority' => null,
		'panel' => 	'pulsing_lite_panel_area',          
	));	
	
	$wp_customize->add_setting('pulsing_lite_circle_services_pagecol1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'pulsing_lite_circle_services_pagecol1',array(
		'type' => 'dropdown-pages',			
		'section' => 'pulsing_lite_4circlelservices_area',
	));		
	
	$wp_customize->add_setting('pulsing_lite_circle_services_pagecol2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'pulsing_lite_circle_services_pagecol2',array(
		'type' => 'dropdown-pages',			
		'section' => 'pulsing_lite_4circlelservices_area',
	));
	
	$wp_customize->add_setting('pulsing_lite_circle_services_pagecol3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'pulsing_lite_circle_services_pagecol3',array(
		'type' => 'dropdown-pages',			
		'section' => 'pulsing_lite_4circlelservices_area',
	));
	
	
	$wp_customize->add_setting('pulsing_lite_circle_services_pagecol4',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'pulsing_lite_circle_services_pagecol4',array(
		'type' => 'dropdown-pages',			
		'section' => 'pulsing_lite_4circlelservices_area',
	));
	
	
	$wp_customize->add_setting('pulsing_lite_show_4circlecolumn_section',array(
		'default' => false,
		'sanitize_callback' => 'pulsing_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'pulsing_lite_show_4circlecolumn_section', array(
	   'settings' => 'pulsing_lite_show_4circlecolumn_section',
	   'section'   => 'pulsing_lite_4circlelservices_area',
	   'label'     => __('Check To Show This Section','pulsing-lite'),
	   'type'      => 'checkbox'
	 ));//Show 4 Circle Services section
	 	 
	
	// About Us section
	$wp_customize->add_section('pulsing_lite_aboutuspagecol_section', array(
		'title' => __('About Us Section','pulsing-lite'),
		'description' => __('Select pages from the dropdown for about us section','pulsing-lite'),
		'priority' => null,
		'panel' => 	'pulsing_lite_panel_area',          
	));	
	
	$wp_customize->add_setting('pulsing_lite_aboutuspagecol',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'pulsing_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'pulsing_lite_aboutuspagecol',array(
		'type' => 'dropdown-pages',			
		'section' => 'pulsing_lite_aboutuspagecol_section',
	));	
	
	
	$wp_customize->add_setting('pulsing_lite_show_aboutuspageboxl_section',array(
		'default' => false,
		'sanitize_callback' => 'pulsing_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'pulsing_lite_show_aboutuspageboxl_section', array(
	   'settings' => 'pulsing_lite_show_aboutuspageboxl_section',
	   'section'   => 'pulsing_lite_aboutuspagecol_section',
	   'label'     => __('Check To Show This Section','pulsing-lite'),
	   'type'      => 'checkbox'
	 ));//Show About Us section 
	
	 
	 //Footer social icons
	$wp_customize->add_section('pulsing_lite_footersocialicon_section',array(
		'title' => __('Footer social icons','pulsing-lite'),
		'description' => __( 'Add social icons link here to display icons in footer.', 'pulsing-lite' ),			
		'priority' => null,
		'panel' => 	'pulsing_lite_panel_area', 
	));
	
	$wp_customize->add_setting('pulsing_lite_fb_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('pulsing_lite_fb_link',array(
		'label' => __('Add facebook link here','pulsing-lite'),
		'section' => 'pulsing_lite_footersocialicon_section',
		'setting' => 'pulsing_lite_fb_link'
	));	
	
	$wp_customize->add_setting('pulsing_lite_twitt_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('pulsing_lite_twitt_link',array(
		'label' => __('Add twitter link here','pulsing-lite'),
		'section' => 'pulsing_lite_footersocialicon_section',
		'setting' => 'pulsing_lite_twitt_link'
	));
	
	$wp_customize->add_setting('pulsing_lite_gplus_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('pulsing_lite_gplus_link',array(
		'label' => __('Add google plus link here','pulsing-lite'),
		'section' => 'pulsing_lite_footersocialicon_section',
		'setting' => 'pulsing_lite_gplus_link'
	));
	
	$wp_customize->add_setting('pulsing_lite_linked_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('pulsing_lite_linked_link',array(
		'label' => __('Add linkedin link here','pulsing-lite'),
		'section' => 'pulsing_lite_footersocialicon_section',
		'setting' => 'pulsing_lite_linked_link'
	));
	
	$wp_customize->add_setting('pulsing_lite_show_footersocial_section',array(
		'default' => false,
		'sanitize_callback' => 'pulsing_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'pulsing_lite_show_footersocial_section', array(
	   'settings' => 'pulsing_lite_show_footersocial_section',
	   'section'   => 'pulsing_lite_footersocialicon_section',
	   'label'     => __('Check To show This Section','pulsing-lite'),
	   'type'      => 'checkbox'
	 ));//Show footer Social icons Section 		 
	 
		 
}
add_action( 'customize_register', 'pulsing_lite_customize_register' );

function pulsing_lite_custom_css(){ 
?>
	<style type="text/css"> 					
        a, .blogdefault_gridlayout h2 a:hover,
        #sidebar ul li a:hover,								
        .blogdefault_gridlayout h3 a:hover,
		.welcome_contentbox h3 span,					
        .recent-post h6:hover,		
        .postmeta a:hover,
		.mycustommenu ul li a:hover, 
		.mycustommenu ul li.current-menu-item a,
		.mycustommenu ul li.current-menu-parent a.parent,
		.mycustommenu ul li.current-menu-item ul.sub-menu li a:hover,
        .button:hover,		
		.circle_4columnbx:hover h3 a,
		.aboutpage_griper .pagereadmore,	
		.aboutpage_griper:hover h3 a		      				
            { color:<?php echo esc_html( get_theme_mod('pulsing_lite_color_scheme','#26bdef')); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover, 
        #commentform input#submit:hover,		
        .nivo-controlNav a.active,		
        .learnmore,
		.footersocial a:hover,
		.circle_4columnbx .circle_imagebox,	
		.circle_4columnbx:hover .pagemore,	
		.nivo-caption .slide_more:hover, 		
		.aboutpage_griper:hover .pagereadmore,												
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit'],				
        nav.pagination .page-numbers.current,		
        .toggle a	
            { background-color:<?php echo esc_html( get_theme_mod('pulsing_lite_color_scheme','#26bdef')); ?>;}
			
		.nivo-caption .slide_more:hover,		
		.aboutpage_griper .pagereadmore,
		blockquote	        
            { border-color:<?php echo esc_html( get_theme_mod('pulsing_lite_color_scheme','#26bdef')); ?>;}			
		
         	
    </style> 
<?php                
}
         
add_action('wp_head','pulsing_lite_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pulsing_lite_customize_preview_js() {
	wp_enqueue_script( 'pulsing_lite_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20191002', true );
}
add_action( 'customize_preview_init', 'pulsing_lite_customize_preview_js' );