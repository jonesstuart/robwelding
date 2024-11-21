<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u677388914_Mg8IN' );

/** Database username */
define( 'DB_USER', 'u677388914_zaWFN' );

/** Database password */
define( 'DB_PASSWORD', 'oqVfuyzt72' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '|vSCu|Z7wh@,l`xp7E S]hZ*b~CEbV_U!4~ZHx;Ujbx& /wk^O{X/?N$Z74}7JvI' );
define( 'SECURE_AUTH_KEY',   'z6{.f-q7fMRHIX_uS+YlPJGYm1}!7rR]EI:|BM[A{]vDkb:D>j5G+b]S8)r[9eyc' );
define( 'LOGGED_IN_KEY',     '}(?=QTj n&a;0KX){gE !*4dYS1sq2V#S;m;U3Wthm^ssw8*e]O4M67VNN[QuR^g' );
define( 'NONCE_KEY',         'olex`E#JrenFod%`{[>kr8zM:L:a3L|Tf[Bx@qr0b^+Uu4V-`,b5CGq?$]^nReJN' );
define( 'AUTH_SALT',         '<};U0)<e!U:lUVgd+k>%$J+8Kv)r6l<C.;Q 5f>J:>4ydwU_ k&x4;^A`f8)9G$c' );
define( 'SECURE_AUTH_SALT',  '3/9rVg,[I?NGX)&0_!)_`;P|mgSNb+Ig=gSe4=6D{JW>@=fEw!SpU!Oe|B<899tb' );
define( 'LOGGED_IN_SALT',    'J-YuM()p1KVFU*QYzA*ZTIhjrWghL7{v@TwVN!FFM[2=%+n9:ZDJF)@2.3+A{P=1' );
define( 'NONCE_SALT',        'fAok.Tp{bm.UI|-PaGb~1]nx0(--|@ooYLqVSrcithF1n&wcjS(Cn<3G0pgz;~ir' );
define( 'WP_CACHE_KEY_SALT', ')x^;Fa1oG][MRb~V /@RfsveIC)r.f6MtRk9OQ~7Aj-(wp#1[J=/R(x*Ma>:7aB2' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
