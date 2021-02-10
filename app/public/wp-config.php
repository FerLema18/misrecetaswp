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
define('AUTH_KEY',         'hIbibi8B5wQLg52W7NTAIoUB3FcgvHXBuYsagCt8IB7PzKWWWpSokH8uAZCGtZxqzxrinrycdjfefZQLLnG7Ig==');
define('SECURE_AUTH_KEY',  'Z6jtCeDv7wf56DGRebnS9QlFkeb/xUH0TNWBrjnp7/H7ZgAccJZq3LQCyIhO8TdtqSHMQX6xO0IcRucItV12BQ==');
define('LOGGED_IN_KEY',    'WMeuVTB7TKA1uRL2AkP1yaVmtssbIkGqy/xylUpvSKkEXsQXFtup4akzlNL1z3olz9AowN2iZSiwadDu094sLA==');
define('NONCE_KEY',        'Fy4eEdBtDZysKpgb9BYmwDba9vCU88iYST9KPyuF7wKem9hmevcQlqj2CjlnWynHrtsiL+t9og4LqFho7BHCaw==');
define('AUTH_SALT',        '9jDVS+r2lIB7b1GbtLCaBLgPWOs6U9DQCINd2ZYRTuYoSba3fYAPw2CFC4v6iXAZQ5/NQH/1VwSafFoVM+SUSw==');
define('SECURE_AUTH_SALT', '4Hl7OWTgcaKGwLCxYybBIgdujhhwn5jUYOeM+UeaQgyUjhLLsq/vPV6EjmLvp7Y+zOdV/vBP9x+5NQN92SPqsg==');
define('LOGGED_IN_SALT',   'Wcaj+ny6sHFtQUxB6Jzyk0pmj+A419o2ZeASw2J/8zWfBxjJNknphLyFZ/DgNBFSvRv4l0hTvftD4V/C0XmPvQ==');
define('NONCE_SALT',       'lC4f4wC0fNn/2t7TEVPQ2iuO2aOQKrHpYIkiebdUgUtcbppgFnruZM6hyuKgk7+OQtJf96+UO+arnbfQ8ojVZw==');

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
