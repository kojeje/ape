<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
// Faire apparaitre la page Options d'ACF
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}
function custom_query_shortcode($atts)
{

	// EXAMPLE USAGE:
	// [loop the_query="showposts=100&post_type=page&post_parent=453"]

	// Defaults
	extract(shortcode_atts(array(
		"the_query" => ''
	), $atts));

	// de-funkify query
	$the_query = preg_replace('~&#x0*([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $the_query);
	$the_query = preg_replace('~&#0*([0-9]+);~e', 'chr(\\1)', $the_query);

	// query is made               
	query_posts($the_query);

	// Reset and setup variables
	$output = '';
	$temp_title = '';
	$temp_link = '';

	// the loop
	if (have_posts()) : while (have_posts()) : the_post();

			$temp_title = get_the_title($post->ID);
			$temp_link = get_permalink($post->ID);

			// output all findings - CUSTOMIZE TO YOUR LIKING
			$output .= "<li><a href='$temp_link'>$temp_title</a></li>";

		endwhile;
	else :

		$output .= "nothing found.";

	endif;

	wp_reset_query();
	return $output;
}
add_shortcode("loop", "custom_query_shortcode");

?>
