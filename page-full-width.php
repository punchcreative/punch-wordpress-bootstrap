<?php
/*
Template Name: Full Width Page
*/
 
if ( is_home() ) :
	wpb_header( 'navbar' );
elseif ( is_front_page() ) :
	wpb_header( 'home' );
elseif ( is_404() ) :
	wpb_header( '404' );
else :
	wpb_header( 'navbar' );
endif;

get_template_part( 'library/wpb/templates/page', 'fw-no-sidebars' );

wpb_footer(); ?>