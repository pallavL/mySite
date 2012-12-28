<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pallavla_wrd2');

/** MySQL database username */
define('DB_USER', 'pallavla_wrd2');

/** MySQL database password */
define('DB_PASSWORD', '1F8l9k7tKO');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3tmmjIc3OZ32n2Bqd9RIsz8gVHTbabcZGpwGyE2mpHB6ZCkscaZOsa8d6X4a4gOk');
define('SECURE_AUTH_KEY',  'QBQHVjaeBEFq3i1gYYBOg28GFFazGEz8OOqJuZlyPduneJITiJspLmbTsuffs0KY');
define('LOGGED_IN_KEY',    'KyW21hOCus356AbtINpbYibCMXIAgX4scwQwk6hbUxGjwrRUA23zjrLw0r9Q8Di8');
define('NONCE_KEY',        '6n5uQn2ygm7nZpnQtL2y1bPrsj0tYHv4gTg8va99ykpDDEP255joh2IDaDTrDhiY');
define('AUTH_SALT',        'IDk8zlhtzeGpqiLQrZv7DKTvMMZv46z5dR3KUSeCKtROFCDA1dmUpBM0VwxRTS0l');
define('SECURE_AUTH_SALT', 'yi35yMt9xTEOdncZwKYh2kBshmlOjeSha2UlsoQAuc8tZw6lXNZ9ff1EejhKJiAQ');
define('LOGGED_IN_SALT',   'AOWelIuF4RR6Ns9MtFmaWUafdQEj6zRuRxWkXlT5cZAJGmvDFm7TgJwKLkvaPnOp');
define('NONCE_SALT',       'NblXJSldATunLcKU8xxqoeGvjfDYWahFsGicMOTaFDx8s8FkCRz1PEqn5tW9AZn2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
