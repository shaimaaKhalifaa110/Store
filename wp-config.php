<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'store_one' );

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
define( 'AUTH_KEY',         '^Ce#zlkFr@S<3whXG^[4o.0<dDUfmN3SOv{8~ujfAj@{dw`qx[T&I@(RPRa<Zh&G' );
define( 'SECURE_AUTH_KEY',  'Leu9VGU]m<G|R%cDL&dnDht7dO8`#J^C.4[/G{7[|o/;C]K3<-EN2 E+f@<9scZL' );
define( 'LOGGED_IN_KEY',    '=#`zwn3J%J/_Fkxux@a]?%MCt3 A3MB 6X76i>N$B=(Y?l< 33O@CQd)Xy2N?v [' );
define( 'NONCE_KEY',        '+M|[(WD5+`=Hbo={UskcxZJb`5+uK/|&rxX2ii!W@b3F=08dJh15XQ]|}=,[=Rt_' );
define( 'AUTH_SALT',        'Jd{#,!IAI24I,3)wa{~;c>z8Le]o{50Kw;1r!)(`N~P6cLliR {[F)Nhb>s`b=Jj' );
define( 'SECURE_AUTH_SALT', ';s (TKB_CA=(;5z/;k8Y(j^5~R.jS!]R0A.x9A,d933GcJzfK(@;a!+eHMD<*u:7' );
define( 'LOGGED_IN_SALT',   'is56CiL6]9StaU9Z@6nx@~AF([;1_`jJ57fs(LLkJ;52v-KF~&;#x0lbf/D lB_F' );
define( 'NONCE_SALT',       '3Zha+}s*0GroT/b@Yo-8pW[2;,@-ZU-CWMmK,BD3o-j{%NGuqCI 04l:SE QEF^l' );

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
