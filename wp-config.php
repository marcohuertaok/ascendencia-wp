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
define( 'AUTH_KEY',          '[]X$I$?=mH.g-}~spp$<8jfV[xzbM|qwKPIgr+G_8-CqtqaMqs>YX5^|(>:>|g:2' );
define( 'SECURE_AUTH_KEY',   'X8yfd-&nk9wnulU]CCjPiG~+nL=<fo-l%-=jHh&%iDOcfW_mr*jERIh8.&|z~1u$' );
define( 'LOGGED_IN_KEY',     '(kjbTW[lH3rARw%RHxo(Dk~`-G:[0ed~Q!%r7ZW9EN{ [yN /[J3$$4T$ow&x=5+' );
define( 'NONCE_KEY',         'G`~#*cIVq=GXCpYF_$;QYc=0<A{NI<Zua+,-:OMU 7@+$7:d%A}Uxcyk-Ak&aEwy' );
define( 'AUTH_SALT',         'arT4/+%^i9`#oOa++;gJ%;LLgey*M_@4FDm5qI<Ur2u>]9V(PN%YOSetHBB#49KG' );
define( 'SECURE_AUTH_SALT',  'SG=D?_80gPD:U!#?0m)_h6K:)-m_(b:2;NsVEy]9t#c@Su#z#d*CHAJjaSuLOsbj' );
define( 'LOGGED_IN_SALT',    '+6$w{8+GIfk.<<4/IAYYO*h|(u@.:$pcD:dLu|(;R_,<VQQU8>}a9?,(]w`;%#bL' );
define( 'NONCE_SALT',        'oyVouoU|*Htl(d1=@EXm!f19ArtgILii%-I+,EFS4oRc>A_xkir<Ho|qzc;IG{tH' );
define( 'WP_CACHE_KEY_SALT', ' s!}>t9tiRPs>HeDrD]#>uX4[Q^JA]J+p=~j)tY(9B~1+~crpV@Buv^z/4g$w6oP' );


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
