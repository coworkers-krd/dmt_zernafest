<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u0547635_wp_zernafest');

/** Имя пользователя MySQL */
define('DB_USER', 'u0547635_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qwerty12345');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A(LxZps{QvSU_14w#*bC33Tod:c5/-(0$HkzelFX+K_]=.&no@a9U-*I0@0I;5A4');
define('SECURE_AUTH_KEY',  '& Qe3?tBr=@H~?HWL:acg>abe!E63onS~QXK&=h3?.Hu4F5$.6VCP,F;Zl1|2Y_M');
define('LOGGED_IN_KEY',    'l]dg5QYe:&T[dMi?}Q,d8CX(&hp}3x/51dZwxbl^.y0ZS|VX{z9V%MC_ql7.5wG`');
define('NONCE_KEY',        '3{8@p+x_~N;r)}:g9|q$N.-ICt8o>1RK=SkPM#NL_>lFU)%;0!yp`5&gpUso~%Vh');
define('AUTH_SALT',        '=GJe>Vi?vQ-HhS#:=YTqJkz4JucM*?qaBg|23yLF3y1}>1Ms7DzV-kY 3()6IfqL');
define('SECURE_AUTH_SALT', ':Crke-+L(o*to2}Kyd fy6<)bJ[ifo<D0<Vi*qd6R]s~^Gy//b;`:zDYr3.8o&uC');
define('LOGGED_IN_SALT',   'Dws0lUzD0_RFG1:[@QB7`n&K`P_4Izy!T0Y{`,?wh^|sz QTe#Nsx|e:5/=F@@!H');
define('NONCE_SALT',       'QYlPcHnR@3A!y^_vlR0TG3|J/5RlG!stO{w|1_Y0:vBzEn6R*%POZB!Xi-^@*Q6v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
