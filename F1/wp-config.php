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
define( 'DB_NAME', 'u828479444_QMUQF' );

/** Database username */
define( 'DB_USER', 'u828479444_BCt7h' );

/** Database password */
define( 'DB_PASSWORD', 'z8T9r1620J' );

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
define( 'AUTH_KEY',          '<kGTX%WxJ3L#ku6nS*0[TRB<p0Kg:QsrU,@>%~6R8^G(OQ0f6 T/%6^|3k?y/F<R' );
define( 'SECURE_AUTH_KEY',   '%t:Pp7B[wS|GFHE/+7svFWTe.xZ0pBjpTePfJkmOKWpldAI<XPXHzNH4y&wxPJw!' );
define( 'LOGGED_IN_KEY',     'h^e)i4&r[WWB_qVxcjc==p<kg#=$S?)(Ifr<B23oe=j?36z9>Uo=JS0&rD]1rl1X' );
define( 'NONCE_KEY',         'TM:_*8w`.wp4CbKu|!_.>o~vJr`vasg4b~}^@-eU?-rLoy7R]/x1FdZdHvYI:d<&' );
define( 'AUTH_SALT',         'IO<92a8q1[yQC[Kt3C7*cF`yM`j_y^0wkd[p+`]pj@^v1:YA*Xg GY2q)E2..Bbi' );
define( 'SECURE_AUTH_SALT',  'oF]RPM[IfTsDh$Uy+beEqfBc~a[k8i|@IzQ7SdKQXad$d|IINBaG)J!r8nb*D+Ce' );
define( 'LOGGED_IN_SALT',    '(]6I] < Q]nqdpHpKX`|uVmXA[m8THcU<}l?-jp=eF]TShmiso_(QvsPlz=)vpY?' );
define( 'NONCE_SALT',        ',8u_`1 7T}N-ikx#5rkusYUXdkuLj.MOpzVcTlEdF~d-9Ue}yEfKt?6(08,:fYO7' );
define( 'WP_CACHE_KEY_SALT', '-r(*IXtAp;lN6i>y2nM&@Gte}|e|Dv]-531lbd/3$51~II(]}0~4AkKD&?xQqyC+' );


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
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
