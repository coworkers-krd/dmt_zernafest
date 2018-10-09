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
					'type'			=> 'image', // table of types is above
				),
			)
		),

	)
);
if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $main_promo );



$mission = array(
	'slug'	=>	'mission',
	'title' => 'Миссия фестиваля',
	'menuname' => 'Миссия фестиваля',
	'capability'=>	'manage_options',
	'sections' => array(
		// first section
		array(
			'id' => 'main_promo',
			'name' => 'Миссия фестиваля',
			'fields' => array(
				array(
					'id'			=> 'number_1',
					'label'			=> 'Число 1',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'text_1',
					'label'			=> 'Текст 1',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'number_2',
					'label'			=> 'Число 2',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'text_2',
					'label'			=> 'Текст 2',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'text',
					'label'			=> 'Текст',
					'type'			=> 'textarea', // table of types is above
					'default'		=> ''
				)
			)
		),

	)
);
if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $mission );

$reviews = array(
	'slug'	=>	'reviews',
	'title' => 'Отзывы о фестивале',
	'menuname' => 'Отзывы о фестивале',
	'capability'=>	'manage_options',
	'sections' => array(
		// first section
		array(
			'id' => 'main_promo',
			'name' => 'Миссия фестиваля',
			'fields' => array(
				array(
					'id'			=> 'number_1',
					'label'			=> 'Число 1',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'text_1',
					'label'			=> 'Текст 2',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'number_2',
					'label'			=> 'Число 2',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'text_2',
					'label'			=> 'Текст 2',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
			)
		),

	)
);
if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $reviews );


$gallery = array(
	'slug'	=>	'gallery',
	'title' => 'Галерея фестиваля',
	'menuname' => 'Галерея фестиваля',
	'capability'=>	'manage_options',
	'sections' => array(
		// first section
		array(
			'id' => 'main_promo',
			'name' => 'Миссия фестиваля',
			'fields' => array(
				array(
					'id'			=> 'number_1',
					'label'			=> 'Число 1',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'text_1',
					'label'			=> 'Текст 1',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'number_2',
					'label'			=> 'Число 2',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'text_2',
					'label'			=> 'Текст 2',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
			)
		),

	)
);
if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $gallery );


$how_it_was = array(
	'slug'	=>	'how_it_was',
	'title' => 'Как это было',
	'menuname' => 'Как это было',
	'capability'=>	'manage_options',
	'sections' => array(
		// first section
		array(
			'id' => 'info',
			'name' => 'Текст',
			'fields' => array(
				array(
					'id'			=> 'text',
					'label'			=> 'Заголовок',
					'type'			=> 'textarea', // table of types is above
					'default'		=> ''
				)
			)
		),
		array(
			'id' => 'video',
			'name' => 'Видео',
			'fields' => array(
				array(
					'id'			=> 'big',
					'label'			=> 'ID большого видео',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'big_img',
					'label'			=> 'Фон большого видео',
					'type'			=> 'image', // table of types is above
					'default'		=> ''
				),

				array(
					'id'			=> 'pos1',
					'label'			=> 'ID первого видео',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'pos1_img',
					'label'			=> 'Фон первого видео',
					'type'			=> 'image', // table of types is above
					'default'		=> ''
				),

				array(
					'id'			=> 'pos2',
					'label'			=> 'ID второго видео',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'pos2_img',
					'label'			=> 'Фон второго видео',
					'type'			=> 'image', // table of types is above
					'default'		=> ''
				),

				array(
					'id'			=> 'pos3',
					'label'			=> 'ID третьего видео',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'pos3_img',
					'label'			=> 'Фон третьего видео',
					'type'			=> 'image', // table of types is above
					'default'		=> ''
				),
			)
		),

	)
);

if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $how_it_was );



$say_main = array(
	'slug'	=>	'say_main',
	'title' => 'Сказать главное',
	'menuname' => 'Сказать главное',
	'capability'=>	'manage_options',
	'sections' => array(
		// first section
		array(
			'id' => 'info',
			'name' => 'Сказать главное',
			'fields' => array(
				array(
					'id'			=> 'text',
					'label'			=> 'Заголовок',
					'type'			=> 'textarea', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'video_id',
					'label'			=> 'Видео ID',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'video_bgr',
					'label'			=> 'Фон видео',
					'type'			=> 'image', // table of types is above
					'default'		=> ''
				)
			)
		),

	)
);
if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $say_main );


$contacts = array(
	'slug'	=>	'contacts',
	'title' => 'Контакты',
	'menuname' => 'Контакты',
	'capability'=>	'manage_options',
	'sections' => array(
		// first section
		array(
			'id' => 'info',
			'name' => 'Контакты',
			'fields' => array(
				array(
					'id'			=> 'tel1',
					'label'			=> 'Номер телефона',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'tel2',
					'label'			=> 'Номер телефона',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'mail',
					'label'			=> 'Почта',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'adress',
					'label'			=> 'Адрес',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
				array(
					'id'			=> 'name',
					'label'			=> 'Название места проведения',
					'type'			=> 'text', // table of types is above
					'default'		=> ''
				),
			)
		),

	)
);
if( class_exists( 'trueOptionspage' ) )
	new trueOptionspage( $contacts );



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
		'menu_position' => 2,
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




// Добавление гостей
add_action( 'init', 'guest_item' ); // Использовать функцию только внутри хука init
function guest_item() {
	$labels = array(
		'name' => 'Гости фестиваля',
		'singular_name' => 'Гость фестиваля',
		'add_new' => 'Добавить гостя фестиваля',
		'add_new_item' => 'Добавить гостя фестиваля',
		'edit_item' => 'Редактировать гостя фестиваля',
		'new_item' => 'Новый гость фестиваля',
		'all_items' => 'Все гости',
		'view_item' => 'Просмотр гостей на сайте',
		'search_items' => 'Искать гостей',
		'not_found' => 'Гостей не найдено.',
		'not_found_in_trash' => 'В корзине нет гостей.',
		'menu_name' => 'Гости фестиваля'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-universal-access',
		'menu_position' => 2,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'guest', $args);
}

$metabox = array(
	'id' =>	'guest',
	'capability' => 'edit_posts',
	'name' => 'Тип выступления',
	'post_type' => array('guest'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'type',
			'label' => 'Тип выступления',
			'type'	=> 'text',
			'placeholder' 	=> 'Гость фестиваля'
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
		'menu_position' => 2,
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
		'menu_position' => 3,
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
		'menu_position' => 5,
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

// Добавление сказать главное
add_action( 'init', 'say_main_item' ); // Использовать функцию только внутри хука init
function say_main_item() {
	$labels = array(
		'name' => 'Сказать главное',
		'singular_name' => 'Сказать главное',
		'add_new' => 'Добавить сказать главное',
		'add_new_item' => 'Добавить сказать главное',
		'edit_item' => 'Редактировать сказать главное',
		'new_item' => 'Новая информация сказать главное',
		'all_items' => 'Все сказать главное',
		'view_item' => 'Просмотр сказать главное на сайте',
		'search_items' => 'Искать сказать главное',
		'not_found' => 'Информации не найдено.',
		'not_found_in_trash' => 'В корзине нет сказать главное.',
		'menu_name' => 'Сказать главное'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-format-quote',
		'menu_position' => 6,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'say_main', $args);
}
$metabox = array(
	'id' =>	'say_main',
	'capability' => 'edit_posts',
	'name' => 'Дополнительная информация',
	'post_type' => array('say_main'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'video_id',
			'label' => 'Видео ID',
			'type'	=> 'text',
			'placeholder' 	=> 'Видео ID'
		)
	)
);
new trueMetaBox( $metabox );


// Расписание фестиваля
add_action( 'init', 'schedule_item' ); // Использовать функцию только внутри хука init
function schedule_item() {
	$labels = array(
		'name' => 'Расписание фестиваля',
		'singular_name' => 'Расписание фестиваля',
		'add_new' => 'Добавить событие',
		'add_new_item' => 'Добавить новое событие',
		'edit_item' => 'Редактировать событие',
		'new_item' => 'Новое событие',
		'all_items' => 'Все события',
		'view_item' => 'Просмотр событий на сайте',
		'search_items' => 'Искать события',
		'not_found' => 'Событий не найдено.',
		'not_found_in_trash' => 'В корзине нет событий',
		'menu_name' => 'Расписание фестиваля'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-editor-ul',
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'schedule', $args);
}

$metabox = array(
	'id' =>	'schedule',
	'capability' => 'edit_posts',
	'name' => 'Расписание дня',
	'post_type' => array('schedule'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'name',
			'label' => 'Название мероприятия',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите название мероприятия'
		),
		array(
			'id'	=> 'day',
			'label' => 'День проведения',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите день проведения'
		),
		array(
			'id'	=> 'time_start',
			'label' => 'Время начала',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите время начала'
		),
		array(
			'id'	=> 'time_int',
			'label' => 'Временной инервал',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите временной интервал'
		),
	)
);
new trueMetaBox( $metabox );


// ГАЛЕРЕЯ фестиваля
add_action( 'init', 'gallery_item' ); // Использовать функцию только внутри хука init
function gallery_item() {
	$labels = array(
		'name' => 'ГАЛЕРЕЯ фестиваля',
		'singular_name' => 'ГАЛЕРЕЯ фестиваля',
		'add_new' => 'Добавить фото',
		'add_new_item' => 'Добавить новое фото',
		'edit_item' => 'Редактировать фото',
		'new_item' => 'Новое фото',
		'all_items' => 'Все фото',
		'view_item' => 'Просмотр фото на сайте',
		'search_items' => 'Искать фото',
		'not_found' => 'Фото не найдено.',
		'not_found_in_trash' => 'В корзине нет фото',
		'menu_name' => 'ГАЛЕРЕЯ фестиваля'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-format-gallery',
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'gallery', $args);
}
$metabox = array(
	'id' =>	'gallery',
	'capability' => 'edit_posts',
	'name' => 'Фотография',
	'post_type' => array('gallery'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'pic',
			'label' => 'Загрузите фотографию',
			'type'	=> 'image',
			'placeholder' 	=> 'Загрузите фотографию'
		),
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
	remove_menu_page( 'upload.php' );
	remove_menu_page( 'index.php' );
}
add_action( 'admin_menu', 'remove_admin_submenu_items');