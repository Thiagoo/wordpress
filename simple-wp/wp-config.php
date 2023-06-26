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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'w9_NWw~7NpVwuJ:7v9mvXPF-VCa|QyOOMaDE/P3C1-R}Db+D48J||rK>B;-cLbh~' );
define( 'SECURE_AUTH_KEY',  '|Q1={g:YT)cm&4q.T8gfYXqoR]P5psS4}+=aZ:x5X=P(m.@Fc_#TkJ<nf(#1~r}f' );
define( 'LOGGED_IN_KEY',    '-fvlYvMy>) BS?RW05f2XhBZY* n(X8Ht79heq}}y<E3%!Rv*0E4}.luli}r#s)3' );
define( 'NONCE_KEY',        '[s8G|f <wYZTLns2L}b]R9:GGtOYx:ZjdPN0,#rh?xG-w4~1QT7gu`@_2?Ai<b 5' );
define( 'AUTH_SALT',        'bNx qS.a*wf%!G0;R$D+F*= )WUoJ^Kf1ed}=8@UB+i=B0&Ri#a#_QZ+)oH#Eda,' );
define( 'SECURE_AUTH_SALT', '&Y1`av/*87/lh{Z|$=Pk5`;!DPt7R1X:3V4Q(9w-L{C7ezEML^!rMRyB+jw_EL <' );
define( 'LOGGED_IN_SALT',   '>@MXm<,4v#)wi,Ra7C=Bh@dw6yw0(H0S#wCm]kl*j4y*k,dZhE(>j/w?t(S^}:p[' );
define( 'NONCE_SALT',       '6J6sLR^.65+-VDT2x)onvP.|USwfb{/wmB*x3G7%Uulz$~W$kQ4WqhdMNlRt)#(@' );

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
