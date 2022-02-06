<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


add_action( 'wp_enqueue_scripts', 'estore_scripts' );

function estore_scripts() {
	wp_enqueue_style( 'estore-style', get_stylesheet_uri() );
	
}


add_action( 'wp_enqueue_scripts', 'estore_style' );

function estore_style() {

    wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . 
    '/assets/js/navigation.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'estore-customizer', get_template_directory_uri() . 
    '/assets/js/customizer.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

