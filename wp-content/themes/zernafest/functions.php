<?php

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// add_action( 'wp_enqueue_scripts', 'styleConnect' );

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

add_theme_support( 'post-thumbnails' );
// Добавление спикеров
add_action( 'init', 'speaker_item' ); // Использовать функцию только внутри хука init
function speaker_item() {
	$labels = array(
		'name' => 'Спикеры',
		'singular_name' => 'Спикер',
		'add_new' => 'Добавить спикера',
		'add_new_item' => 'Добавить спикера',
		'edit_item' => 'Редактировать спикера',
		'new_item' => 'Новый спикер',
		'all_items' => 'Все спикеры',
		'view_item' => 'Просмотр спикеров на сайте',
		'search_items' => 'Искать спикеры',
		'not_found' => 'Спикеров не найдено.',
		'not_found_in_trash' => 'В корзине нет спикеров.',
		'menu_name' => 'Спикеры фестиваля'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-admin-users',
		'menu_position' => 4,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'speaker', $args);
}

$metabox = array(
	'id' =>	'speaker',
	'capability' => 'edit_posts',
	'name' => 'Тип выступления',
	'post_type' => array('speaker'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'type',
			'label' => 'Тип выступления',
			'type'	=> 'text',
			'placeholder' 	=> 'Спикер / Главный спикер'
		)
	)
);
new trueMetaBox( $metabox );


// Добавление для кого фестиваль
add_action( 'init', 'for_whom_item' ); // Использовать функцию только внутри хука init
function for_whom_item() {
	$labels = array(
		'name' => 'Для кого фестиваль',
		'singular_name' => 'Для кого фестиваль',
		'add_new' => 'Добавить пункт',
		'add_new_item' => 'Добавить пункт',
		'edit_item' => 'Редактировать пункт',
		'new_item' => 'Новый пункт',
		'all_items' => 'Все пункты',
		'view_item' => 'Просмотр пунктов на сайте',
		'search_items' => 'Искать пункты',
		'not_found' => 'Пунктов не найдено.',
		'not_found_in_trash' => 'В корзине нет пунктов.',
		'menu_name' => 'Для кого фестивать'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-editor-paste-text',
		'menu_position' => 4,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'for_whom', $args);
}

$metabox = array(
	'id' =>	'for_whom',
	'capability' => 'edit_posts',
	'name' => 'Фото главного слайдера',
	'post_type' => array('for_whom'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'video_id',
			'label' => 'VideoID',
			'type'	=> 'text',
			'placeholder' 	=> 'ID видео с Youtube'
		),
		array(
			'id'	=> 'video_bgr',
			'label' => 'Фон для видео',
			'type'	=> 'file',
			'placeholder' 	=> 'Фон для видео'
		)
	)
);
new trueMetaBox( $metabox );