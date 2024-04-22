<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}


require get_template_directory() . '/inc/common-func.php';	

if ( class_exists( 'UM' ) ) {
	require get_template_directory() . '/inc/um-func.php';	
}




function noste_setup() {
	load_theme_textdomain( 'noste', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

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
	
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'noste_setup' );

function noste_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'noste_content_width', 640 );
}
add_action( 'after_setup_theme', 'noste_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function noste_scripts() {
	// wp_enqueue_script('tailwind-script', 'https://cdn.tailwindcss.com', [], '3.4.3', false);

	// wp_enqueue_script( 'tailwind-config', get_template_directory_uri() . '/assets/js/tailwind-config.js', [ 'tailwind-script' ], '3.4.3', false );
	
	wp_register_style( 'daterangepicker-style', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css', ['noste-style'] );
	wp_register_script( 'moment-script', 'https://cdn.jsdelivr.net/momentjs/latest/moment.min.js', array('jquery'), '1.0', true );
	wp_register_script( 'date-picker-script', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js', array('jquery', 'moment-script'), '1.0', true );


	if ( is_page( 60 ) ) {
		wp_enqueue_style( 'daterangepicker-style' );
		wp_enqueue_script('moment-script');
		wp_enqueue_script('date-picker-script');
	}


	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'date-picker-script'], '1.0', true);
	wp_localize_script( 'main-script', 'main_ajax_object',
		array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		)
	);

	wp_enqueue_style( 'tailwind-style', get_template_directory_uri() . '/assets/css/style.css', [], rand(1, 1000));
	wp_enqueue_style( 'noste-style', get_stylesheet_uri(), ['tailwind-style'], rand(1, 100) );
	wp_style_add_data( 'noste-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'noste_scripts' );



