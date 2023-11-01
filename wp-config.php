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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'binzzzwordpress' );

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
define( 'AUTH_KEY',         'bf{(@)W)QU6v|.]F+>G(kH);iPd,w)F5I}22Uh2v],5X1p@]U*i|vQS2/jU`t!s0' );
define( 'SECURE_AUTH_KEY',  'R%Z8E;<n9NL^FDB}[YU@z87`B yw6BV*p$q3bKO`aGL^8RAWL8eVefAz4Xv~+,?5' );
define( 'LOGGED_IN_KEY',    'Ho4[JBFqE78;(LqcL??BqU%W2w|Nq>~SW,tjW&a!o8*K9y_X^``4]n#*a*Q};UVO' );
define( 'NONCE_KEY',        '1]ejY<~4)<42YLdKF{Y^l#;hG.%$4 zH[Fv2zyNSSY_9[5zsLq0:J)j_/-@S>(|.' );
define( 'AUTH_SALT',        '=84Im~]<w;Ey@c(ae*f`b/QoVZWvrkke`7)[/%dG/r<}ON3_@39CW.z;RZ|I`*7I' );
define( 'SECURE_AUTH_SALT', 'AN@VYd0#tDx~xhHb,#RxKv_sl@,1EEs|{]~ 0#u2H]0]9X3fyjMPe*t0DlBqLpuT' );
define( 'LOGGED_IN_SALT',   'k_>1SH?6<.C~3Md-p*|~_V0Z]li:|{ZD>(I<3ikPFEl9@|>)Yyr^wb{6>E^2THv%' );
define( 'NONCE_SALT',       'e_]d-Q~%S0!2R+@K:(g=sOIX-X?8F5tq1uvxED%x7D%A)/Gb*%?z5*@+llv]T#b/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
