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
define( 'DB_NAME', 'baseapp' );

/** Database username */
define( 'DB_USER', 'baseapp' );

/** Database password */
define( 'DB_PASSWORD', 'Shyam@baseapp1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_ALLOW_REPAIR', true);



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
define( 'AUTH_KEY',         'h<|dbxz8-Y(4*%=VTAS34o6A[22W0lTh)|: w~WT`usDnKPKk#I^z:}CC)AZKZ3y' );
define( 'SECURE_AUTH_KEY',  '<TVm[pt0(2=??P=bZDn[ZL0$VB1@8vTr*0 {/)P(F<k=ymKQ(|I(zK5EzY[EdS :' );
define( 'LOGGED_IN_KEY',    'a}VhrpO?]dE8#A=HHR^nb(BY#9!p9dJ?`Sncb^ O#mX`0+1:{e`%pB+A|;IQ?yHV' );
define( 'NONCE_KEY',        '2p_i<o>)Xr]tfQ]-Cdd-HJ]{Y_~G18_2jnoP[W<o)LRRMw2fABEd<TtlZK8l<R|Y' );
define( 'AUTH_SALT',        'EOS6JdyW9IP({u!qsi,ju0Z[YQp`{<TBHVz3tAd((E5R.38/<Y4w#K,iap3)J?p>' );
define( 'SECURE_AUTH_SALT', '/4R*Hw{O$KU-:G80]v5k>_*HkI~WJ}2s)+{C(i~>PQw^3sQ9foc/Q).4DApZHc9&' );
define( 'LOGGED_IN_SALT',   'KOL_|ceux%A)7$i$>Ga_.#fcqZ]A;f}E9KWfP0?$LI&-2^#8{T7aIv B*UM&:Vu,' );
define( 'NONCE_SALT',       ';u::sJ/6/yD;2(<%%J0>_=qL4# AI3?0Me)!n[li1dus(08wSX3{q{SA?wp7X-N:' );

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
