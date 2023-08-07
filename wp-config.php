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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ':tO0>Wx,![#6ed9XojHM 9xP)^J@cg<i>Je,< m ,R  aH.k-Hf1zzkX`KRy6~AE' );
define( 'SECURE_AUTH_KEY',  '-6<]{%vvBmm6-0jM$z./;Vfv=Y|Ll^cpmNxF%&Wag3J$p&.1zp|}kZoTmy2e&Vxe' );
define( 'LOGGED_IN_KEY',    'lehpP$]HFUiUy*mKgcBdWQf@X)s_U$rM2Swa]dfJ~#,44O_@tq0!JLa#:q%y6J96' );
define( 'NONCE_KEY',        ']Z^|] (syr-DF_.Q i_;)t?PAM8cP*!xl!Bty(Er{HcM!8WR*0J)$3^FgC:I{]x@' );
define( 'AUTH_SALT',        'pl%{0kdQJo&~bN;Cps4uuTnDZpID*_HvC,Kz%=#I=lL+e#T+VW6V*pdCa7Q<YpO!' );
define( 'SECURE_AUTH_SALT', '-FN@R~TcJ37Q<0V`}nVY7_7e>1K7Ne[BM:~wTB=h&O>bt4{96O6auO<C4@w=u$5D' );
define( 'LOGGED_IN_SALT',   'BJ{f=6+s[lX&M1*vivk<$xO2{p9wA*G`HL*XLsDgh=3dxxXQW?oaAY<e)B;Sj+]F' );
define( 'NONCE_SALT',       'ZuvBiEY(s9gK_#u(QF&4F1]g &S/69-HF@J<<&Z(i$r;M{Hp^fh^rt!(no(g)@:#' );

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
