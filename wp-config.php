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
define( 'DB_NAME', 'clockdocDB0wqtk');

/** MySQL database username */
define( 'DB_USER', 'clockdocDB0wqtk');

/** MySQL database password */
define( 'DB_PASSWORD', '1zcUOILzrl');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '4-!~|1:84COKVR084GCNKVdZkhsoGOKVSdZlsp-w_~dlhso-w~[|1:85p-w_~#1:9');
define( 'SECURE_AUTH_KEY', 'cjv@z,^fnjvr$z^}>30B40B8JFRYVgcoksRNYUgckvr@z|}>gcokw@z|!}[0C8@z!');
define( 'LOGGED_IN_KEY', 'PXi63EAMTPbXjfqyuTPbifqmyu*<.{jfnyu^$<,{AMITQbX{73EBMIUQbYjfnMI');
define( 'NONCE_KEY', 'Wdaltp-w_~#ealitpx_~]#295-x_~]1;95HOLWS]#296HDPLWTamiHDPLSealiqx.');
define( 'AUTH_SALT', 'cows@z|}[40vs@|!}>408JFRN|![40C8KGRZVhdC8JRNZVgdls~-|!:[okws-|!:[');
define( 'SECURE_AUTH_SALT', 'ITbXjfqMITPXjfqnyu^<ITQ>,{3EBMIUQYjfEBMIQbXjfrny^$UQcYjrnzv^>,0}');
define( 'LOGGED_IN_SALT', '2;p-x_~]1;9HDPLWTea+xPLXTamitq+x*]<mit+x.*]#2A6HD+x.{<2;A6IPeamiu');
define( 'NONCE_SALT', 'IP;]6EALHTPaieqmEAITPbXifmyu*$bXeqmyu*<.{62qyu^$<.73EAMI<j73EAM');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
