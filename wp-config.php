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
define('DB_NAME', 'lanars_test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'kIU]O ,b2SVtHUs<`?McI/``KP$@f@L_dNJj|ZL9{]u<iMJa4BQ2UGh:d.{!W6Cp');
define('SECURE_AUTH_KEY',  '&1u08il%))v9`Z=2^^mE AZl(_Lq!mD(?=t~nmBMu6jew9Py?e3$0/A??R@v~j4N');
define('LOGGED_IN_KEY',    'qnDa4=q|?HNis$6o7,yD|Ff5wCw|lOn-)0nN dS*n:Pof:S?}CNK@y?SZ8e4dk l');
define('NONCE_KEY',        'et.QBm]1Ex-3,Nx`J;1n8 (i?J,h7(=|~)8z@^~9B?1_i+ahh_,O^W/0szx9L^>@');
define('AUTH_SALT',        'Vw}P)9VPbu><J}PL6j.-$@AIkxLL*FeWP}`3LPWOPS]aqC:0@M}IWQ# y]C6-e@g');
define('SECURE_AUTH_SALT', 'Y!/YyhEnAfyzuDh[%$q%1.JD;+uh>d0K0*U<2AD)f]BV{FUFQ@8K+qH&^ X]ndN7');
define('LOGGED_IN_SALT',   'dwYoTr/ 4(G&>a-oX.y2M_?d7?Q}|mG#/?nR+%GU7pD@8u$WeuzD{pC_HG !5~+Y');
define('NONCE_SALT',       ')V#8:?)_;AjiYGK&Zo*(;7jvJWO0)~D>ZI*pjgWZh(&Rh=xiImKN)aiW]knQ+YaO');

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
