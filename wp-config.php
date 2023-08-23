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
define( 'DB_NAME', 'veggielicious' );

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
define( 'AUTH_KEY',         'x{M%$xC3-4T@frGKCiLDOeSI.<z=jQWCg|2Esbyql{Cl.+ohy{BpHn4<t/t@G!->' );
define( 'SECURE_AUTH_KEY',  '!N+iXBvJ!j*ZRfZ1JP,,;m`#rCqkbugBu^-M(dbv f`B~n$coel`gakPZt5VINQI' );
define( 'LOGGED_IN_KEY',    ',c4J&SZw;IV059SN0r>/ElF62|fNv|B2]Zwe{C+e*ZtE8$h]ruU:Q?hNhG5au#z}' );
define( 'NONCE_KEY',        '@Mt~!c-Fxi`r{]W&jA+>r:8ccsW9zsqWv@>E]/.MZJxFS@#p0TPI *DnlYfNv|GP' );
define( 'AUTH_SALT',        '7D*%_q[-$<fu$]w*c##7!R~[h387e(kM45WpADdF@yR)bw#,%|JaB(lFfB4K5moy' );
define( 'SECURE_AUTH_SALT', '~ZzKp(NV|ZU#bygk 3Z#7R^5T1do=Uw[lNrCO!?65xyOoQ280=XhP|-R#V|ZK*O?' );
define( 'LOGGED_IN_SALT',   '=7, !v=N`},R^LgX9i5~@p`>hVKAuXX`mA&xdM>Gd5yqZrpWqN4VT==Q_wf45Ywb' );
define( 'NONCE_SALT',       'Hi&e`gQr.quS,sp=alS{Xt1SlP95;|v+mhE +0(R1ts&zEMp@DF{8X0tYi14Kh6%' );

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
