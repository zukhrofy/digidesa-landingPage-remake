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
define( 'DB_NAME', 'digidesaremakewp' );

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
define( 'AUTH_KEY',         '4(9Aw*d<7YS7aYU`!;oF?9ew^-Oc3i2vi[+c.Ri&wz,u`?R2zpu3k~=%Q[bFR$sD' );
define( 'SECURE_AUTH_KEY',  '0~lNii23C:{KkF[.Ux,A]yKZ4-07p?*V7`gy4qJ*KNu!n/V:0Mgw70g2i6V&p(|D' );
define( 'LOGGED_IN_KEY',    '<?7O>}JTV=GOf#S%OhE_d]=6=`Tr28a~1%+*G>El#/?|f#@]`|502(u0$F<A3tzG' );
define( 'NONCE_KEY',        '(o}EW2(%8B/r[zd8sf0+89DD^A*44h;flH*~fmU^1&ys|r(hm&)IrZ/!ndi-B8lP' );
define( 'AUTH_SALT',        'cGHq>o(WtDy)pq3fhJe~5bT;bfp|R~t%&^f=_m Q<b=:AY<PP,2*&zM#vZ7u2gyk' );
define( 'SECURE_AUTH_SALT', 'z>RN%1>1(F9ZM&(,k1XNo2J9I<V>MJ3z&Q+1:G^=wg2)MD6<*OMg/MfoYs[N<owe' );
define( 'LOGGED_IN_SALT',   '7ajmc7HgI5d&{C{W{y#I W=ouv@8Wlv5_40mc~SCM.~|w=h?%7;S(Ai,>Tx,nW+&' );
define( 'NONCE_SALT',       '$^q7$F+N^qeEf>6]PZzOqysttM~cA5#s;f,S}GKIwbQ*`@V_}lF`&D>Ir-:Ns]Zo' );

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
