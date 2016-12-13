<?php
/**
 * Load files
 *
 */
require get_template_directory()."/inc/wp_bootstrap_navwalker.php";
require get_template_directory()."/inc/remove_script.php";
require get_template_directory()."/inc/remove_emoji.php";


add_action('wp_enqueue_scripts','sb_scripts');
function sb_scripts(){
	wp_register_style('sb-basic-style',get_stylesheet_uri());
	wp_register_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.css');
		wp_register_style('bootstrap-min-css',get_template_directory_uri().'/css/bootstrap.min.css');

	wp_register_script('jquery',get_template_directory_uri().'/js/jquery.js');
	wp_register_script('jquery-min',get_template_directory_uri().'/js/jquery.min.js');

	wp_register_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js');
	if(!is_admin()){/*Load scripts and styles on website only*/
		wp_enqueue_style('sb-basic-style');
		wp_enqueue_style('bootstrap-css');
		wp_enqueue_style('bootstrap-min-css');
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-min');
		wp_enqueue_script('bootstrap-js');
	}	
}

/*
 * Start widgets
 */
register_sidebar(array(
'name'=> 'mySidebar',
'id '=>'sidebar_1',
'before-widget' =>'<div class="sidebar">',
'after-widget' => '</div>',
'before-title' =>'<h3>',
'after-title' =>'</h3>'
));


/*
 * Start menus
 */
register_nav_menus(
array(
'primary'=>__('Primary Menu','sb')
));