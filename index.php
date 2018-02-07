<?php
/*
  Plugin Name: BFCG Theme Documentation
  Description: Documentation for custom WordPress themes created by Bigfish Create Group
  Version: 1.0
  Author: Bigfish Creative Group
  Author URI: http://thinkbigfish.com
  Text Domain: bfcg-documentation
*/

/*-----------------------------------------------------------------------------------*/
// ADD A HELP PAGE
/*-----------------------------------------------------------------------------------*/
add_filter( 'contextual_help', 'dte_remove_help', 999, 3 );
function dte_remove_help($old_help, $screen_id, $screen){
	//$whitelist = array('admin.php', 'post-new.php');
	$screen = get_current_screen();
	if ($screen->base === 'toplevel_page_getting-help') {
    	return false;
    }
    $screen->remove_help_tabs();
    return $old_help;

}

add_action('admin_menu', 'dte_help_page');
function dte_help_page() {
	global $wp_meta_boxes;
	$dte_help_page = add_menu_page(
		'Documentation',
		'Documentation',
		'manage_options',
		'getting-help',
		'rhp_help_callback',
		'dashicons-welcome-learn-more',
		'1'
	);
	add_action( 'load-'.$dte_help_page, 'rhp_add_help_tab' );
}

// STYLESHEET
function add_my_stylesheet() { wp_enqueue_style( 'myCSS', plugins_url( '/assets/styles.css', __FILE__ ) ); }
add_action('admin_print_styles', 'add_my_stylesheet');

/*
	- Introduction
	- Page Templates
	- Page Layouts
	- Page Components
	- Blog Posts
	- Post Types
	- Media Library
	- Content
	- Admin
*/
function rhp_add_help_tab () {
	$screen = get_current_screen();

	$screen->add_help_tab( array(
		'id'		=> 'rhp-help',
		'title'		=> 'Introduction',
		'content'	=> '
						<h1>Introduction</h1>
						<p>Welcome to the Partners in Action theme help section. You will find information for each section of your website within the tabs to the left.</p>
						<p>In order to keep your site running smoothly it is recommended that you maintain your site on a regular basis. For more information regarding this visit the <a href="https://codex.wordpress.org/WordPress_Site_Maintenance" target="_blank">WordPress Site Maintenance page</a> with the WordPress Codex.</p>
						<p>For additional help please contact the <a href="mailto:dev@thinkbigfish.com">Bigfish Developers</a>.</p>
						'
	) );
	include 'contents/templates.php';
	include 'contents/layouts.php';
	include 'contents/components.php';
	include 'contents/posts.php';
	include 'contents/events.php';
	include 'contents/sidebar-blocks.php';
	include 'contents/testimonials.php';
	include 'contents/ventures.php';
	include 'contents/media.php';
	include 'contents/content.php';
	include 'contents/admin.php';
	include 'contents/styleguide.php';

	$screen->set_help_sidebar(
            '<p>Quick Links</p>
            <p><a href="https://codex.wordpress.org/">WordPress Codex</a></p>
            '
    );
}



function rhp_help_callback(  ){
   echo '<script>
	       jQuery(window).load(function(){
				"use strict";
			 	jQuery("#contextual-help-link").click();
			});
		</script>';
}
