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

define( 'WP_HOME', 'http://cloudlab.vciqracity.tk' );
define( 'WP_SITEURL', 'http://cloudlab.vciqracity.tk' );

define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'Cloudlab123@' );

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
define( 'AUTH_KEY',         'SL!%LBF3K~,6|Ctq/%syZ#f3h~E[q_KDxU<F]5:cuB}JnCOW;WKJLbG!..$RfcLK' );
define( 'SECURE_AUTH_KEY',  '-[|&ELqb%*?qJcPWH1sO%cm1aqi;dT9.C$?)qDbb:rrXMc,NINr+4NOTOuc6KTmD' );
define( 'LOGGED_IN_KEY',    'Q{>jd?9sw!|LxE7.l6cv4;oG(e.6ej0IW+QFlK3WA/VDR4[FuGoqsH)K2Mt%iC`a' );
define( 'NONCE_KEY',        'i>wt5FlBUtv184MV<~t5c7J*w|_+o5n4@7T O-20[H_.csQ}y6D$PsZc.+}X:aM%' );
define( 'AUTH_SALT',        'p^YZ+>n{~M#_ZOQzu(Nzj(=cM1VP+1mc@Ae.~YbAnPN;RPbL5)R?;+[s$^/KfMm]' );
define( 'SECURE_AUTH_SALT', '+dv^X(WZg9|1~B>.ZyD,fu{:<YsmraWueVE%YsJTe8E5,<b#BA:%I%H6d{:C n6Z' );
define( 'LOGGED_IN_SALT',   '!{c1YR(8dO6Th-|E9tF!/*xqb74<T*AHVN{3gSevNV>ewT<c.P4D)-*Qd$LKj8Z-' );
define( 'NONCE_SALT',       'Jww[hT$si$^@W{)(G{X~4a5=^z`i%9t71*,,DIip5m^1}Z;;RhILsh&bfiBe2|~>' );

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
