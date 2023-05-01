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
define( 'DB_NAME', 'quanaohaitruong' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'c?x^q!LZ+<=Yl^)C>[/Ee3znnLO$%xeAJ~ISGNZs:@WMy[PG9*b2jyi l7$pX_eP' );
define( 'SECURE_AUTH_KEY',  'j9*r}].4fHBvP@2c=:aVb<I^>4E/g+kcgOHiz1T,<UGQC1y`L5VGM8{U~Xk;qmgu' );
define( 'LOGGED_IN_KEY',    'T<hfYi@b!/_gEU%HsymA2DL/H5EM*ZO9[GeDK|QJO`SA,}4I>yMI79)vMiUdY}jg' );
define( 'NONCE_KEY',        ';NFwa&X^BPWizJ`sok5 EL0HYZSp[$hPx,+(}Bnh;F;ZdZOKJp_VzuQ4bh,~+)~]' );
define( 'AUTH_SALT',        ')Ax!rHz;pz#E>v?<q-<@/S19:^<;>|agndwjr%pVZALYnoYjPMeB<<XONrFP:1_R' );
define( 'SECURE_AUTH_SALT', 'mlv[#6c2d(L.1/_6tXp|ZxT=<$^u`B(hLGK%OYyn`8@%PU;0VJ2(6/MQh~UzWVJ5' );
define( 'LOGGED_IN_SALT',   'N~VRLIK~peQ.YEFg~eS,{Dn ovrT>KAmXq>0g%$Ikz*P!zU&Y 3Y&C!!QZxn.kMB' );
define( 'NONCE_SALT',       'kg]71%aQ(,+.UuEEWF8y?LX[xJSt>=JBM4}Wym^auG|;6&m*7]J 3KPO-LwE)#aM' );

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
