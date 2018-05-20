<?php
 
//ENQUEUE CHILD THEME CSS//////////////////////////////// 
function bbe_child_enqueues() {
	//CSS
	wp_register_style('bbe-child', get_bloginfo('stylesheet_directory') . '/style.css', false, null);
	wp_enqueue_style('bbe-child');
	//JS
	
  	wp_register_script('bbe-child-main',  get_bloginfo('stylesheet_directory') . '/main.js', false, null, true);
	wp_enqueue_script('bbe-child-main');
	
	/* Enqueue more styles and scripts in here  if you need */

}
add_action('wp_enqueue_scripts', 'bbe_child_enqueues', 101);