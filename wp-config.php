<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_first' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '[]|R;E{f~/. #uNc3rg_t%_j;D@>XjwFHH,]p4NxcFQSwN!,-`LBl<}OeF-FbGUP' );
define( 'SECURE_AUTH_KEY',  'OxRxYvW?<cZNs& }FA-`1V2#4ho16lJ)?2>^~lP9MOJBxE%DjO^VfX&>6J(>3MYE' );
define( 'LOGGED_IN_KEY',    'jZW1~Vth.KKL6Rz-h(+}pFg5|<dq?}`]GAK;>*9yc$&j]^<y+%po^kWZh8^OYx4/' );
define( 'NONCE_KEY',        'HuUzHgCD4V;W13(t7^b0>+*3jND;$ThT{=mcX;Z7^ wc}4jCKhXe4tXkzittlr5A' );
define( 'AUTH_SALT',        'iJD>AqW[J#pQzQSV%f?Q{}zxQ[;`lXU~5FWQLe.u%w0#e&{-BhF^qta_THci5Rwu' );
define( 'SECURE_AUTH_SALT', 't{Lzxo7laDu>>m@akXbJgih-w7176<0a?-PNN[`PzgOq0`]=$,bRgkf,E_4s? =F' );
define( 'LOGGED_IN_SALT',   'T0,|33I{ns:vu|j,}(sjI/:t4is)^-Vjh=My;3x/[p3K,p-7$Rji^v^jZH|ICaj5' );
define( 'NONCE_SALT',       'oz3#R[)w}I]Yp,C#a8K$!D|YizSN>:]R1Ju0Jo})NVwTJRwcV)By_@PrE2MeVuDX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
