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
define( 'DB_NAME', 'task' );

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
define( 'AUTH_KEY',         'oX@E#.HR$GLmF)*i2D2`KE<cuBDsND3%an_ou3.%BpPw=]*(vgx~:&4znK|^i[|K' );
define( 'SECURE_AUTH_KEY',  '~je+tW!kE{]C3E]r&,DuXHg}%O1SowBhH(I(B4,_c&=_b5Nf{I8O}Pg4qR{9b2~8' );
define( 'LOGGED_IN_KEY',    '6$ Hw^xaU~ ^,8UcnsBK}/bF}5!r6#O8L%,dCJiuDkq-KV>P%DM#Qm.POowZ;?Mc' );
define( 'NONCE_KEY',        ';F)otisAn5T3jo]|zeNc{}.)]aJCk.]VfuxaX4Q{>>8]Ze<&yR?q#]ffCN_~R8`8' );
define( 'AUTH_SALT',        'G|iq|>.`j|d]`}9!m<@O%]Hgz~-J1XSwd*2m0OZ|_#nHuv= M]9=GrKKN[Fm{7A4' );
define( 'SECURE_AUTH_SALT', 'G-?h3PjD=9sg0j[h$QjgYlfToKG@PJ?ds|cf1Ky96aO#BmQvz5a1r C:#{v6{)IB' );
define( 'LOGGED_IN_SALT',   'EslG2ZpGBW{(x2=pR) A3vN0 I+pO4&(pDjM:.xt%`Z|2<F+&/7![:&5]AZThHmX' );
define( 'NONCE_SALT',       ' xk9Pr(K_:UZotP5$`V|J>nH^|~_irz6)<:kjHX,2gcvaQhILfuesT{*-GG^@7jg' );

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
