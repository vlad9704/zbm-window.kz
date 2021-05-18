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
define( 'DB_NAME', 'zbmwindo_wp_aewzl' );

/** MySQL database username */
define( 'DB_USER', 'zbmwi_wp_2qboi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Fbo_kbd5X0gUqn8r' );

/** MySQL hostname */
define( 'DB_HOST', 'srv-pleskdb37.ps.kz:3306' );

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
define('AUTH_KEY', '@]a2[1vLGW7;U)G(]YJI68pJAI70~Qz2c6k-W!_JkG&OT24Q4eOmi4qdp]f8L&l5');
define('SECURE_AUTH_KEY', '[E5C3RF6R9ow@#/;[vy8_NCe:jR9XTj7fo3@Zq(6#V0Si7~l|;66j@S~5EoQs376');
define('LOGGED_IN_KEY', '9;xNPpHL0X98mGt#Z6NS]uz4He98;0TTzm%R#m3tVgIj1#XsC5ocNYC([t[(M@!H');
define('NONCE_KEY', 'WYbs2~0g2t54hV*%#5qm7OjES8mYk)/7@zH0!LzTL86HVr)U8xh[6C]!HK#U~M@-');
define('AUTH_SALT', '(7nribS~S;!q6ye9Yu1@0ie1W%Uk_;tH]5vt1y;yZXX8u5j(8ZGt!n!6H53E1t+|');
define('SECURE_AUTH_SALT', '+tr504f4#w&YR9I5cu95+35350|--9+*09qrG;CRup1rIO!m#aFtCg_0PX1vDm6R');
define('LOGGED_IN_SALT', 'B0rXDb+7B|j1~)!(vJ8P79(3Hv2*04935:CM30x:7~!mMm)E11RiDpgm#z&x+51c');
define('NONCE_SALT', '51x*FmS1+JN7][O/C~NEAC/2x2jpSEb&l+O4%x_U*5uX]U*wQ-m6|TW]PV2%U%r-');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'i80pJ_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
