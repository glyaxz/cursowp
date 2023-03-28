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
define( 'DB_NAME', 'elgno_wp_db' );

/** Database username */
define( 'DB_USER', 'elgni_usr_db' );

/** Database password */
define( 'DB_PASSWORD', 'X!ww6nMFosvUA' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'f7rv8I0gr7rVmLTNnzHcko6gRFpzBR6JGsA3xkMvWzE8QTa6qlxnj4wS84kPxq7D' );
define( 'SECURE_AUTH_KEY',  'L4R5HtBLlY2vp69PkQ45o8i2LpVxtMGE26PUZ1rXLg0ur7GewTNwKwdzkTRxuCy7' );
define( 'LOGGED_IN_KEY',    'uNF84KWJCrmgQW2erWgwvXCMP7Tzw7VEg7upegsfBthRXGldboAZzxIKgMKMfSHY' );
define( 'NONCE_KEY',        'tDguRv3EB0gINxiFKic76POYTw9HGAafAuhwYYPEn6VvtTXjlvO5wQGqigK5xLzL' );
define( 'AUTH_SALT',        'Um5FSgOZGIu4EqBtnJJobQZD8B7Z0B5wSBARZIV17DHsU7Hoza24XZX5aqeU0nTS' );
define( 'SECURE_AUTH_SALT', '6aJs5UZb1nK5dlhEnwZcEXIYcQ3A3ijtGTA574t9UpsyVUzdmn0Ymt4RGvXWyC6r' );
define( 'LOGGED_IN_SALT',   '0WqMiUDZr4ggPAMZB5S4ZuQlqiDV4Sc32cscmwf2CFZElWNQkRzgRg5gBt1jWyK2' );
define( 'NONCE_SALT',       'ZmOmZFqBN9scpjbZgLcuBW1l9qNGoz4kgyoddmvddZdsw0QNJcH2OUdQXzTRxim6' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
