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
define( 'DB_NAME', 'inohara' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'G[n20xKuuZaY(]AX!$Yd19<&#0A+Anb4QSg/*Y-TxGxY_O@GbVy?17T3B^ s~gt<' );
define( 'SECURE_AUTH_KEY',  '{V+#=|mn>$F?KM$`m_LuH$RGUKl%ZD-[6QTAvGKO#+3y=Q!kTNetOIO)).hYhU7 ' );
define( 'LOGGED_IN_KEY',    'XwYD@k]hgXRdB^GA7Pk&oRe6BALj0i];szF?jx!F[YB$cH~@=w)2EB5wt(VYp;UL' );
define( 'NONCE_KEY',        'P?Ns~HmAe=0|cl`FQup4sb.?#/;ez@!q~$;=Zq;<pf7((ceO,83DsQC)MnJnPeu4' );
define( 'AUTH_SALT',        'H/{+BPdG*.h_DD=dsn9qAEbjenxZbzqR%N{|0wXaE_DF9yB-u]`u?3pTy87MZ2(/' );
define( 'SECURE_AUTH_SALT', 'DW0EH(<B[tQGUO2QICdRz1olS(P}4OYTas{T-zNnhr}$O=l03CM>;(mF M M6}=z' );
define( 'LOGGED_IN_SALT',   'M(WcUn[BsX1sJyP@g,grLa*?p5#_6t??Q ww75XbSg6<ssDEk>{LV=@>V*JksY?I' );
define( 'NONCE_SALT',       'zHbK7G.ss9?o6d4FwX^E= PnHkHd-Q)G7P9FnbL^R~o{Tx|]$A*/2z!^pXwzd%{A' );

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
