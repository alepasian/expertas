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
define('DB_NAME', 'expertas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's0Cg0nuJn8Le2RnupZKV7rwIOH4aHxc0gOXHHsqdIGLKoHWKXrEdV4kxpO0y9k4k');
define('SECURE_AUTH_KEY',  'VpZW7gzh9gASNNG8df9P1yPxaRltKazHUWZPnOLSFpFIcy7hOTGc20vieDAGshfQ');
define('LOGGED_IN_KEY',    'PhEfleogUKhG2IiCeaDWYEAxelKS5SxgnJdMSbxHs6Lar0uTB0LcSp1QxFuhQjBZ');
define('NONCE_KEY',        'V27jMLwraFEcbInAQtUD6MLWqPvq4DYen82LjLAFcuAMl81UEqYEQx24drrUofSR');
define('AUTH_SALT',        'BISoN6PA9i6sSeEdQvyRDWg1ipM4WmNyEGRpbwnnax6htu5blYd2kbUm1dtCX0ub');
define('SECURE_AUTH_SALT', 'M5RtACY5tQoqbmpsT6LSpR9UcW0OzSgfWQDquW6xEvRzNkbLTnKpfG5NBBO7LeMm');
define('LOGGED_IN_SALT',   'eECA0l0qlsvkPd3dZbDrolNSQmAWRCXQ6YAAvmCI1PIPSmMDn6cCWY3M2PgkYhYV');
define('NONCE_SALT',       'OQjM2rTcXmJWRz25eVsMKAF4hquphLmg6IUelGP8KiFtgFcz2iIrkuE5611mKpAY');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mvx8_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
