<?php
/*
Author: Erik Kroon
URL: htp://punchcreative.nl

Custom functions to add options page and more
*/

function setup_theme_option_page() {
    add_options_page( 'WPB template options', 'WPB template', 'manage_options', 'wpb-option-page', 'wpb_options' );
}
 
// Tell WordPress to call the function named "setup_theme_admin_menus"
// when it's time to create the menu pages.
add_action("admin_menu", "setup_theme_option_page");

function wpb_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
	<div class="wrap">
	<h2>WPB template instellingen</h2>
    Template instellingen zijn op dit moment nog niet mogelijk.
    </div>
    <?php
}

?>