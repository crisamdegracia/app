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
define( 'DB_NAME', 'dbname' );

/** MySQL database username */
define( 'DB_USER', 'dbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'pn4m}#3Q[qhW$6Rf(pI;&#zfl^1huF {Km@02Ug.uiw(S-ysPvv#Wrs/Q0pDClm0' );
define( 'SECURE_AUTH_KEY',  '.XtyvWGZc!q1pjb|cp+sPfk:y#4|<CplH4N^A>37/TAdQB]BnF](yX1ZVyBWG>V;' );
define( 'LOGGED_IN_KEY',    'e]HFo,6I|O$W!X,2_qzNu,:X#c.9/u2Kis!Q;NzQ9h6N.(FYH-m#)^|VmLlCt.#?' );
define( 'NONCE_KEY',        'H9icuRZwG@;sj]Dx3Bv}pZL0]10VMlI-|K|2Ni6k+gPVsQoGS$:<&|`VhNY&e76Z' );
define( 'AUTH_SALT',        '|V<Ds;1J0aLco:E$XOe!X|I*=&z4@F]I!.DQkDc&*]%_6TClGEV7i%sSa&Rq/JeH' );
define( 'SECURE_AUTH_SALT', 'x.:PeC..zJ.n S]TuM)D-sWm;yf6hxO[YQm2yebCoR-I./w;:{sW`9Z 60n,s{c;' );
define( 'LOGGED_IN_SALT',   'p1(/~,jHf}W~4%4>>.BEz5Vq-xLY3ZZ*dgl:C|=,unY3,`{&]Fst`*ky07heufA0' );
define( 'NONCE_SALT',       'fUKAo/6tKIk^,J9.=0r&VGTY2NXxFl7_AP4Ef1jdgw!6;<~QYXR ^G[f12Q5UYr^' );
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfu_';

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
