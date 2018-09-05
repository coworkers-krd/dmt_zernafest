<?php

add_action( 'wp_enqueue_scripts', 'styleConnect' );

function styleConnect(){
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script( 'modalvideo', get_template_directory_uri() . 'plugins/modal-video/jquery-modal-video.js');
	wp_enqueue_script( 'slick', get_template_directory_uri() . 'plugins/slick/slick.min.js');
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . 'plugins/input_mask/jquery.maskedinput.min.js');
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script( 'regjs', get_template_directory_uri() . '/js/reg.js');
}
