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
define('AUTH_KEY',         '6 3?!8y_tsO?=TxKkX# gxPF$r|=W+4-cI1rpfeX?|Y$p2J|(DUa>{/)4<Q-.*y_');
define('SECURE_AUTH_KEY',  ',|==4a9%zzUsnxLL eX(&v|ypKvVUYw5`|9ILt)QZg_eb7*_BEO^]P9+$~4+VXo/');
define('LOGGED_IN_KEY',    'nKSy9v{ShtXp|0aN=CLL:x|DuS@Ub@C12PaE9:.r_RkyhBhk*hg#e;g^CoPR_k^K');
define('NONCE_KEY',        ':+%Z[cMlqPoz!,L|]<@YAjq{5F5;m}-LLyrGq,s+Y+qp;.-BI&`(fS@6!(!.-xGC');
define('AUTH_SALT',        'vFgsVD9Bc6m0>zQWX^<ht+<omJ@!:DTa$Z+oh,U 8DR|ar+cLp44%6g,jB4-}7VM');
define('SECURE_AUTH_SALT', 'q|)VB%4{|KU;:?<S;!Zkmu-bf+ct2,|`$6)HFswS*G2|]@6A|9+Vl|WFXFp6|]K:');
define('LOGGED_IN_SALT',   'cFoCH{Ib]0>v}IzO(@BN>M xXQ4jDe!b.0(?:|y~!I.Kd]84Ud?&;qECE+bfhvTZ');
define('NONCE_SALT',       '2gCahD+fApu$ts9V<wX3Sr({~E&do&zQrI/6FR^):!{_tUUjVKFRu|a3Z|/YV|b3');
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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
