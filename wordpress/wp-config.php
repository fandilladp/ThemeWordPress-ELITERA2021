<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elektro2021' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6F$<H1d[au#)h0bu|`Lk)iUSvHD=x*(w){eXjSPqr-|]N^q;&J_B|E4;`g P7M*Q' );
define( 'SECURE_AUTH_KEY',  '>0Ua:_K> KcZ8e08Th*<PkVJW]MfZ%W/t4_uZlrY:!F#*n23v&V73mnavmIV;ND*' );
define( 'LOGGED_IN_KEY',    '!jL}4E85ZnKOq!d}:_h&e;>xZUnG3<LJ.`UU7(8<ZdDjDA!0a78{KIRlwZ0/3j&v' );
define( 'NONCE_KEY',        'v!T!rsKl$-012|Z>gtE`Ls+[4LmX<~hJOCpJ<8r<=e?v93!d5Z7V1;h<EXzMwA]=' );
define( 'AUTH_SALT',        '}:<ns{Z=P]+(en>?=16ms|@GzN+7I&pp@LQEEcs;$WZ{tLGDo2fUIE$dkf:,UV1r' );
define( 'SECURE_AUTH_SALT', 'Xs|fvY3i<paO~76~I?,D6gASglPdyUutda3k`8i/eR~YLMEOR3/*Yxbt7OP}QC00' );
define( 'LOGGED_IN_SALT',   '*oBAZm_9A2d@!pg!tR;%QfF`{H,23uF0k#yfC~{Or+4`nFdqeRS1qrtYS:UQUy8y' );
define( 'NONCE_SALT',       '#-+NY[9BLe[]m!:;w`oGkmmpiV-vdc4>{ 5t=@19;|7PZ3Ap[_J>`.5q7:]Qv_I}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
