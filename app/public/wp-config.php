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
define('AUTH_KEY',         'VFIYi6O5GdYRJd2OhUGIIFRM8ncPhNNxBuRW7CeqPHbNVCC8PdGrjbGg+5zK1tYblmwz9Fpevp7zn3mw2iF0lw==');
define('SECURE_AUTH_KEY',  'fq0SgyyBDh7gA6/jcb3aTbIDrcVmY1MdpC5t62VpkWf4/boHrCD47m8YaactthJBFTyK73nrDx4cDClfZqQ3Dw==');
define('LOGGED_IN_KEY',    'MhhFee5a1ydli3338p0Ej1RXZE/ZK3kv8i1K5MvWnUr4L8nZM/f0YT4zCfkEeXdNSTAMgCdkm/qojdMPR3uYHA==');
define('NONCE_KEY',        '2S1IOKwyhelVo7Sn1eZhFSvSFPaYF7BmS4b+N9H04knC/nDKYGgQzt5MuLW7K1lTGEQ+/iERUrq5qbtrthF7gg==');
define('AUTH_SALT',        'tFncoRDxcX+NN59onO58rNY9MkWvf3Pku+GfF1MWRj7+HWHDP30ceKbV/W5GZYyCSXA8CwqoDeHxofUxX83qbw==');
define('SECURE_AUTH_SALT', 'per8KnntnfSjA1MN5j3HW7HjRgK88Y9m9z3ca3srZP7/soTER/gaavoZFaDl6XyYqOLiOlXHV9V8kKHc8rGjxg==');
define('LOGGED_IN_SALT',   'kDQTAxNQcMEVe9Bhcp6j+sm0yVdNO7ZZg8rc+IDtB5oSPFZ9kFNIKtA9Iu1LkXkzmTU190jgsUzkyg+OH/Z5jw==');
define('NONCE_SALT',       '4BqXTG6XsxORT4rydDOWL+vyrOA+r6qhQA7Mmfq+0vEX4H2fOnmOO7Chm38YQWcB0MLtvRPpYXYfGWHBmYzWZw==');

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
