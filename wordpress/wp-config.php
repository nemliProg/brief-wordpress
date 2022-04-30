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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '0fk3[G]mcuW=hP^Ou5//xbe%2%GEX}/F^,tvn(eS&::E~$7`hI]89wAdSLlQYMc<' );
define( 'SECURE_AUTH_KEY',  'nH=Y@CYiSf;PPb!,;fM57[C~[r8MX]rvnZ%caEM]+t5a;LV0Ug:$().Vz%>:blFy' );
define( 'LOGGED_IN_KEY',    '@<~*YkFXP#Uk[Q6 wG-Z4qb<BkG%wB$W|Ss,EY7^h7%4HRGM5PksW_;|#(iBnID5' );
define( 'NONCE_KEY',        'T6{?#qQ#=mLRZ7n7td!m/[s]p<TBo>U[X97V[>H5y&_+d(wYS2{*]i}qF[-w5Pl+' );
define( 'AUTH_SALT',        '2H;7DhIXWc1vHbXBzEdM&_L4AM$iA%G(_@RY;_-enSo;-She<W:_z=Z)xw#,vHEY' );
define( 'SECURE_AUTH_SALT', 'fpqWF5t5#j]v,)ry/YGht]XT/7^R,)3Z~:E[IGVae0N70GN~pkcw1sLy*zwUJ|_c' );
define( 'LOGGED_IN_SALT',   'u0i2s57tCv<)DbMZ`HrJ$t/ln![u:!EOEcN0$8$~-qB5+%f{bkKf<|!rva~:._X ' );
define( 'NONCE_SALT',       '4E1gMiGN^?x-q#^1dM!JHBfy5V+XSqjb5#)?:-R]3{tS$2_zKu&*$g.n=qTM2d#l' );

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
