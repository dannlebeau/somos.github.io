<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'somoslacmovilidadsostenible' );

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
define( 'AUTH_KEY',         'HFr~jeF#xp.TsbpR1r$ozm=(WXiPeP,>ABxTQ~{Zan`bKjH60aktL&5L#[Pm6FoU' );
define( 'SECURE_AUTH_KEY',  'w4gnUjg3m,%<;7]f&<d$wW(m<?~?tQY0}Yr:T29a;<5xE8}qLO7G_mLf$bHf[B[:' );
define( 'LOGGED_IN_KEY',    'UXF5gVh3FLZOhq*b=!U4dgDaSVKmav Al;LR[$%D8`R$qlh9g~imTYt>T:F5<>E8' );
define( 'NONCE_KEY',        'MFG_: SH^ALFV!fqDXN#P<6W{|Wr2a<1|_%za#g@lfhF?PESYN;>wGFnazol+?@j' );
define( 'AUTH_SALT',        '<Bl=YW`Q4+|fQJ%$rv/C*mmY|>XA k^,F[!.Z@=h&1JLXS}]dB1dI7uD{-)V5GAQ' );
define( 'SECURE_AUTH_SALT', 'h&LF?Moah~XYw);$OS0)Fy)27rrYH_vvF%Uy*okx_U?5h@uzx4~PrrML8PhApa#.' );
define( 'LOGGED_IN_SALT',   '@}]KG&/ggT#h<YzY*%Y~%Bb.;sAj%GV%7ZnN0JqgVtZHJlR~CoQru{8?,PQMAEt!' );
define( 'NONCE_SALT',       'r@}_aSIUL:dP]b;aO38z`k;g@X%LWJQ|;RMC>S2bZ}m-1gQ0`L|N4EMhFW0v:Xr?' );

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
