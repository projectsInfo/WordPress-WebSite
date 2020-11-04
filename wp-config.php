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
define( 'DB_NAME', 'achille2_wordpressapi' );

/** MySQL database username */
define( 'DB_USER', 'achille2_wordapi' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql1008.mochahost.com' );

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
define( 'AUTH_KEY',         '4LZ|vm7RC+% !,-x  =w]}oQ(MF%oM[-H/$QhJPY(hz;>g,WS=|;5qCdPk>l7K<(' );
define( 'SECURE_AUTH_KEY',  'G]TwR4{m~YGPIV0U4fly+{q52*WRAnQTbR)8Un#G92z9Vbuq#lkQ2ft{5{7ICP |' );
define( 'LOGGED_IN_KEY',    '{*E?A3N<Q yl%5?v8*-k&dMtH|[Em#^ J^/9Mu#kA(x?31BE@Wf%-I<<OIMR<>X*' );
define( 'NONCE_KEY',        'pon{.oM:b:{P7)|D^hkD+g(yN%Z};gyVL.pg]18>Eg/0@I[;$E3Ph~T+NTI8W/[#' );
define( 'AUTH_SALT',        'm5P/MW-~#s`kXzHYf#XkYsCuFiHb!:+nQ84U7#eU2CJmiY0zAP2xjJ(n~/z#v.^>' );
define( 'SECURE_AUTH_SALT', '&w&WVc9)zz7zPLx5HwDKFNnxV{av)FFa0PnHEMgA]O4-$vEg9Q[Y0#oNy^R]yrpb' );
define( 'LOGGED_IN_SALT',   '{%kT=ln.av?y_.//m>7f7@uy5hGL>T}mRv`e6FK}|+-2Kq oyA^NOLhL+]6GXr(+' );
define( 'NONCE_SALT',       'RwW-B>E#@xl[MbW=IMU?Pu%;#jm9TA#joZyrhVdJewTG.y+[AKh$waprKy@g$+)$' );

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
