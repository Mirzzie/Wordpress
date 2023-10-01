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
define( 'DB_NAME', 'WP' );

/** Database username */
define( 'DB_USER', 'me' );

/** Database password */
define( 'DB_PASSWORD', 'TeSt@7667#' );

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
define('AUTH_KEY',         'yUQ`18l[Wu{pq&C+zww@Va;DtMC{[`]ou021?`jDn}>9#<nx*qax2>7VZ915JCWw');
define('SECURE_AUTH_KEY',  '}*vR$8EiJCf^( aS#:TC;?G,=+$P!ON~Kk#8P6W>c}_WfG+gSIH!L-C&MrfT8xqM');
define('LOGGED_IN_KEY',    'Z9%4h,3YgS%>:LI^)P|2k&*C2VmwG<Vz>||+iri|z)|P&HrNT-m)LO^u*Ti$M qr');
define('NONCE_KEY',        'Z&3 `/CVVD| )EY^}}W`LWF&Wb>Da 21-DJ+l987J9In(9|{HWPx,MhEU-rs?{z#');
define('AUTH_SALT',        '5>{NEKY[)5fB;n>CKncN AXeVA<GL0~>d!l4emGkVskK-r2GY&g|wnK=:?1Wic<t');
define('SECURE_AUTH_SALT', '}#%d+#N^?/+20wSsXJhs:re#Gn+|l]+?bdS: -0ecp0a1$OP.OAO!kH8!s`5B$mU');
define('LOGGED_IN_SALT',   'R^&06Cc!%G[1%b*i-v`|Y[$CIZy*|Cd50]$ KH5eqmPxqtUT^v,.&MbAf,9>?M.w');
define('NONCE_SALT',       'gR[t-pSouJ$}Zn:L/;+n8|8_<AFd+nU4Pp)659WrE~OGXx<_m5VuSiAP?~](1ot]');
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
