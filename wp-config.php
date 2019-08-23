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
define( 'DB_NAME', 'zenithub' );

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
define('AUTH_KEY',         'ESjP.LJtdmNgUnNT.d)Py|B/Or%^K+vX~MzIG:c4.4-CY<6!G_jsL9siJ%e|6eTt');
define('SECURE_AUTH_KEY',  '*.ag$uDA$M5b9$3X ,Q$wx:r!0&6W5oG5@+hoE}#8,J2dHj<bvY.R?#_8A7UM?qb');
define('LOGGED_IN_KEY',    'j>?/G-&aEw)%gY_^2gh7{<Llwi.78|c01*@4iB??7u,:P`LH|isG|*YSs5kNnc52');
define('NONCE_KEY',        'b^*yN&B3q)C9/%J88Z7 S4|%#+^HK]{V(|`s m(?|LKWNpy4j~,y>SjEyc~*Z?[F');
define('AUTH_SALT',        'o>fb&@+%X5Y]x?[%5:TY/%SVyr]6Va]l[r<6E|7RjQxa3D|<lRlSznaPtqXo{CC*');
define('SECURE_AUTH_SALT', 'RB +@1)i|yI!Z#sQ$w/XGHAmUFUwv}%HnN(p+Lq`sT)@`4yl4C*Gg8F;*,+Ese7N');
define('LOGGED_IN_SALT',   ']-*+RqBB$@|~.^OiN.@^:RuA+L`(H*)q7j[b^4KjMY@{:]%Ke6Km1ml p7QLo=J*');
define('NONCE_SALT',       '2rvs5M`/V)*8>}h9}Apgaa.muwa_k}F0+YLr3jvH$&W2^=CE<HD1B-+8-wJ9{q,:');
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );

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
