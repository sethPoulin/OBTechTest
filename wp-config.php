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
define( 'DB_NAME', 'ob_jun_dev_tech_seth_poulin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8Oco;p-`[} ]um =2(8nl&%> ?d`6t4>4+wF2|eG!Yk}tK5 -U/wQ1!]m7WyP=Zi' );
define( 'SECURE_AUTH_KEY',  'PrYb<o:<;@1x=$wXYtt91wn4t-?YpWK,Dbl}YEoA G.*!u9vMFBx4K+U7D_!%Rnw' );
define( 'LOGGED_IN_KEY',    'jb>v^O;pCQl[:x56{)b];&Ug^,RE$HEN;hMiVWv7U~Uh0H:dTY5 db~!+5rL3e%f' );
define( 'NONCE_KEY',        'I>m2XK0`,{9PdV6v=}FG9cd;TEPomW)&fau@57Z]6NwR2ah{CP}(Gd_.FR,(IDM,' );
define( 'AUTH_SALT',        'E|O~y^Yo6[D:;fObNaQ:(,Q@;B;SZ8jSoM&xlVw+kB|#~D -Q7{z9@>~-UG3bw>d' );
define( 'SECURE_AUTH_SALT', '*lo2qM?#>LQ_ApPG|(BO>%V^~h%P&OQ+5|8FAmBF(I=UV4uS$%d|R^l;r;D@-?2{' );
define( 'LOGGED_IN_SALT',   'X<7-IKQ@TKsc^o{.%l%TL^hz8>Qd;CE/1(h9Ip7<$;sTUnMGo6o0&$+B~CGwk8]a' );
define( 'NONCE_SALT',       'Z)gZcw_;:0}yXpV,.}EQf%q_r_0rvLPVEOf$T>p+=&q#==q_?$t<66|dY! PDCx6' );

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
