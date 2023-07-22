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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'a9rsg8An5Wt9jMJziP346eHz8bL6ta32rAWKfaIoLR2TjyYY/Oxs7yg8Zd7uIVcJsGCEuaqPu/AKJhtf6Y69pQ==');
define('SECURE_AUTH_KEY',  'ffsloezLkw5y37GGh1OF77Be+0/uX/3WICzvo8ZhuXw05+B08Bzh+QBg+2THxw/Vztv5AJaLYh0uVykeq/Br9Q==');
define('LOGGED_IN_KEY',    'M/KaMZyHWhsfgBvjQEu/0aBdJjnp+ij/Z77OpLXG+/zJOWtkrEGonmIWSGYYuPF5ffOWyKY2N7AFOHnzg0S8zA==');
define('NONCE_KEY',        'OFwG2q2HMjrpqq/Wvs9dznaVyU1ABzWVC9J99E36Rb1iEGu3+2OVehTGaQ/Mt3zLb+deTUK8XceahhlbGf+D9A==');
define('AUTH_SALT',        'CDvNmZYR/E+T8rdXiwjy09MXiyOY0Iu7+1AvL1mMlqybCXXhqiEGzbnEPI9efnAPzdBqeKpX/9YmWuK1e6bR/A==');
define('SECURE_AUTH_SALT', 'NLXD5xluLKW+UhGc8Bya9QWLJ42BSbXO6sh5DKXwe5am+50gYMirFOZWAMnzEPF9ouOC4YfaeYrBiE5PPOK4ug==');
define('LOGGED_IN_SALT',   '69XXU7NoyKOqIXYs4x5jExC7zMef16JonsriQpL34oHUVp2b6NtXNVzad6vr69dHPbp4YvluUWgwwq3VAnPVYA==');
define('NONCE_SALT',       'Bb9R1iXqel/sGmyZsNkwJ+W3KuQNdHd+Zki98/OaruSf8XkTdY9kGqsAPYYAIUvstPUNvl1nBgNiNNxInIIzSw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_msj6te_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
