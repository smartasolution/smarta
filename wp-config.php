<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smarta_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}%[SKR=eaxi rw]&<$f)ERVkS=Ol)xgXuj|H10Y)@{{ uj1NmBdHtLRwTvgqp1y8' );
define( 'SECURE_AUTH_KEY',  '%NqEnR1vmd&K_?9Hj0 wdk6::9x;{[O=}xEok2_Ot$PWn#`ZSsYoP9$EC:;=g+*3' );
define( 'LOGGED_IN_KEY',    '?!EVlmPUKR8-pe]l +rKIz2R#; uktK:P.V{U4Ar=w:~:jH;:MiP^dU~hc),^4:a' );
define( 'NONCE_KEY',        'FIjI-)wrq-g.t[VrV|28G3<3L!g}deUh?&kCz7#>is*:Qcb%_zw=DgvKA!;Q{cpN' );
define( 'AUTH_SALT',        ':{->_:im3MK+N8x~g DoR$?*|DZYZFI^)zDQ){eXpd12YOr=OT9Kx]Lz=hZtWwqc' );
define( 'SECURE_AUTH_SALT', 'eaJZY}GP_Bh_fA2VFXYLFu?mT>te7)<^?EQHQsXXCPD`Er9oL@Qpbve@?`p%GYP#' );
define( 'LOGGED_IN_SALT',   ' 8+@9VH l8ZiOWL(R0WxuZ[wK?Yy}r>7Q3R2t`nCjfj!Sj*mOYQ--qw<]hn(HJm$' );
define( 'NONCE_SALT',       'gXrOyWLVV(iB`Tx4+=>)QKq=%^7%f:3t;rq}C%To`ku`ql%PnDl33XU[I1+wsQC_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
