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
define('AUTH_KEY',         'ppMpyDni3kxq0NpdBm9SkoYxj33VOHBsUM4FUtYGciSGd5YQNySdylwh0+NPQEm057O+e9DT7yqodzqKRbPvyw==');
define('SECURE_AUTH_KEY',  'oawSDfuKfneOQoKw30/lVEqzkRnfEDu6q8QQCMK+Fuf6voeNiI89zGqmlUZ+6DBp1JE7hXrDXLkFjbcvZj4PnA==');
define('LOGGED_IN_KEY',    '3kaYjpMh2gCB3aRMnU4CNZ/0QBPz07vJSfrz+U13v032Gr7lWbogVLEbZtw1rjZ6i9IMwTai7b1BqPLfT67C0g==');
define('NONCE_KEY',        'HViQGe4OsIQ7p8IPYvw/6pvp4j5AN9p2p0warG4Lnri2qELnJQ4rl4WkyGWxIYgxTE5uTylZMTSILe5nBQfVag==');
define('AUTH_SALT',        'xqsdbVy/L+yOkrJmxKKSb91i6sIZgBMPorWTLzyWRqqwJkfE8G//wM+e0//vpBcT0Bb6iIqOIAxGy4y3mxT0SA==');
define('SECURE_AUTH_SALT', 'j77gtbPxx0MXqlUdjp2t8hmhsMoSovvHIqd6ejJtgJQtkzYo+lzYaQ52I27NWOWSjDGhfUorXx/mE4mYE2maTg==');
define('LOGGED_IN_SALT',   'cSfUO6MU+NjYJyIzD47Bl4OThT/abXc1RWAfBhpwzS9tmFYFwJrqTkzfdFoM3Tm749ke+V8PwMQcRphM2Br/7Q==');
define('NONCE_SALT',       'bt8iPuM8CGEviu87IJXNJDm2J0VTBxjczH8knGDdVvhW8JsUFnlp097mV3tfVhQgfhj/LWeaM3vbCqVRlEIYFw==');

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
