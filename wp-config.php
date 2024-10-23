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
define( 'DB_NAME', 'oceans_arrae' );

/** Database username */
define( 'DB_USER', 'oceans_arrae' );

/** Database password */
define( 'DB_PASSWORD', '6p3y.g)6iS' );

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
define( 'AUTH_KEY',         'dxvlgzn4jay4x1cgvy0t3e1ud7uheu2qfsoh5fa5pyuwghdesuwugbulnwu9lif1' );
define( 'SECURE_AUTH_KEY',  't5rwz77wwtkx6g9qswbx2jncft5gtqbtztuebu6ju3sfrcrasxamaivhtb3vurqa' );
define( 'LOGGED_IN_KEY',    'go6bezaj8dbkziyumbyz4fbhda2drwbe9kdgeoyytnptwprgzmzywjeyf3zrtnws' );
define( 'NONCE_KEY',        'anfyfpzfej3vn0qdiphutogwuh1lsipkwi8cvzi8xatmraal34ovxv9kwuonteue' );
define( 'AUTH_SALT',        'edvjqdcptxujf3bcd7viryyc4qybtd5spwklqnqumnwbwdw6nxmxocsymxohpyps' );
define( 'SECURE_AUTH_SALT', 'kiby4outcigscbgnuxo6gi7kxigelfndxk0ujutie8fopzaqagqi2ep8tbfj6j5h' );
define( 'LOGGED_IN_SALT',   '47c8muqomg0cerpabnjhj2ilfy5c3fov7s4gsbkzd8xeowjnkykgw5k28swxbuut' );
define( 'NONCE_SALT',       'f00he9kcnmmcuwubsbllvzk0acgn6nxfrh8tby4mmz9dkxvqocjdcq0nu9xagqqy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxv_';

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
