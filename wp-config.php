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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j0XJlM0N2qgDmXFyiESufc5b+H84tGv59FyTlh4tgPtASWxiNYjqF7liwArZrS5Ro4KfuN1gVVKEovbtYjijmg==');
define('SECURE_AUTH_KEY',  'iZ2xd3IOrEYwmuhx8MPpxdOp374Q7nrY/rTiETO5vqvgV3yp6ZPMBg/WlxaithGCsD+bkGqQyRjdmbEv6Bn3fg==');
define('LOGGED_IN_KEY',    'WKN90kgek4uquJ5gqKMBeoN8HAqFoYMtkX2pW6sXH2g5u7OS04ogsHU3SSUOVjYDI4e5V+MkvF2ZHC/SQSMAGA==');
define('NONCE_KEY',        'eqRDggq8k4iEpwvqdF2Sm3MIP+4eILxDTKqNDQLZUAf7f2+TynIGnPa+s6WGKBFCJ1xSAOohbP3HFXjCCb9pIw==');
define('AUTH_SALT',        '/WvKcYJ0frHSFQjMSupPZ3mXy7CU/+M5OW3mZanj2OaMztajTiKTtAL64Q4q1W+cKmP4msluf5YFUqdBk/BO3A==');
define('SECURE_AUTH_SALT', '8XQuB6Rdm6whecyLvXQLvuHI3bdOC5cJbm3HQ6IGqdaBu+NTZQBmHtjy86spi0SF7iu+i7EH+/tT2yQbJ3/Nyg==');
define('LOGGED_IN_SALT',   'Hhp4xTpxs+fwiuoKmooTk434Tk9He3Dlq37lEgcrMMtczeNoqStfa1XQkCrIIseAmvjp1tzWeTLMcEUI4jJsOQ==');
define('NONCE_SALT',       'qd1qRkfY8IAL/GW7J/jsW5mW+caMTp16q0ulqFZOAKRBTBZdluTDyXbupTJEMrZ7Yig0/jtj9NjhmNMKOz8BAg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
