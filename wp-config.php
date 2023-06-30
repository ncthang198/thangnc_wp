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
define( 'DB_NAME', 'thangnc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':(R>  sP?(-tdehZ.6,j#ovm[0(kV`|fd]A-M|30{zZ1|,F:fSLl,#3]3l; [x7c' );
define( 'SECURE_AUTH_KEY',  '0u24u,q6)C1#paX#6N~A!.:({u~suB1t|+#x^yU]@Z+7cc1_|Z31n{v]S0O3KG+L' );
define( 'LOGGED_IN_KEY',    '~~&%-TBT5^9=l11wu,3mew,^z:{dcnmLnnRkm-Cn`f>3??qkA]MUXAn5PNVgqs<[' );
define( 'NONCE_KEY',        'Ezw@#bF?YOTu&_l4}M1fGp>%SI6F&Y~}CJc3A$;_zobiSJi&$}<]LxFv.M[ZM_E!' );
define( 'AUTH_SALT',        'wE-v,:@rx|`muQFKO`5ri;6<DG]YK>d4(mM3@uO!72~_V7r>#wjX}N)G4x8U:Auj' );
define( 'SECURE_AUTH_SALT', '@g*]_,s6k2r:>l(.2l!haQUmEe&zy1c{?u~C{DTv}Ic5UZ`na9|hN!7V3Kr$(;{R' );
define( 'LOGGED_IN_SALT',   'o|Lpf)Ib@t,{K[YU E`NS$i&b,6E%n(/7=qLq/1$H2&)q{E{]2~6qbz$Y,mZ#6Zs' );
define( 'NONCE_SALT',       'VSsu}X}1YZ7nRU&bo)jt#q9WXyCgMm5/?qQLu``dFHT$6o/tqD{W6WuuUxC@)-_:' );

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
