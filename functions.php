<?php

function app_setup_theme(){
//content width
    if ( ! isset( $content_width ) ) $content_width = 900;
    

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    add_theme_support( "title-tag" );
    add_theme_support( 'automatic-feed-links' );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}

add_action( 'after_setup_theme', 'app_setup_theme' );

function project_app_theme_scriptz(){
            //enqueing styles
    wp_enqueue_style( 'app-style', get_template_directory_uri() .  '/style.css' );
     wp_enqueue_style( 'app-woocommerce-style', get_template_directory_uri() .  '/css/woocommerce.css' );
    
        //script
     wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/fontawesome.js', false );
     wp_enqueue_script( 'appquery', get_template_directory_uri() . '/js/jquery.js', array('jquery'), '1.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'project_app_theme_scriptz' );
