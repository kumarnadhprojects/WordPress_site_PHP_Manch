<?php

function load_stylesheets()
{
	
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(), false, 'all');
	wp_enqueue_style('bootstrap');
	
	wp_register_style('style', get_template_directory_uri() . '/style.css',array(), false, 'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function include_jquery()
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery',get_template_directory_uri() . '/js/jquery-3.1.3.min.js', '', 1, true);
	add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts','include_jquery');

function loadjs()
{
	wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','loadjs');

add_theme_support('menus');
//Add title
add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'textdomain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}
//End title

//Form submit code here

if(isset($_POST['submit'])) {
	
	global $wpdb;
	
	$data_array = array('name' => $_POST['name'],
						'company' => $_POST['company'],
						'designation' => $_POST['designation'],
						'email' => $_POST['email'],
						'phone' => $_POST['phone']
						);
	$table_name = 'form_entry';
	
	$rowResult = $wpdb->insert($table_name, $data_array , $format=NULL);
	
	//$rowResult return 1
	if($rowResult == 1) {
		header('Location:http://localhost/manch/thank-you');
	}
	else
	{
		echo 'Error form submission!';
	}
die;
}