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
define( 'DB_NAME', 'db_liceo1' );

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
define( 'AUTH_KEY',         '_vv_KUidZn[(Zy:{clKX.z/7OZ=QAaVIv8k^kO8`O|[`*t=Ze(%+t,V$4XtDA`#}' );
define( 'SECURE_AUTH_KEY',  'W+#g7medMqnieZZaP$QO$EMocu{JG,k!6-;DX-#PA_|PWrm6y[R:#&c4VsKsT]w(' );
define( 'LOGGED_IN_KEY',    '6NM z${`[7,LzAgTh~D$.qXybPh#5TY6cpMsqM-$qwV^iSi=:|?X-B0`U#l;pX6{' );
define( 'NONCE_KEY',        '/G&Hi_eSpi{b,NU``iS6e%@jUSy?Rt96.`JL#i#j;*}V]E+f..&d<Oe[%+%Zhbs_' );
define( 'AUTH_SALT',        'bQueQBuRvIoeKHrEYQMB,lm|DYwksB=|$;F/Zg6h7MAZv[0q>4$!u[*#L=XATqUX' );
define( 'SECURE_AUTH_SALT', '=_s59,-#sLA5l)^4c@VdsVe]fLi@2sV?6[.%?+WFd;XTO@P}A(i1,z^Hmy@`y1h%' );
define( 'LOGGED_IN_SALT',   '/=$Y}gk9@gn@rpew$J1M4G6@Wv$2R;c(I#9AABAk<=~?3H5(eWrPe/*;l`D]j?A>' );
define( 'NONCE_SALT',       ']1OB?Xa+8fN)s:Q6WrGtj+`nZ&]u4Q;%7msJ4o1,SOmZ@P9g=`@|Hiw(uq7hy9>1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'glwi24_';

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
