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
define('AUTH_KEY',         'KhXLYOHM6RiBI0nrWPIuD3b4UhOJGDGkZNKpUz6UDaig6GqMlQO0Zo3h8Y8gYBd0mI4IoCsfSTeFftcgDox1Rg==');
define('SECURE_AUTH_KEY',  'baSNGPItbbV2+rnbB8VwWuHBfS5VhArBy3YibDVy4o/XwtwQvP2WSRDPdvd2XKjfjTJMod9PGWHov38x0+BTVA==');
define('LOGGED_IN_KEY',    'pO3BX5R99wfJc45hjH6f9LwlnT+i2+WD3vM+jojMVyaASaonwPV9CwWqAjhgEx9BK3CdIm7CBXXpjzcudRtG0Q==');
define('NONCE_KEY',        '5fHK8F1iYqTNFtIqKf9oOYNQek2tcP8QDkCoLTxR5if9wwtZqzz3EvlS9yRXhy9/0HrlqkB047waiwoW0jy/hg==');
define('AUTH_SALT',        'EJ+4imEZvvFmE+MQF62m2NZqgUrRFfsod+0Q82RXi3StDAmzEcqcUa4gOSONcDxKcnyuRq/GU0IUGxLQYpEKwA==');
define('SECURE_AUTH_SALT', 'FDDzggwc17/fSL/a1UiY+ynf/MHI6POMCEn2pNHPc+JSODkYzM8k/k0T5V5HFMm8f+ToD9yThSz0pIR4HQPKAw==');
define('LOGGED_IN_SALT',   'Jebln9BjgZuqxB6WP33xtTNojCdr71LBht9bjm38eXIf8YdJK0chXic+ikwpY3shpSO4Dj8I/CdQLtoqxIqtDA==');
define('NONCE_SALT',       'LilOZv7OSg3aESQqIz4L+BAfoR2qzTnMSSdNT/Y4cKei9JM4Z7khmr+q4GSdG7c4rhDwwXwG8FdCo8Mpwx/sqA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_a39g9wda1k_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
