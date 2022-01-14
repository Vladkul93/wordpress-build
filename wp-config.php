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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'timber-wb' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lq<hG9RD<`f=Bl`SsZlB>9vLSiu@1!POC^=xX>;jkBOM^i*y#8@cW0/#pRmf1&oI' );
define( 'SECURE_AUTH_KEY',  'r5c,W[%=8&>vkR~?KjNCR{0<z+7D[Ll(B-%a YXMLj&Go%|uY)T<BSne_]~g[ [0' );
define( 'LOGGED_IN_KEY',    '64vAc00./Voee];ANN9Ii$9#I>cX`Xh{F5f=eB&H`|Ul e4$oB]6T$~<%T)/bv06' );
define( 'NONCE_KEY',        ' &m)5A}w3;#5}Q,J=;1ssq{I;GvfhtEA{}MsUg!g|eP`$mmoAq(}#u#+(z&|%sf#' );
define( 'AUTH_SALT',        'WDXA5JdL~9pc_*b`g7dD;djbBPcB|qtE<SQn~4C0G+Vt Toc{D]z<*/Do5,yD3{-' );
define( 'SECURE_AUTH_SALT', 'TLnI5nhQTm55DtGW$S/2~ZAr3%z`@*pdVjJq Grs0x{*ESkV.R=ogakv9Qbb)xG_' );
define( 'LOGGED_IN_SALT',   '?-*1uc~;Fzk7S1h)){_P+KL]F{^9TnV0<__Kv<7naI#=,x<AgEqfLAdI@A%=o6(Z' );
define( 'NONCE_SALT',       '}pRj~7$Ghn&cBSXbfmA!.FtP$5RFzCvw<%(zo`r+a&<2Ggj4LK<#=ny9j).`#S%L' );

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
