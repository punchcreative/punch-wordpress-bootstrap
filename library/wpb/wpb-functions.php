<?php
/*
Author: Erik Kroon
URL: htp://punchcreative.nl

Custom functions for this template
*/

// Functie om mogelijk te maken header en footer files in subdirectory te plaatsen
// gebruik wpb_header in plaats van get_header in template files
// gebruik wpb_footer in plaats van get_footer in template files

function wpb_header( $name = null ) {
    do_action( 'wpb_header', $name );
 
    $templates = array();
    if ( isset($name) )
        $templates[] = "library/wpb/header-{$name}.php";
 
    $templates[] = "library/wpb/header.php";
 
    // Backward compat code will be removed in a future release
    if ('' == locate_template($templates, true))
        load_template( ABSPATH . WPINC . '/theme-compat/header.php');
}
add_action('get_header', 'wpb_header');


function wpb_footer( $name = null ) {
    do_action( 'wpb_footer', $name );
 
    $templates = array();
    if ( isset($name) )
        $templates[] = "library/wpb/footer-{$name}.php";
 
    $templates[] = "library/wpb/footer.php";
 
    // Backward compat code will be removed in a future release
    if ('' == locate_template($templates, true))
        load_template( ABSPATH . WPINC . '/theme-compat/footer.php');
}
add_action('get_footer', 'wpb_footer');

function wpb_pagename( $name = null ) {
	if ( !$name && $id > 0 ) {
		// If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
		$post = $wp_query->get_queried_object();
		$pagename = $post->post_name;
	}
	$the_pagename = $pagename;
	
	return $the_pagename;
}
?>