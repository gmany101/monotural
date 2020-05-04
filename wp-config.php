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
define( 'DB_NAME', 'monotural' );

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
define( 'AUTH_KEY',         'Vg b(1{D.F4s*Yu:k]g2=:-S+DJn,hawQ{`fi!OFGGc.OrZ?c(NN$_Ld|s#dm7uM' );
define( 'SECURE_AUTH_KEY',  'nrg&mJiR;we@&I~58y(1gOcq7du{H3>,1[h<DwP]i4<+v>n##QHGK 5`[,(ry1$}' );
define( 'LOGGED_IN_KEY',    '<2{#Bj(#;YMGJtI/h^.A.XW9OQ;7>!Hii8hTQXR~,~)6MOpQ8RJF,,IqZS#[dXe$' );
define( 'NONCE_KEY',        'Ap_)`O0rp~y(.tlLa-~7sPm2,rW1Gf#43F[&V03WH%Wra7XdGJV``(?a:]z}tf`U' );
define( 'AUTH_SALT',        'luH|GTO~p.EhtuE;@}&<Yy`w@#?SQf+q@:CP~?:_R0p`MBmZ9Q7y+)`@*(B};%SH' );
define( 'SECURE_AUTH_SALT', 'uHE)3*J@jJYxG27Vj|_?xd_g%NSn~;$$(r$vmzW|;j3NXPO=!PuaPM2$0%+Z[kU:' );
define( 'LOGGED_IN_SALT',   '*iwl(Aakm`f&S6u0=q1,,Sopk.`$Al9_(!xc`lt>T~saXL]vORj-!kFGgpmN,]0{' );
define( 'NONCE_SALT',       'Ph,q7xOBl_&= O4xZ)n1P$(|ePsY%pyMCZZ249=o*094]mZPBv%0_L8.!UB)?M(8' );

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
