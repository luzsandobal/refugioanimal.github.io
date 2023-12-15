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
define( 'AUTH_KEY',          'EF%-Me:sB2;VmFs4}I|PJP@j?m,`//)@;Sc&4Q+BvncQULdK@}1?`EzkTFI5Lvt9' );
define( 'SECURE_AUTH_KEY',   'P*dBny+-MXAxk,fA6_2/k4OF`WMYQ>!=a()Gz*Hc!iA7j3#!7MRK7Q}yoq^1%8l~' );
define( 'LOGGED_IN_KEY',     'F|vZ$@ZUfY8X1u4UW7U.OrE1R*&GP`cFyG9i;4$]6bJYSF[: 9>^w>YRe?xlz1gJ' );
define( 'NONCE_KEY',         'FjK:s$JU?|h .>QRmds@Vu%O.19GsCuPE;i2W|H<tbSiD4mb?EP9Wke&Fv5#5jlW' );
define( 'AUTH_SALT',         ' `UEdFW$l-7A2n>P81!dr3o|2VpY,bN0Z&?Q:!?wr16.]+@Di|!}a6Rgq9+<{8fS' );
define( 'SECURE_AUTH_SALT',  'ZYjp 0C-&.:$FC`Qlte/ BH;Q79L=T%oA& TtB4[OtnZs|og|$gTI9TD{*?uuH|F' );
define( 'LOGGED_IN_SALT',    'vh}/NDgY_.4e/ka0UsM*uD4}21#%u]w`AT2b$!^)PV.FlBykSeeq4>TNMM91eqp?' );
define( 'NONCE_SALT',        '6ZZBwaGMWX)xELQrOtJ~0z${`4bQV`,FiyM44-y?<=`0lo(:N6Nd),]CV~%8n2FE' );
define( 'WP_CACHE_KEY_SALT', ',5es,};JZ<7avU!+U$_:)7Kf>U;@Z#tG`:jbswF9.KcF]$FGkj/B~+L7k!GiLUo(' );


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
