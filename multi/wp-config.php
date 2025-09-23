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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'multi' );

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
define( 'AUTH_KEY',         '`R=-%8Ce$ sT5>?I7#:{M,^FAq^@v`k%f-r#@J&C*^Q>;{%8,`+x=P3l~?>Jsnv;' );
define( 'SECURE_AUTH_KEY',  't|% )f0D9PWE*uaydZ]qAnkBxpFr9b2?`K$i0;Mg=-XdD-,9^z<6hiIkXbifA ^x' );
define( 'LOGGED_IN_KEY',    'L4x&fH|uiXY5>yxg;KYPW&x1K{A37CXJ9*a:Ar^>5[v06@rFTTXRXyL*s}H&1F37' );
define( 'NONCE_KEY',        'Ng!SQbkIz_pVW%k~NvoM<eAYAAbs9TMo$s.1G;93>Plx5)xzCk!AcJ&,V{}2sLXJ' );
define( 'AUTH_SALT',        'j@v<-oYQNcX0UdE?!`g#EYK:A5<Q(F5j(g3y,k8n&3Np;T?!<^*O5k<YE.~!f*He' );
define( 'SECURE_AUTH_SALT', 'Wbm6z)OA{Y6U.pr`cSJ%Wj~]mGKJEi~|NU?++6XdDFPYyg/cWE$,G)nSC]ozVCW$' );
define( 'LOGGED_IN_SALT',   'S9$Vc~i._5Do)u]6W24jV?5B|&fZHtkc3WPtOs2p^w5M9.|tB&hz?/rEL:--jqHm' );
define( 'NONCE_SALT',       ')C.)m;sY%.(:MYNVp8X^fg?zP1,DexS9hpp}T*]N`bnrB(p3/d25T?2YIiJ]/7&r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
