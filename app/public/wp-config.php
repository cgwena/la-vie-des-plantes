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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '9H4>Y*`gAy$^nYS=h^G975EDd@&^v~Ee<m5%n(rL8]&+m>)t^EB?!za]ml?#}:9G' );
define( 'SECURE_AUTH_KEY',   'I$Wun!+$ vj6/J/-g=Ya+Eg*{ &K0*!]ofytb*-)`Jd9LKpIGPevk6W?3oND?2[{' );
define( 'LOGGED_IN_KEY',     'YPfO)RYswJKv$WSy1PEFD28EM;wW{{_.vI%^u0^xs+o+UlVUE3w),ha8iv`Vd2 _' );
define( 'NONCE_KEY',         'l>rZd&R8XTMZ&3(bF<B7:b+G&G<rU#/|GFEWoS90*X@)pwcF~Ds4tbbx2iVlJybG' );
define( 'AUTH_SALT',         'FA><cF(NZ7B6@O<~t2kThTa=4fxrS1utD]2PkUHs~HdhDUl--5eq>=*iU]@H6CaK' );
define( 'SECURE_AUTH_SALT',  'Tg|?CCSvja+Z<,@;7PGVp}-!dXX $>[|3:kt9<^^C s(Igc^CK?W_%bFnvk^x!=l' );
define( 'LOGGED_IN_SALT',    'js-K^XRK~v~#%9lf]BM[d89p4`5E2jXbR>1V;3e_cC:sVg;81hv*<8[z.!p`K=d{' );
define( 'NONCE_SALT',        '8!lI7)|];^!osJY8fhyqwOi/s+4)%3(v8_6Tzz^OQ#]h#AkX#tK`WL(>I:wB#fv>' );
define( 'WP_CACHE_KEY_SALT', 'Vvx5Sx~xZ!(6|QKrPc`p1PM5Y-|-Rwu-*[!j/!J#8c=g *J?EUMS=wWIL^q}Q`Ew' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
