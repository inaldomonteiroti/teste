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
define( 'AUTH_KEY',          '?i>MU=?guu7MsPwH6O(byBYRv4`sq p1(_Fp&x9OT5O.*jm#[kuTa+a+1YI9Cs2]' );
define( 'SECURE_AUTH_KEY',   ' 7(a^PdYH,*l S`M$f^tQX[3Z%HKB#x, ->mZze;O2by6l4dL[G{oD5/F^VQHkcz' );
define( 'LOGGED_IN_KEY',     'Rv$4%%Jm~~qwoCa_Umb{>piqq-ft>v3_l=y6<Y_AzS#nn6GNwh9o[v!hT};q:fFj' );
define( 'NONCE_KEY',         'qBKpGD=bs:TjR![MfaiTX<GkO+t=KwPR;v0d.i`_p*/-,j(jX7C=~Cg5+aT;UYnk' );
define( 'AUTH_SALT',         '6(vv;a$?D9N6OgOe-v9L[)eq~:p3aVQ,Y,dGyu$EcY7{Y*lT^_[MrPO|~4YmK}wp' );
define( 'SECURE_AUTH_SALT',  '$(t|1_H#jiWT0C=RjrDwfwjOTS*aEmVpBfGv3Fj$0zqfI~rg.5i6+1 DzL(_BM~`' );
define( 'LOGGED_IN_SALT',    '2gbiJaY>-g2(V;QW+ sX]N;wzR9Q(ziYH9b1/WxVU[k2b`VNuh]^EH. =Z~5EVle' );
define( 'NONCE_SALT',        ':`c;tP`uxy0Z*+V~Fcx _xn[LG]RNcw*t nU?!Ra u%-,R-,;)fkq:wbv^A(Bj_-' );
define( 'WP_CACHE_KEY_SALT', 'Xty8xcuU^Cn(|5HmuUb<E.-jmsi_JH!z4&jku2#wLl}D?x$!V510csZMdl4Rpo{2' );


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
