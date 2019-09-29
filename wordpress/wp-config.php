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
define( 'DB_NAME', 'databa' );

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
define( 'AUTH_KEY',         '%q*BT,Gs5Z[R)S6=@? z!e)jhB$nTd$5=6aJc|Zf[exH/?b:y<&.go@%{>{u;Pd1' );
define( 'SECURE_AUTH_KEY',  'xMmnc0M_>N_%S:ZO)JS;bC([oOq8w}ecMr]uEP&Ax0Ck#bY+k3y#rSV60A=JB5E4' );
define( 'LOGGED_IN_KEY',    '(jj=)zgpCIOJdu_Db{b9mRLP?X^4Dw3$B*gwL~1YzDQQ^A7U5gwx%[ibE-Aw@.4-' );
define( 'NONCE_KEY',        'kY`2+e(b H4RA})F&I^Zr3wJafvM(S07@LB{yU<L)!YI=&Y;PX[&3$~b{k(yD]44' );
define( 'AUTH_SALT',        'B[^.y]y+wc?KLHHRter8So}Qm]:VG8jm%DDj.!^GL?Hj{8@Ra^H-%hURI7%S81gu' );
define( 'SECURE_AUTH_SALT', '~4+8`m}S3WA,92Cbrd~MTls]xGvc>p%kO`<twTMX/mvk=v8E{L99I}19H,d*Hpbj' );
define( 'LOGGED_IN_SALT',   'Ub%| JDkS!bv3EKA:{PCbc76:VZ:lMRK@Oy=wX}JjrwmIkBksO8.Wdh*;mUcB&r0' );
define( 'NONCE_SALT',       '!^*`C~+r<7=$Q@p^,GL{QK_Bt} {n;5_<$ a?-0PZa0-n9X]o2o2[#`VV$>.mJ_ ' );

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
