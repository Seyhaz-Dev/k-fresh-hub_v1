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
define( 'DB_NAME', 'kfreshhub' );

/** Database username */
define( 'DB_USER', 'semseyhaz' );

/** Database password */
define( 'DB_PASSWORD', 'Raksa@2024' );

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
define( 'AUTH_KEY',         'o5u n[Mh/p!@jN4U!=,(X(hHTY_c]w^r_BS2b Ax]Zb84i?(h8dP>sG/fKCING4D' );
define( 'SECURE_AUTH_KEY',  '??oaT?a=2- R:fM@IJ1^N1SPMs,Q{Drj@>tIO(p9@xGegOgH{ H/iH-ToNz}Ft1~' );
define( 'LOGGED_IN_KEY',    'P1TRwu$jn.|yjm6/62r<c@1R~4]7C8+BK MOZmtk5 <FG]j8#5v~JTfZi?@nEsfA' );
define( 'NONCE_KEY',        'A8{5kFW,;j-=Xwd,@tVlLOOiwa1%|@UYq1|M%kiC%5pO14#wBG3F|73{Fp,4C.uW' );
define( 'AUTH_SALT',        'rX:*S[(K%u/d&U<k [!$Fs)S}h+kJUQ`9:&Ty]BigD u;}^^lwgMlyLdf`by ]RJ' );
define( 'SECURE_AUTH_SALT', 'K)y21;nr?FP%CU,@!40XZ>1Uj~h3z*h0:>eIg+qL6e(wy3(+$%IU(C?M(DUApf{<' );
define( 'LOGGED_IN_SALT',   '3Xy3}rz&kA!MN?ku(1umw7>j[SgO[U4(TPaH73M5k,0;[l2S[BGaw!eE1BwZ<#~_' );
define( 'NONCE_SALT',       '=_|cG{Ayo5JYN#;j;`+zv=t`6<DFs k9hS+V=S?P4ae~t@8!xJy+]|qke@!d9~/S' );

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
