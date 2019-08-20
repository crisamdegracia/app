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
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'RsG-tn|-:{z7KNHTeb,67Bl?B%[#^JX>]m*YWZnt&>yP8yy4X}&}6je#w )lo$Wq');
define('SECURE_AUTH_KEY',  '*UaTh)a(bL]bB3^AY(r*Po|5Sv=s;.$m+(h,A@E=GQ{7q=Z|fLm7JLnTN#n>fD;>');
define('LOGGED_IN_KEY',    'uW>I]L)U(}=%)0.-c2!Oj0ZB*/=jDo^5z|lZdVb+3$~i$S!f#-UmQf_,9<)fUqQ(');
define('NONCE_KEY',        'u K- J<e!},dLf&v57<5G-ko+N*cg]3CviA&]QE*Ri[+s@:!N.jN|4#{<zvlAID%');
define('AUTH_SALT',        'CH-%0s99U~&M%a~#)|52i5}B`%`g+y]?Zp-xn0w63;t@r8gjc^#]s}e>w2]{=%2L');
define('SECURE_AUTH_SALT', 'aKO{VSl&s7|h:]pA.(R+nLadp9=8g|Y}+-.?ck@k-z)}e/l1;%;<7FOof?mZ-nom');
define('LOGGED_IN_SALT',   'wIywI=l<<k>^/xW0tjkSL6GH7N082P-XOI&]Eh51FS*Sa%!qUC_[>mH|D<KSbnik');
define('NONCE_SALT',       '`YzxDb^!?C$qYv&X.?;Ka$x! :y@bKMO2+wR<};-+eckHSR^,WS<96]<=|a}U[bI');
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
