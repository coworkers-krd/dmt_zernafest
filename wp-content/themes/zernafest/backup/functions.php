<?php

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_action( 'wp_enqueue_scripts', 'styleConnect' );

$main_promo = array(
	'slug'	=>	'promo',
	'title' => 'Главный разворот',
	'menuname' => 'Главный разворот',
	'capability'=>	'manage_options',
	'sections' => array(
		// first section
		array(
			'id' => 'main_promo',
			'name' => 'Главный разворот',
			'fields' => array(
				array(
					'id'			=> 'title',
					'label'			=> 'Заголовок',
					'type'			=> 'text', // table of types is above
					'default'		=> 'ГЛАВНОЕ СОБЫТИЕ ГОДА О ВОСПИТАНИИ СЧАСТЛИВЫХ И УСПЕШНЫХ ДЕТЕЙ!'
				),
				array(
					'id'			=> 'place',
					'label'			=> 'Название отеля',
					'type'			=> 'text', // table of types is above
					'default'		=> 'Kempinski Grand Hotel Gelendzhik'
				),
				array(
					'id'			=> 'town',
					'label'			=> 'Название города',
					'type'			=> 'text', // table of types is above
					'default'		=> '(Геленджик)'
				),
				array(
					'id'			=> 'photo',
					'label'			=> 'Фон главного разворота',
					'type'			=> 'file', // table of types is above
				),
			)
		),

	)
);

if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $main_promo );