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
		'menu_name' => 'Для кого фестиваль'
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
	'name' => 'Дополнительная информация',
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

// Добавление партнеров
add_action( 'init', 'partner_item' ); // Использовать функцию только внутри хука init
function partner_item() {
	$labels = array(
		'name' => 'Партнеры фестиваля',
		'singular_name' => 'Партнеры фестиваля',
		'add_new' => 'Добавить партнера',
		'add_new_item' => 'Добавить партнера',
		'edit_item' => 'Редактировать партнера',
		'new_item' => 'Новый партнер',
		'all_items' => 'Все партнеры',
		'view_item' => 'Просмотр партнеров на сайте',
		'search_items' => 'Искать партнеров',
		'not_found' => 'Партнеров не найдено.',
		'not_found_in_trash' => 'В корзине нет партнеров.',
		'menu_name' => 'Партнеры фестиваля'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-networking',
		'menu_position' => 4,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'partner', $args);
}

// Добавление где пройдет фестиваль
add_action( 'init', 'where_will_item' ); // Использовать функцию только внутри хука init
function where_will_item() {
	$labels = array(
		'name' => 'Где пройдет фестиваль',
		'singular_name' => 'Где пройдет фестиваль',
		'add_new' => 'Добавить инфо о месте',
		'add_new_item' => 'Добавить инфо о месте',
		'edit_item' => 'Редактировать инфо о месте',
		'new_item' => 'Новая информация инфо о месте',
		'all_items' => 'Вся информация о месте',
		'view_item' => 'Просмотр информации о месте на сайте',
		'search_items' => 'Искать инфо о месте',
		'not_found' => 'Информации не найдено.',
		'not_found_in_trash' => 'В корзине нет информации.',
		'menu_name' => 'Где пройдет фестиваль'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-location-alt',
		'menu_position' => 4,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'where_will', $args);
}

// Добавление отзывов
add_action( 'init', 'review_item' ); // Использовать функцию только внутри хука init
function review_item() {
	$labels = array(
		'name' => 'Отзывы о фестивале',
		'singular_name' => 'Отзывы о фестивале',
		'add_new' => 'Добавить отзыв о фестивале',
		'add_new_item' => 'Добавить отзыв о фестивале',
		'edit_item' => 'Редактировать отзыв о фестивале',
		'new_item' => 'Новый отзыв о фестивале',
		'all_items' => 'Все отзывы о фестивале',
		'view_item' => 'Просмотр отзывов о фестивале на сайте',
		'search_items' => 'Искать отзывы',
		'not_found' => 'Отзывов не найдено.',
		'not_found_in_trash' => 'В корзине нет отзывов.',
		'menu_name' => 'Отзывы о фестивале'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-carrot',
		'menu_position' => 4,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'review', $args);
}

$metabox = array(
	'id' =>	'review',
	'capability' => 'edit_posts',
	'name' => 'Дополнительная информация',
	'post_type' => array('review'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'city',
			'label' => 'Город',
			'type'	=> 'text',
			'placeholder' 	=> 'Город'
		)
	)
);
new trueMetaBox( $metabox );


/* Удаление пунктов меню в админке */
function remove_admin_submenu_items() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit.php?post_type=page' );
	remove_menu_page( 'link-manager.php' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'themes.php' );
	remove_menu_page( 'plugins.php' );
	remove_menu_page( 'users.php' );
}
add_action( 'admin_menu', 'remove_admin_submenu_items');