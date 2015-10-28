<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'gamenews');

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
define('AUTH_KEY',         '&u+eMVUl}k@cu-wP7`]N3o52Xm=8H;+FTC[*Wv~|h|DPq8Vb2Dy ^$]=hL++$McY');
define('SECURE_AUTH_KEY',  'm&Z}p77X*Sd#{La1;b=[isLO(m>   Rggh,I`>c<6k&vpf2q(mAgAilXUf*[CUZe');
define('LOGGED_IN_KEY',    '$D-n#^;c;eq?vv>-KpQcAD+#3|fomN(HWCG~^:J;kLk)vM=D!U2AEPDtI-4 ..N+');
define('NONCE_KEY',        'EN+0cKJrFAbU_eF74R9KD2.g*^fsz<L%|r{g_,++d$#EQidz8yJg^ZuN3+8o2dTz');
define('AUTH_SALT',        '|1+05 vbhbtonEx@LiHBYTXJ8Ou]:%sq FqIi+J-U,7V~i@zUI</o(H`]/e!GIl?');
define('SECURE_AUTH_SALT', '1<VA!}8l+R4@N]&oD&W#kbiYNq|2s(&]+L^#|sLjrq$$|cf. (BlZ3u$h![Z>MKi');
define('LOGGED_IN_SALT',   'dgP6Cie/C$Qu25:5( S00MAqR-f;y*4A[7>qzV 5T-W)1FT~VrrKfX/e):cVTIbk');
define('NONCE_SALT',       ',+2j-a(.#,:>BiK|b!U-%>Yx;%%v1>OGl~eHcAn^eY;rI`|;@.{-`ub-f:iYN`=M');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
