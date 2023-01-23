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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kn_blog' );

/** Database username */
define( 'DB_USER', 'kn_blog' );

/** Database password */
define( 'DB_PASSWORD', '32RReZr2' );

/** Database hostname */
define( 'DB_HOST', 'db_wp' );

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
define( 'AUTH_KEY',         'Jv#Jd?R5.uLp7NPUZ]R9@]7-B@.%*k`~I5JI4.#~7-a$o>2I`.5`XfY8{]yI5@No' );
define( 'SECURE_AUTH_KEY',  'N2w`[g1-7(`@VnyF zkMJk0r9}TsS.S^;NFg@:JpZqnVw|QVk!(iS9970#){|O Q' );
define( 'LOGGED_IN_KEY',    ',}X5B@KfxpVZuUhQa1{lf3RWI;8J5+MO+)K{AxOt40H7j80#qb$L<X_ _:W/1eD5' );
define( 'NONCE_KEY',        ';8~b$m8?^O#%vzmXB|;>`Ot[{-.An~Ed.}x?R^3^~HK>-`d/jezjmm)F8!Fn};.k' );
define( 'AUTH_SALT',        '0iWBq*:kPxW=6&3Z17Y*adS<G#SEQcb{mwCw_9`pB9:WxP% peOxLy~p-k`-I&Kr' );
define( 'SECURE_AUTH_SALT', '-9MV)W,qD-xxs)9#2L7f/!4p2?l{YVKst*BoAwrvN_?s/EaldS<+=V{nSDa,1wL*' );
define( 'LOGGED_IN_SALT',   'rWtKo!$omN!C|9Z|BSxd2w:P4C|bfr3s[)}r?{rd]nj /}nExEDDrB0N/f7jfY-^' );
define( 'NONCE_SALT',       'ki#d~{Kz)cXS+0{.4Tq(/LX[IWLC%@>b}msV9$zkQ|p{=oeYbdX.W47w^8H40]jN' );

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
