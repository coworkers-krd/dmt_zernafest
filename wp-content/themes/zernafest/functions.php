<?php

add_action( 'wp_enqueue_scripts', 'styleConnect' );

function styleConnect(){
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/plugins/slick/slick.css');
	wp_enqueue_style( 'modalvideo', get_template_directory_uri() . '/plugins/modal-video/modal-video.min.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

}
