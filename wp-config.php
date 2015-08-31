<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bugswordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`hyMu?_CqKqqu8ki^(!<W67tW:eFBO5s20@+JDXfz]`!.6(fNDs,+JZZXzY0|q;c');
define('SECURE_AUTH_KEY',  '#]+|0*5I4v@L=CC0$S2|/590_SpBo1Fr!} >WK+: +Ta.5QmdroOn!v=[k?%,+>;');
define('LOGGED_IN_KEY',    '+i]UN;R.|klk+%epRh}c 8_X/Z>jY.FwH#zG8FRuZv<}d@mZr(#nGCijFIE<)dX)');
define('NONCE_KEY',        'w+Lhtt{Ro2I_YgWXJgX`YV{ynA6GhdBLetPVJ-2nFT4ySaA7XI#0LLz5f~$ E!5]');
define('AUTH_SALT',        '-gc1jpkXQupF(${>*{+>QT-UA*Mge+d0ro?BRZ/N{|]t4ZJCiH.B4HrCx<|{6gG[');
define('SECURE_AUTH_SALT', '1L$8>ELD cSMT_pkiJX{&tv`Q_[8_f(ZoKbBzFkOD:VL$yTh+]yxPxlvp3ZM{C,6');
define('LOGGED_IN_SALT',   'LwtO zCqc=+2*`^]~6^G@rT=mKZF-?A<Ai.6:$*1A0B#Kambv&h-!%4~)@2U{h{Y');
define('NONCE_SALT',       ':VcFH2mKhV5(1cQa=$&3%,[V/@:O{5!.gvE[UBZeN:T9e`A>M%Q@+qmR}m1n]3pq');

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
