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
define( 'DB_NAME', 'him_anksha' );

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
define( 'AUTH_KEY',         '1#<rE[@xk@I2mT!^_f-SC]cTT7#90=}|$N<@~=hqLID?R=f*7XX~EP]:e|[,#|!g' );
define( 'SECURE_AUTH_KEY',  'wuX0}TirPp[B]mlB$Bdfiy#:q,.?$Q!2zGkw9m(0W)H<UT<W,`w-)CYpC=@y{uU[' );
define( 'LOGGED_IN_KEY',    'clV-UPRZ.d_pacZFc}L!PKTv0G0?.v--L<F*d2>,!M:.^dW=zr5jDF{row_O/Fds' );
define( 'NONCE_KEY',        'Rkm8g6zce@Sgn[2cPHbP){%ok#n>L$;*96/ESU`@=!z|0YqjeE@`a%Gf.5?i!:P_' );
define( 'AUTH_SALT',        '?e~@(1P.qU?d19.0InO_0#-ad DL+]@t(6QNWv~7i}]miS|ouj2:-mz+#*0,DyF)' );
define( 'SECURE_AUTH_SALT', 'T#N;92*-Vy~~`5!Yo/C`0N+uiZM#(ygQ0b*x@CFl(~t@;R~iB[]eYIkG&-,=Q=N+' );
define( 'LOGGED_IN_SALT',   '~vb2R^U-BV9=#t.l>9VW^B4~vV449#I5WiVbDLJeusv}Dag*j_#B`#QXJqqn =&c' );
define( 'NONCE_SALT',       'J{siSl/z/O^OG8g~0#givyGzx-JU|fIzk)+tZCl+iOn.e 9ErNxr#+F9&mSh{[dK' );

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
