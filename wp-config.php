<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'review_site' );

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
define( 'AUTH_KEY',         'BQ$cKBzL/ iXB;<GH<w>Xv7#M+Lj3&pI-^[6F+oSEC M2?8:(g<x1M@Y|aC3/F}r' );
define( 'SECURE_AUTH_KEY',  'E.*mzyl`Q5Ni-$y52V]3eK,)DJ3IpMYAe[x!@AC-pp+y#<>+`r-KRqR+JXW*^$6W' );
define( 'LOGGED_IN_KEY',    'wWQ2K(e;rL564SbzPd5(zAi, gb{oPcOo^]cnwxRwk$oiA*4cfqQzo u::U9,:D]' );
define( 'NONCE_KEY',        'Mio1y0,>v`RJ|&dwVdv0GOWK[U|Pay~e=?_Bf,E/xgjG~NYOrbhnXoUYUC`wS($;' );
define( 'AUTH_SALT',        'fmBc6qb*&P 3f>cl ()5aB+gPf2_]7v@kOtPWc<H+f1?z3BJ%kM]Gu>bPaybiW]p' );
define( 'SECURE_AUTH_SALT', 'Flq gjd#f_GDU5q*uGBa13:H*^/Z5r:w=;Hm`F}R(3~,>@g,=p>pg8,4Q>uO:>+f' );
define( 'LOGGED_IN_SALT',   '[q*3[^uw1$TA_AvR<k, akI`9^~apDy3^_y_3&&CChC7VP>5;7hu=%K9hC(:5?~#' );
define( 'NONCE_SALT',       'wG.clsoLAiX1=rt6.Ym:a.`%7#;oDTif)yv#sS.f)]hBzY67+IagG7qTz~rw6zsS' );

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
