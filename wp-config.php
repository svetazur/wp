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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Zj!0=9qqZ11y<Z~CeWR3T1ek_]GuD*8HudHg-c404l#(y]H/r<b @f._Jh <24X!' );
define( 'SECURE_AUTH_KEY',  '0s4S*j@z+v?}X5Mn9Y,MxPpl?pWFVB=/#C_^wC5[<c(X|`+qyqyR? !KfBm1K<[c' );
define( 'LOGGED_IN_KEY',    'BgDadaf2?1O|^[}LtD8!;Qsj blT_AUfVJ1fWiP@4~wt`V}>hsh|H1p,yb-60+C8' );
define( 'NONCE_KEY',        'U4!.Pk|$Z.?]M<Ir1#vyD~lo8Jda9+8aPe5!tK_xR:}K{G:Qgo[5,s_PmnF~!i=[' );
define( 'AUTH_SALT',        'JpQ6$/lTZLj-=AX(DtE4GqgoExJxg|R3#p8B33KvP~:ai!M7r+[`u_t,I=vHboX;' );
define( 'SECURE_AUTH_SALT', 'Rxd(G7*w9DdzF(c/RDS375m&e3]yq{%~8ew?(;G_RczrdcX~rl4,7b5Bc45Dwogb' );
define( 'LOGGED_IN_SALT',   '$-d%/2<?#5va>pyF+=C^|F8fq^VWu@wmImZdTHPPvpwSP)`/[g9k^@?)3LKp`~* ' );
define( 'NONCE_SALT',       'm[n8#mU2Qi;ujfP8,,-xU7fG>}Oi*=y4lWK[uJJ}^dl)k;,2l5+1|Gz9u_2LrX!^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
