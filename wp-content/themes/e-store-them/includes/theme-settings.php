<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! function_exists( 'estore_setup' ) ) :


    add_action( 'after_setup_theme', 'estore_setup' );

    function estore_setup() {
        
        load_theme_textdomain( 'estore', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
            * Let WordPress manage the document title.
            * By adding theme support, we declare that this theme does not use a
            * hard-coded <title> tag in the document head, and expect WordPress to
            * provide it for us.
            */
        add_theme_support( 'title-tag' );

        /*
            * Enable support for Post Thumbnails on posts and pages.
            *
            * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
            */
        add_theme_support( 'post-thumbnails' );

        /*
            * Switch default core markup for search form, comment form, and comments
            * to output valid HTML5.
            */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );


        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        add_theme_support(
            'woocommerce',
            array(
                'thumbnail_image_width' => 150,
                'single_image_width'    => 300,
                'product_grid'          => array(
                    'default_rows'    => 3,
                    'min_rows'        => 1,
                    'default_columns' => 4,
                    'min_columns'     => 1,
                    'max_columns'     => 6,
                ),
            )
        );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    
    }
endif;

function estore_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'estore_content_width', 640 );
}
add_action( 'after_setup_theme', 'estore_content_width', 0 );


