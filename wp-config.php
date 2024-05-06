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
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         'XbRdb:xi1>2$1fYV[Qa+C*n!&09S9bvJQmV_KjS=`|-Dx~^@*+y$IUG;0Q*F,NU@' );
define( 'SECURE_AUTH_KEY',  '}5YCN=~`I<R#hX;*1v](E1m (Ac d ~?NF$%`X7&Ai}XS>Br6U*t~H;V#?~t6|N*' );
define( 'LOGGED_IN_KEY',    '+q*hS>y9d)^p2NAv:M?Me_y>B2&4CGfj+4%j+h|mFuVE^B|-Yqa(9]qifkXTK;AN' );
define( 'NONCE_KEY',        'fjLqJ/T}7/zJ/U2X:JuI?cd}zaiR)Zi|[:+#RkcPkpP)*vcW99B{fre?qKVj|$;c' );
define( 'AUTH_SALT',        'v!/iHXI-FU_6Bi#^<2G0kp+t9XBsgm1(&pAHqb(w5>2J}m/rdCp5VXv~X`Q4kIs:' );
define( 'SECURE_AUTH_SALT', '#XVbP-&}wtY),p4QX$vC)|J!*Mvr(?OryK/n9uqy-,f;vTNm4u1-D[dRMeW2VG-v' );
define( 'LOGGED_IN_SALT',   'zEv*S`@}5>Wa,^Jr_`V7r]E,;n.TG1*.xhhE:|JL:cem{R35<;v65c$0j7(rl1mp' );
define( 'NONCE_SALT',       'P?e,UNx|1.R|={PRl}!G@Wq7)HvO%fyu9..L+fK5v1/s|D+#s0g[F1rBDvv&g0X]' );

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
