<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'site3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '2391996' );

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
define( 'AUTH_KEY',         '&IX8%S=e.]IH)%fQ(SOW{$_Oxg&_Tg-RfO=zQ{I13z/dN^9],9QiD#}6>notO(;g' );
define( 'SECURE_AUTH_KEY',  ')7AOL&E1ad!1tA)=?{a?Xi@0l0P+#G!u~^cE-2G_{/wDhZ^h8lkSSWn`e=IaJQiR' );
define( 'LOGGED_IN_KEY',    'ZgTy8Qp/[hORjSmK~59Yq2x>{`aJEELvIN14ce+frl,~2W>~,AyTua[XTZ>:FFx$' );
define( 'NONCE_KEY',        'R3vbGG2Xqqn12O[lO4woF.he-oLPTh*qe)GRbk*GolJ+*dHE7:!Zno!u()tS/*A;' );
define( 'AUTH_SALT',        'noOX(w[*9x=TzV;lFZsDm&l9TH8;$|Zk2<poG5Ye18NH<7dWKf5r7=BCoJg@x:.I' );
define( 'SECURE_AUTH_SALT', '0e)c52|[Pm9$CLK WAZB}w9* CN*c|nd<R-VfvL7kgUUywv0xFt@ncKI,{4qV&M-' );
define( 'LOGGED_IN_SALT',   '*M@s29->Ikdo%,q.5sbA;8wQ0SGbc-F[4+*m:?K6Q8w=Gz[djGY~ C0q<e#!(QT9' );
define( 'NONCE_SALT',       'TIV;Azop[r82!m!SIEz:~1=,_Xgqu -VfWVY0!_yLZx#]WbpUyVW3&J?A*v]wYoq' );

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
