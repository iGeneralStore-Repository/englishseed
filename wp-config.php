<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_MEMORY_LIMIT', '96M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'englishseed2');

/** MySQL database username */
define('DB_USER', 'englishseed2');

/** MySQL database password */
define('DB_PASSWORD', 'englishseed2');

/** MySQL hostname */
define('DB_HOST', 'englishseed2.czrngnw3nlel.ap-northeast-2.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'F}>-98QmEHdlv=5z+>p,K?usAKGN)B4z?MjJ;!Ke?|Px;LP}ATMosN%,Ex88`+!E');
define('SECURE_AUTH_KEY',  'DI@N}UU_-+^4+6p$/+v{H5,Be|$`%9pDcK]nnDz!<`++rAXl]:h#5Md]G}#C3g?g');
define('LOGGED_IN_KEY',    'J${<,dacF; <JvZt#vJcnT+twLc-uJiSg{IQ.@[qnq0Ds5,;ok*r~h!s$o;Na&/$');
define('NONCE_KEY',        '}*9F,*t6BW}dT>K95go++~r--`3@4Bt:.!A8-n7Rjly}@+GIXv_dfYsh+3m`)9D ');
define('AUTH_SALT',        '9HE|[)[QQ*M}Lz-nc.S;@sm3$qcd;S6WNv5+`4ZpJWA?EJ9;<~(-5kfd91lNKZC3');
define('SECURE_AUTH_SALT', '3}( l-/aLvg%@4yd DzKJ6N1o@<lj%Y6o&[&P;H^Wu0`|aXYa?Xb`!%`iJiM6YEm');
define('LOGGED_IN_SALT',   'cC8abRZPSZ7)m3}=rSp[vG}KMO|G;onM*C$0r5>oTwCW[k%=RWbzLpGL$@hf*%*%');
define('NONCE_SALT',       'Cw0!V|2t-m{kFXODZ5iisJy0n<D^b_)snc0|$gT>g|VwF4WkJo<-N4og0E*Gr%o6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
