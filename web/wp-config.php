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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          '5e-#PB2zH{%9N<weRIv#6+KLU.Gb@UcAl?%UJ~Hs*83;XB KYcl-&@dY9rl,Vs?|' );
define( 'SECURE_AUTH_KEY',   'I^|~5YW[fzD?B-i4_m!)S.KW<+E4_!mIdBPgWr-1XM>Nj-WkEE7#E %v{H@_cmf)' );
define( 'LOGGED_IN_KEY',     ';U;y8cNQ|nmlc>shQIcC:xRudiq7iYGGE4H$we|<in=J)+)aZ$kUhQ[/[1hpW;;}' );
define( 'NONCE_KEY',         'ZK7|*m{HM,Oxk(LpzH<y)a3|bW./e|=zwNJh{(6,OtQdN&U_vU34^-A~p#8M|y1C' );
define( 'AUTH_SALT',         'LlMeIsZ5<v|(]c.tFnz0hrTS(+._<$=S7<dKl>?hH_+u7p*t*]db4r>&6w6|sR7>' );
define( 'SECURE_AUTH_SALT',  'k|c=]^viW?bDk< 3H@!.E72nofcvbRj1Cv_kxss[ie@Z[i]lC7N$vr>}E=<Dh,Qp' );
define( 'LOGGED_IN_SALT',    '.~iGNw2)=1?z}__.J8~YO|2Tg:8lD.NjewQwKg%PHp2-$U)dCnHVgSH}aRc~,Ykx' );
define( 'NONCE_SALT',        'I7+JW+B^<-#MmH&|aqAqxyU|ww| ?0d%N*n:(eh}CUw?bx3w @0>yLPR^TO9]f-]' );
define( 'WP_CACHE_KEY_SALT', 'CWQo?ps~-fuZ0xiem?bXOl*8%ySabW%HgyZ?;-kL&NQ6+7>_Ck=o!Gf]YC*5$H;G' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
