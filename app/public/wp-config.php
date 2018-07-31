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

// ** MySQL settings ** //

if(file_exists(dirname(__FILE__) . '/local.php')){
	// Local DB Settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	//Live DB Settings - find in webhost
	define( 'DB_NAME', 'gregp659_universitydata' );
	define( 'DB_USER', 'gregp659_admin' );
	define( 'DB_PASSWORD', 'AdminPower1046r' );
	define( 'DB_HOST', 'localhost' );
}

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
define('AUTH_KEY',         'APFU60parpdNKL4/c4gDdsnNUJkP+m/3IKVFWX2qEObJDioTYK8mKGHJLRffLwFfdilI7MZV1NiMMRAIEDaq7w==');
define('SECURE_AUTH_KEY',  '9HzoSlV60vogEpiXenGKDX793Y0hbhyy1lNWOLcJZVJXYAl1+IywI/SRdCLNfzl6RdV4fcLBdu5MGMyohDlm8A==');
define('LOGGED_IN_KEY',    'j/PdTpXI/SSs2WGiTPJbdhqeEWPoaF8bMvgKycSW5dcQLWAVDoxNVrImC1NyjBLgxCgkyd6HhAh1kaA2xqiZDg==');
define('NONCE_KEY',        'KIuPzc64WTRxAiTD7HRvUZxZ0lM/b9XR1oPOovO4Tib+6K4eHYfBOxXh2ywLH+GZNH+2U+glK0mIXLE124b/Tg==');
define('AUTH_SALT',        'vSA39PaZ20f44WZuRnv6CKVHzFgR5rb883T+gQQsAuQ8PCXupjGnz9eEzjjtFODtoeJiIDTK5zX4H2XaV1cl9A==');
define('SECURE_AUTH_SALT', 'RDqoJt78cZjkK3knYdidVFjIcpXc5Ln8YSWHBRfjAdUTVKfTj2wY0JEQ3Wsynd+PSor282vDY6vWfXzPcF2esA==');
define('LOGGED_IN_SALT',   'vZ82wTcYRO2hNRi3ZPcEwCMLWtv2kkRJq65L61raHzcgKM39FOD2hI72soeWo5DSBoW7ZNck7xAJD2TMHxSSsw==');
define('NONCE_SALT',       'qDLs2iKK6mCG+8JAm/lIhmiH+x7hK525K+TGzKOcDdSLIKnEFl55qPf2bAKqBKqdtQ/hdehZHQ84OCyPYxTVkQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
