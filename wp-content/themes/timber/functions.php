<?php

add_action( 'wp_enqueue_scripts', 'timber_style' );
add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_style() {
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . './assets/css/style.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );	
}


function timber_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'script', get_template_directory_uri() .'./assets/js/script.min.js',
	array(), 'null', true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() .'./assets/js/main.js',
	array(), 'null', true );
}
?>