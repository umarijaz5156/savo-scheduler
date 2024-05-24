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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'savoBlog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '@A0=E#}Rp@F;gNMrpE<$sjQH%dHO{#(p&4(xWHn6!fh:Hn4BG?,}7gI<0O$]>)FQ' );
define( 'SECURE_AUTH_KEY',  'gr,g4~<Lz0iEw!G)9c-%$`^6-.9sy;,r]@`koDY/T9/6p4vtuj[FH-`Uo%Yl{K!@' );
define( 'LOGGED_IN_KEY',    'ObOG@X1?OSIU.I_9&H:]9`|+Qw&-aRGr< mig]pmOOd4lS9pTv7{Vk2i2?<RN`{L' );
define( 'NONCE_KEY',        '/BrI/5sV^(y2wmJmiXG8kQ8Z5JXnvdv>iSN|`efj3jjsyGXB$/o(T/>x/,h>00V(' );
define( 'AUTH_SALT',        ']~DR%e6$jJgbU4>b!p$!8ITq&.96!U(sb669H})DZ(IQT&!Na2)iv/URzo1F,Ev~' );
define( 'SECURE_AUTH_SALT', 'bnwP*xIYiWsnU[b-{?9CQ+BP<:1` Xff=1IyM^:b.?p[:yY<ilTk=0z+ftb58qY&' );
define( 'LOGGED_IN_SALT',   ',0}76aca2yQY<rer&3GZt2~YwVZjwELA@f;M]E7l$]vFjR`5a}=GUJh@fU{XcZaZ' );
define( 'NONCE_SALT',       'KLFJJr:9ZCQkK][QJDcqnkM@1&IM,2XLUj}GHC~;GQ(AAY)=`8K<Jj&Q&Vl?4.jG' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
