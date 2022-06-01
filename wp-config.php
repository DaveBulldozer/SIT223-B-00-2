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
define( 'DB_NAME', 'CheckYourCar' );

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
define( 'AUTH_KEY',         'l:}<fg>B%[k9,&6-K6x[biBaT6lPehL.Xu)9~]Y0+$=7?*K=`{1`ry;%G7)h(L5.' );
define( 'SECURE_AUTH_KEY',  'pC<)zNm4?!g^Mjv+!.fz&S.`BPQ_nr$;MOp)U2ovXo)RSU.]=Us7M/=c[|abcqCq' );
define( 'LOGGED_IN_KEY',    ';g(P|V}F/P~~4zt3LI1(9=+7yu0n#S12XAg,/G&@g=wX&%t%PXW2d>jf=@z/3qV/' );
define( 'NONCE_KEY',        'KUvwg@III)Z;KE3r-<9FSFp`_5krvn_Bm[M{`yDGB|u_OdnYR|F*RFmeQw18gU;5' );
define( 'AUTH_SALT',        'AR#Pwhpw9 l1+#PH49J:G=i}=<=Wb&Zj&^UMn; #lHf/a(IRZ=^E[RS.0-R3sGet' );
define( 'SECURE_AUTH_SALT', 'i+fO9ba6f^r3I%<w!7i) m}G V`V}~04Ps`7<1;I4nI<=? $z0}d;Hh[^5LTb|{K' );
define( 'LOGGED_IN_SALT',   'a>SiY%@$eu=cz</[iXe|Gw{0SM g$Epf3jNv.S8FHS8i{{s:oQ #-}?G2$Nm4tBT' );
define( 'NONCE_SALT',       'B{KJxF(}d$5S9=4-qUXS2qYs&^3)3B!X]Lg|0<z5`XY}5%V,SEHm)J*0kL1m:aE/' );

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
