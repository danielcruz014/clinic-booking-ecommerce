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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u585117139_dRRaz' );

/** Database username */
define( 'DB_USER', 'u585117139_od8T5' );

/** Database password */
define( 'DB_PASSWORD', '2MHUj4wDJp' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Kyo1q%o=Hqj?WW5p^ d|1AtjUWGmX86#1J0ODZZgG1*eZ@/v2;.tZ3p.;8)DYJ-V' );
define( 'SECURE_AUTH_KEY',   'clz!cl>T[UQMPZ%aV$%D8Q2f(+X9:nHIiK,K,-,L~*PM7 hv|K.D1ldIwUK7&]h}' );
define( 'LOGGED_IN_KEY',     '%-s^HAlXF7#tZ4kPhDP<23SNl3cFYS8@e|3^m1m/J`gLMMJ6^ui$At/mS$UK4zh$' );
define( 'NONCE_KEY',         'olB{GTCysp2cOiRU#Co~<}u|Sfm+qG*,{E&FwXMg|X1L5UmBBr@T?yDsBVcTM9h?' );
define( 'AUTH_SALT',         '#[jUz_3Gm<&:|*7~Xat?wnAd_+4[54Ln_9(h3Im0:zi]<B=Q|R|2]lNq+;VXn3_n' );
define( 'SECURE_AUTH_SALT',  '=3Rl]zLnv*Bb)/2>%LMrW|AJ7DBhC:7}Q!3CZWFy|/}S$m^]XLmA5t!s9/+I2Dtb' );
define( 'LOGGED_IN_SALT',    'h:pjKV5mJUTd;}Vt!^:},WH:oa;I y|lRb:Un8BwYEN#nau1SBbCy>n0>wTC)m] ' );
define( 'NONCE_SALT',        '~QD-W@#NM-!PiN%(B~>ayvo)uj.}~+x[kBaS7xEuU@:j4EN>h/f2`4?gTgg2m0>J' );
define( 'WP_CACHE_KEY_SALT', ';coQdIRxPNhC~[]#ek:-+dpL;=Y=/QX.n@Qe$RbLsN)Q7*j/:5T~SB[bkY..}qSA' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'c23a1b1f9b5db7a96114e2748b7ba1ff' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'AMS_SAFE_MODE', 'off' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
