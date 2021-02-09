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
define( 'DB_NAME', 'wp_myblog' );

/** MySQL database username */
define( 'DB_USER', 'wp_myblog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_myblog' );

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
define('AUTH_KEY',         'wt}wrdOY$6i>;Wg@::nm>._}b/:fHBm$@+;)mp1{@t&YzQhd7`g& OeT^JEZ-zlf');
define('SECURE_AUTH_KEY',  'GYqt1WCX`F]CyA§XyCwd.a<>yBz+6ocq{6qSk}PB@pn1.2p5D)61;i2;GRtk];-^');
define('LOGGED_IN_KEY',    'f19qy%.4M}R5Hvby@VJcO5m&[{§ P,~6XrSA@W1bi_iEJSz !d++57:nz@LBQ<0L');
define('NONCE_KEY',        '}|g).|]AMem(1EJxC=8;?5Pp!>}:@?I§b@}+YW}jv(9m J_Bd!Eq(!rJiS@MG1_q');
define('AUTH_SALT',        'Q=WWV}R@s6fQu;$?e}7uNm0uR1PL/!+I8,laZ(m=YvE<)l)W^Ya1_}QKpI4s^:D:');
define('SECURE_AUTH_SALT', 'I]>ARA{[1rXchpb`oV?}}3_%%Hg/u:$K<b.4cH4c%M5?|^Q>!k^Aj?T]8jE@o[gg');
define('LOGGED_IN_SALT',   'uqk1NHUevc8_o:7/YJoiboFaH`8eyDQyr@aiA+n}|Tf.-8<ZAO4wp6btAyZJa/nm');
define('NONCE_SALT',       '|Lg 9]0yXzE|M`$M;GjJzXC@Y=E]]O`+h(ZEx:$[x?(§y0Fds6PSn@sk}j@)(NH!');

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
