<?php

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_action( 'wp_enqueue_scripts', 'styleConnect' );

function styleConnect(){
	// wp_enqueue_style( 'slick', get_template_directory_uri() . '/plugins/slick/slick.css');
	// wp_enqueue_style( 'modalvideo', get_template_directory_uri() . '/plugins/modal-video/modal-video.min.css');
	// wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', '?ver=1.0');
	// wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', '?ver=1.0');

}


$options = array(
	// yes, slug is the part of the option name, so, to get the value, use
	// get_option( '{SLUG}_{ID}' );
	// get_option( 'styles_headercolor' );
	'slug'	=>	'about',
	// h2 title on your settings page
	'title' => 'Описание и контактая информация',
	// this displayed in admin menu, try to make it short
	'menuname' => 'Главный разворот',
	'capability'=>	'manage_options',
		// second section
		array(
			'id' => 'contact',
			'name' => 'Контактная информация',
			'fields' => array(
				array(
					'id'	=> 'phone',
					'label' => 'Телефон',
					'type'	=> 'text',
					'placeholder' => 'В формате +7 911-222-333-4',
				),

			)
		),

	)
);

if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $options );
