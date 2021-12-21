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
define( 'DB_NAME', 'studio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'kKbqHj154KVsxgwpujOEWftEDlj4WiVFse4oiQ3u9YA0O6xgQbiTb0rB0Pi2lXJ5' );
define( 'SECURE_AUTH_KEY',  'P58BQxxeElZzbbwPaWNWiOH1WR3Gua8okLAU0hgcOJosg1Im82xjKx9jg2Fjxbqr' );
define( 'LOGGED_IN_KEY',    'GNfnZOcabObKqJQMPrIOIU0eUEaKXZWCXB466XCvrkLlnBn3DSOe5F4WsyEN2Xnf' );
define( 'NONCE_KEY',        'Cb4iWoyxPAa9cJEZoKJrqJNadIQWld8iopVjPum45EbnkKNY2qn6dwlg0XSQSa8j' );
define( 'AUTH_SALT',        'rZYvbCpNToQBn4MnLNHik2ZLlDemmRzoaG0W56avx3H9lEvRB4u8h6vQonBYJWXh' );
define( 'SECURE_AUTH_SALT', 'Wd4bNqYu5YLzIXPSBogUiExkXp1WTL3HC0EqCq3v4VaS9BBhRxd9tg8SNTkG1TUs' );
define( 'LOGGED_IN_SALT',   'uDLfYedk5S3OfkPALPE6f181gPjcQybG786sCHtBFXk46zvMZT1iGM0Xx78gCq1Y' );
define( 'NONCE_SALT',       'LHfc5DOJ1SUO0IFCHCtCgp5KKLyiIu4xjNIRlCvlpE0EWBBRHYrA3d4wM7ZiZJm4' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
