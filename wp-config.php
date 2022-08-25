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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'kritagya' );

/** Database password */
define( 'DB_PASSWORD', 'Kritagya@2002' );

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
define( 'AUTH_KEY',         '~n9(Ji# 6},-_s:5&6l]sI<%Tmf$.$+FB(.7W35Y<i31W^R#7Z<QWK;y;I_,e#p&' );
define( 'SECURE_AUTH_KEY',  'v1AM6Ej7MB#ELh}A-kM9zCrF/]m_x>3&%s8E;S;#!h*Ch&9vC1KuH@qYqs|jSQ7G' );
define( 'LOGGED_IN_KEY',    '09/DK6^f=)3iVHLi/T@|>WSN~!v[*)m: dU1y864KWg1K?0/qHU,Y/NavivE,wSZ' );
define( 'NONCE_KEY',        'tML!H=zK}{8h ds,F*DVBu4A5wJ8*3dOA^cuwgWb~*y#hQ68@Q>G4 _OLx=3hgnh' );
define( 'AUTH_SALT',        '@U6CdYl:I6j$b$=tCx$8T)LfnTJ~I>`&b;}{ceP8iXQo*dHDouW*_Ppec!Nc5d?#' );
define( 'SECURE_AUTH_SALT', 'l3Suv/l)pRU-Z@}5:<P)[bh(6;OnYVVkEBKowc~rppE}y^Ew!ltBRl)Q1vB<_ Q`' );
define( 'LOGGED_IN_SALT',   ',t :PTDn{,6V&(3`J`Cabs|r)&|w(h|_8Pd5c]OaiYe88|1WJhN)]F]3hf#.I[|&' );
define( 'NONCE_SALT',       'UU.($q#/22fKfT^LH;hbTOI<*mH%#ssO_vbF7=mHC5oFYKkmsVIA>sW^OPQT0ZES' );

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
