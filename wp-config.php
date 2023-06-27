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
define( 'DB_NAME', 'u153954202_iphtech' );

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
define( 'AUTH_KEY',         'o`6e`HDHbhd.XV`e+j]N+`0_ax.~3<@xvF+CjV_Wd~P],-B}#P,x(#1A{]m6{Epj' );
define( 'SECURE_AUTH_KEY',  'o9K|OlU?:Ya;K9/+oh0<NG:apJO2]x{y^,|Z`qWq`[2B>zuwpjLMr>p3<t `e4FY' );
define( 'LOGGED_IN_KEY',    'CE6)bYF6TnO=yL4XtGGwDXA{~<)M`W{n7EN!3<|m84AgZ~=VJuPI0S7m)]/)o7^C' );
define( 'NONCE_KEY',        't<<ZN(!S.xB:^>]IJ3it;{>Cr{]=XNI(oZZ,/ic @oDIEd/$R6vMJOQ9TCeUAr4r' );
define( 'AUTH_SALT',        'Z+d/}TeH6?v+|4tx[qz*X)t{z}qtDRx5r]p*&fS`cjE*crbM^UpX9z%]nY%eE)t}' );
define( 'SECURE_AUTH_SALT', 'Mm6BKbr6ygeLOzv~pyris7}{%!i@/Pl!YlmX 18;I[^L05bYGLW<4<{1,VG5zr3_' );
define( 'LOGGED_IN_SALT',   'J`3J>I-@pVbv<3,Xf[)cq[c{D_4D-}4~7-t5VoEBYCNvnLPEQgJgxMCJzT$Q$@tO' );
define( 'NONCE_SALT',       ']r^e(BwM.]SPC!z=-Q!*_o|$/TJY9/|&5vAUQY n[c&>SvvMO/A=OAgMGP(0*TjT' );

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
