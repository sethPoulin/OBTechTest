<?php

/**
 * Mytheme functions and definitions
 */

//Function to use external stylesheet.  get_stylesheet_uri() looks for and uses style.css by default.
function enqueue_doggostheme_styles(){
  //we are naming the style doggostheme-style
  wp_enqueue_style('doggostheme-style',get_stylesheet_uri());
}
//This ⬇️ is a hook.  The first argument tells WP where to run the function specified in the second argument.  The first argument will be a section of the WP build script that always runs, so we are injecting a new action into this script at the point specified.
add_action('wp_enqueue_scripts', 'enqueue_doggostheme_styles');

function doggostheme_setup(){
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme','doggostheme_setup');

function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Nunito:400,400i,700i,900&display=swap');
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
add_filter( 'http_request_host_is_external', '__return_true' );

?>