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
define( 'DB_NAME', 'sisueximfinal' );

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
define( 'AUTH_KEY',         '7c0p}!!$?QCeFQ^wfJHQIk<2ku;3:fC6AFRMDRPS9Hg[?}*x^QJn!iepi</qw{B_' );
define( 'SECURE_AUTH_KEY',  ' #r`0LI)/{~j-Bk4=Y(({3A045>NMfn1Zse{A4Y&_cu?%$9z|Ap)EV_rSxg#,:Ze' );
define( 'LOGGED_IN_KEY',    '|%?vdDL#qBsr|loodB<n(20+IL|WJ^`t+U%n4P(i0k(GHVg;CW&@^U[0[4+1U-jg' );
define( 'NONCE_KEY',        'k4WO8})ZP8DT6 [%Pjuy&`jm^SgPmQG]Z]%#Gi!K#LytCQ(dHcDdHbu}0:vr3s+`' );
define( 'AUTH_SALT',        '=:C@uOkuF;mu<sah>rfL)HQSic!)89Z{}-Kk=v8x[M{Ml8ot*[2}ywP4opn(xb}R' );
define( 'SECURE_AUTH_SALT', 'c?3lnK$A[y>&e7?s&Fg^H}oK<3eDyt%/m]n4LTRVZWo_GI$eN!g`d|[KT~(,qKQm' );
define( 'LOGGED_IN_SALT',   'sj9,8pq+TZg*U>l@ZH;+i*Zs8Gj*-2 X41erxGw$CO#Vq^]Sc:o}T}&Ib7z#RFm@' );
define( 'NONCE_SALT',       '8ycWr3(ADmc1I^D+M%HUCC9v;.1Adfiv4jq^~#LKiR=?*@UXI{L#@&8 w}QHkUni' );

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
