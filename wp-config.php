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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'p+Z6>]{PO3v4MKIEMJ0k*dsvKbm>fn#H=7ZZ^]j?%T2XV^.*y_fL^A^`B.lW]A,v' );
define( 'SECURE_AUTH_KEY',  '7c(wgg1ybqJL+d&PZRB[fkNP?;:Oj~dqf>-#<1sT?Kt;Eds~4)|[>9DX-J}U$)cx' );
define( 'LOGGED_IN_KEY',    '=I=wTs^8KsKrvR;)_x>!~-e5IHx[@ipejEd5PgWb?%O_%0$M+M8JK{o.ru2kW$iX' );
define( 'NONCE_KEY',        'a*jTyXmW+8Qmmu41$JHQcCzx#(n?.Tf=q=>uP+<P-%Dgx2Fo8pfiNRuzQujrxcgl' );
define( 'AUTH_SALT',        'Ca#NiTd9B~UEI#EVbEMmc_|S/Zht3;a~P,mg@z`S@Y#4b]%:<Fz&$/]+%Tb _&p1' );
define( 'SECURE_AUTH_SALT', 'L&{QB)>[co4& ;^Ou{0`B444u~C^ I%rItD~44SmFy0|J*mhP54#TcBY,2E/}P+1' );
define( 'LOGGED_IN_SALT',   'gYpN,=BZ7-Lg6MmF1GQ]JddBlU~S] GP+@GazTz!^z5Z;2E5P|?GvfPwn,bZ{4q#' );
define( 'NONCE_SALT',       ':=0aXbK;CzqEpE%$GB/U29mCFw$WK.n5{;vi6!d4 h(k<MDjI,P{1[wa6yqk8EW9' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
