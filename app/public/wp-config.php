<?php
// Begin AIOWPSEC Firewall
if (file_exists('C:/Users/pocat/Local Sites/lingopoke/app/public/aios-bootstrap.php')) {
	include_once('C:/Users/pocat/Local Sites/lingopoke/app/public/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%a|c,$}wi5(BwLD]0SdbjKel`%F^iV%_^68{Qr<u1@aKLu#F](x-qdw:z3@dpiD!' );
define( 'SECURE_AUTH_KEY',   'D3WHUhYb=jU]0A>gS!/Hbbom%Ol(~SdO~R; RV#S%L8.EInk+Hry&V|+(sZNPkLk' );
define( 'LOGGED_IN_KEY',     'V tOWqTo(&nXE873]LGTK8;qNcVWrRhDFJX%jWqDUKeJEo.|u7WFt3^yguLHtsc{' );
define( 'NONCE_KEY',         'FDB4El` `pPTP[a6|w~vge=8X_jlKTK~huqQ[wf}vqXXlQ?cnE]%8eTehprn/kMw' );
define( 'AUTH_SALT',         '&bhl=o]q-7>yz;rDsKz`<C7ng,XZ76{u)0p$uc$CiHBUER}5PW.)0 PFpgS``x@s' );
define( 'SECURE_AUTH_SALT',  'K/j~`]kV0{;:P9fKZgrUNX[ijJHwVCrz+wcvKh$Hrn#nmkon@o!8iZ?V{*f4T[Uy' );
define( 'LOGGED_IN_SALT',    '*kI<em54s?;Ulx!!Gm!xAH NyPRpopyHATfA2;puG.oO`G-Ho~YmcPbqfcyEA_pP' );
define( 'NONCE_SALT',        '2[MZ#[f:)k(OlJT6V(u28iC<o8k;?{i~{.1!-oN*hUk1T1z}3@RgxcJ1BLw.uyS,' );
define( 'WP_CACHE_KEY_SALT', 'Qe_Ob/7oIS((ev*`9aIS+U7A3]:5vG[S~(9KS}x!OBh~Hs/2&VETM4j=LrLSZ}!O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';