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
define( 'DB_NAME', 'itislifeworldpress_db' );

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
define( 'AUTH_KEY',         'hW)^0?},tQcIdZl%b9ES&C(@@Gp}xnuG@cV|t>Zo Z|1pW7nLx~W;D8]Afcq-F0y' );
define( 'SECURE_AUTH_KEY',  'POvPY0N!1HPfCBAQCu!I/~Veh`z%,SL:K&Jrj`O~-eTS%J<65ne/nl:DzM|0me*_' );
define( 'LOGGED_IN_KEY',    '*gQ5o9!vzmKSs,D=1)an3XU  /shK&ju<LBP^,Z[AS7rEe88gC(%7==dkAV7!T|J' );
define( 'NONCE_KEY',        '[Q0ys`#v:9emBZ1Ua.*9a,v%,1e%2VoKDD-Rl|f0(|.Y,Mr;H4};^.In#R1./7(#' );
define( 'AUTH_SALT',        'Q7tJ7m_,xpdXEW8g;nt9`9hYm_`PP;Hk#-v#6Vdn0Cl-/9IUOrb_g4_0<T+k:.xS' );
define( 'SECURE_AUTH_SALT', 'Rhc;@F,X|nZa3 T:$LtQri^fZc:-BgYV!Ep2^8t,YC<42.E#*63e~_E^I$+}7x*1' );
define( 'LOGGED_IN_SALT',   'VyKu3qXceJ.Z4fUKpQ}}K&|[?bNbkwRK1YA*N$)tF,FFB^74<}t.ekiA](p}fHN7' );
define( 'NONCE_SALT',       'dcDz_GvO..Xh+Ia>!6`Y;CI?RKP9(nW~h~vYf1Z{{R#F+S(tkTs_4rGl~dO70B{&' );

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
