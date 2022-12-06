<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'Site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FbgU`}~q8fx5>VzXsLvoz=nEuehVZPsc^MYaOg)*RM6lgw`7A(4Ju2RVHryDN2-`' );
define( 'SECURE_AUTH_KEY',  'Xqw,jbkchH1VTK:;|d-wKw[0sN&0T9&b8*}?(7Y}pgnQ^Pav(+88#kbuR>L;tCss' );
define( 'LOGGED_IN_KEY',    'I`i{cz]I+pXXi@?01]M;FqUT(x.o;8g}D0K=Od{zdA?CRtKT,KecK--VH0jYO-J.' );
define( 'NONCE_KEY',        'LEBg<cnzbtWhO]sCc5tCqQK+M]gm;~P*Hz.yxDm!)[~+-Z~Vi6^(!;Dv6qd6a81U' );
define( 'AUTH_SALT',        'lm+0aw^m[0sMoCmzZlZ/I3>k,UFv>B0g.!?${jlxO!ORGkr/i`X]MbyD JhI%=Fe' );
define( 'SECURE_AUTH_SALT', '9baM`>? R?l3pI~G}(WD84a7~u_4i_<}:R1U|4!bN@i[wt#rSqDCK-#2#%Jn(cj(' );
define( 'LOGGED_IN_SALT',   '7u4i>pYbRh40c8%P6rd$5TbY:zr1p=y)H3l[vgSz`sp KpOwUt4*v#nhcpga1n<J' );
define( 'NONCE_SALT',       'mps.,sg*1<XX<C#jLNTb1]pYASUXm_L#w $GRIms5HQH43S+LV;b4R^zY2X!?D_m' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
