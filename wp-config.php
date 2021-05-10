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
define( 'DB_NAME', 'CWIA' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RFTmVQvIdpz3QCVmeLL2zdihS1T5vDQkYswIrPyHPC49V8oUDiOvjKR0N3w6FmGm' );
define( 'SECURE_AUTH_KEY',  'SRBmXFqE4qQirDOeUPzlk5EQetObwAh0PBBM44fa9lIfg2xfE2Pj1aZvcoPewT9M' );
define( 'LOGGED_IN_KEY',    'H6gWBBikAvLYqljmSr5scFthA94PQjHCdPsJhFOTrWgW7krR3EXgfo1J99pDh7hr' );
define( 'NONCE_KEY',        'DMXKruGDgxRsHHvmdieGvT4hrcDcvF9gPvVfI6VZKBnlbWXQfP2EdJ62ObQp5tAY' );
define( 'AUTH_SALT',        'PXJaSbEPquuhV2OYBNmd9ZVYOueNfPzqaydoHXNa5taT2qnUTEVjojluH9Ri4lm0' );
define( 'SECURE_AUTH_SALT', '1j0wUfMOwMJwn9SXwTXoCcdP1E5OyNkS69j3hSteo1rSs0UQACauFxWClDgomvKI' );
define( 'LOGGED_IN_SALT',   'qijr9tFu4k8wZZOW5fXxhpdwxU9rtnr8jz2N3kGgKnTqdZrJNoCtdF2zWBCO9rej' );
define( 'NONCE_SALT',       'T7NqKmnnEwT9m5Yy41w36uO5eiZFQad6XvX6bI6p68RxnARKW1HVG0OTN1A2C77w' );

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
