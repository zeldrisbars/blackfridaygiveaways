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
define( 'DB_NAME', 'epiz_27039997_wp65' );

/** MySQL database username */
define( 'DB_USER', '27039997_1' );

/** MySQL database password */
define( 'DB_PASSWORD', '887S!pSL)u' );

/** MySQL hostname */
define( 'DB_HOST', 'sql113.byetcluster.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '5ghgzyoypu5990u7wxamls0rnercqzkx0otbxmlyqi5guwhfel3rrhiw2k2ti9h3' );
define( 'SECURE_AUTH_KEY',  '95dfn2j15t54bkj3u30kw8hobtvtm5axys3cs49oeu3iu2hu8muhseol9pamdoib' );
define( 'LOGGED_IN_KEY',    'hpgcpocnocp7lavjevuezbppyr6p2hl3r1tidcwavo0wzd7pvisofoo15wpplahc' );
define( 'NONCE_KEY',        'sfiuajwns9veayu8jfuexpmghvgv6q84xyr7fyyy3i614ayqz3phdk5twhdsaxmx' );
define( 'AUTH_SALT',        'x45smdx6abelsymb3izastmp4ajkydfk6frg0nxeyeo7jt41ejyjj56tq6bpwxu8' );
define( 'SECURE_AUTH_SALT', 'n0nhnmc6rts1gshtga1rzmzwybuaf0fcli0crzmzmi5tqoempozjuqz1u9umfomw' );
define( 'LOGGED_IN_SALT',   'vek3muw8rmuthbk1w2mr6vinkiwprwlonizzeypukxrycbdaf97z16g2aka2szy2' );
define( 'NONCE_SALT',       'tr8ji1upkwipv0mvk7dqodcuhuitaowlbzbkphfugyxl3unmawlqkijlyg8zzckd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwr_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'thousergamer.infinityfreeapp.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
