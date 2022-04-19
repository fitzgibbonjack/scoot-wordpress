<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
if (strstr($_SERVER['SERVER_NAME'], 'scoot-wp:8890')) {
   define( 'DB_NAME', 'wp_ScootWP_db' );
   define( 'DB_USER', 'wp_ScootWP_user' );
   define( 'DB_PASSWORD', 'wp_ScootWP_pw' );
   define( 'DB_HOST', 'localhost:8889' );
} else {
   define( 'DB_NAME', 'id18807750_scoot' );
   define( 'DB_USER', 'id18807750_admin' );
   define( 'DB_PASSWORD', '/XuaWj44X!jz(e2[' );
   define( 'DB_HOST', 'localhost' );
}

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's!e37S9,.§g:iT&u2u§Zeh^W~%>W rV§Q i`W?TY11DhHy38C=!fGm)3/q|(9OT_');
define('SECURE_AUTH_KEY',  '3?M3q (ucdJ ?B6ZptEb7:.{cW1]G]G}NyJCKF@$YSZ}n!K6V>fEKb/;goMzHT+0');
define('LOGGED_IN_KEY',    '%+_k|gYOs@`Rb)o0)xxzJPwJsHQ-tN§O[U~Pp|6UuTP9DR/lks]r+[rV1Ad$/-b.');
define('NONCE_KEY',        '@66ZK0}WE(P`(yz%^Q>6q?b,<@6wZ8zw7pb l0,x&?}j-&P§ r`v:A9Ehb9g@clq');
define('AUTH_SALT',        'jJRUq%z>/~1d(o )5v(FzGimTmb/M9||S)=r}`i{3WeDI,}6;@F])XEj`q@g!_I.');
define('SECURE_AUTH_SALT', '=faCEOx$?a7r)%rlymoktx+C§Y.WLe%8$I?<P|g2;@(@x^h-zv7K-Ef$&)xC@vz(');
define('LOGGED_IN_SALT',   '8w<;(q1_@xrn8tPr{):AGS?R+YTzAJZ8zL;sRQ2zeL]92x[$k5)=a-Yu}WxuKEMp');
define('NONCE_SALT',       '!Ira/pVFpf@.X`}Nd{so-=?B4>!R!,O^[%Q_JxTzbE|S9YI=N],p§J:<kTopZ!p3');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';