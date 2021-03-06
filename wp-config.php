<?php
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
define( 'DB_NAME', 'asspsd' );

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
define( 'AUTH_KEY',         'V6|oukne6H~wSE7[?l)nm%K7.=@t&i@#j| M/9m8UO7Kl.DyY?nt?0Rgwe/<~9n_' );
define( 'SECURE_AUTH_KEY',  '%loK<pqG%),ZJa#vy[%#XjsP)%YN4?$&0c+,l4<*(()96MAnH-A.Tq({<VtIl2Fl' );
define( 'LOGGED_IN_KEY',    'F@@9MofrIEzJE}c.^KIP&e>n8:iZ[]sB9x+]/K?Z0>9SIi:P3r%mpA4iCg;1+#T<' );
define( 'NONCE_KEY',        'H@z9fR:hF]%B;X2|+ 1):/|Ftxp0c*L2bic,bbA c-6G)7BqDee T@S,o#bE}lE?' );
define( 'AUTH_SALT',        'O7TwAwx<J}|^@LyNW!V&D${3Y?1ZRwI*3J [EV5o81)$(IB|/?nly<PgB`t(@CS?' );
define( 'SECURE_AUTH_SALT', '&V)yG`rj7Gf7~G~j>v%fc+hAl}TE&f:q$V%qi`f7/5D5{D[ZGN57x]IzYJ j/wJ*' );
define( 'LOGGED_IN_SALT',   '4jF1?PB</3f0%}v*8bzg11Z5jOoz}3VA{J$auPZDFrQQ3gZOUIlL5r+c]p(W0S^7' );
define( 'NONCE_SALT',       'O,}6~&bW,`PvV]nSIB#l:NGjl5/^51d!Bx+I8=w;+c(dXi&}d/CQj%*bWxz!?<Qd' );

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
