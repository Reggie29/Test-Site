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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydemodb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'vSBIdw7TCMr-MJ`<cNut|?G*i52bDr/jMaL ;1J$D3blGd)F_x:OdO?m SZShoDR' );
define( 'SECURE_AUTH_KEY',  'w+QO-u.L9y~:s@z{>DO &LPh`HU+tJe]&mNcJx3J^&{E/}QG+eVL(l{m(OvF18{v' );
define( 'LOGGED_IN_KEY',    '98{{@Fbh&PdHjr>D&QAEVe6+699}^dR?!HC!?uU]MD*MbvMtv&gM^xP}>>Qp2Q1}' );
define( 'NONCE_KEY',        '*P:U>P(WV,/VV/sG%LnBh<Y_ 1g)zRvr1&omH8)IdjFm4>K~4S)G@R9u<s4|7~QT' );
define( 'AUTH_SALT',        'ztMO_lOMOzZzc7a/+`<]%5JI1CZf#r>oSll2{v/dg[;EW~7hYZX*J6Lngs+g36BC' );
define( 'SECURE_AUTH_SALT', '6;-4PE6(WCy3ijQB=*>A+g$%<Hsl^M}FLk6oqZ*J^~k5rg~zM!W-69qghBw2<`di' );
define( 'LOGGED_IN_SALT',   'iff7aE|[j5oui{R?6b,ux,JWfjd45xLdBc))YBJs<TFQ(o!a_3=IKjQ$uJ8#wKls' );
define( 'NONCE_SALT',       'RA8hQ/w3N;A9(/+oxP {1C@%?<L)z&{HgMzL-96E7X.k7*`e6Ih]~8ql1Suq0t,Y' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
