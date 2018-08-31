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
define('DB_NAME', 'gimnasio_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'A>+F9X*l6-H~U]p[Oct(<AdzWJ!QA^&`aitoVl]=R3DWLg-GH^5!kf_br[ey`N3b');
define('SECURE_AUTH_KEY',  'n?JHmRV>qcR{}/9HcpUA7ch^(mGFET!?oxTykBnZqvpTtU_ 0D!8^B*Z4ku~=,s.');
define('LOGGED_IN_KEY',    '$<mG*gsCd_6Wi0#iwf(x_bQQ68}diY d~Bb,48Nm^!er55A$,>ss@`qLKza#lJrj');
define('NONCE_KEY',        'pI,w-}v]JmC>7Y=Svk%<~S[{4..v4{9}2D0&)DSAd]nN#:(2VkUA8=YEe5FI~BT+');
define('AUTH_SALT',        '1&c[pOw{z5-k|]k^O1WvEusuN[BPZ}YXNwX?u7OQ`Ki;<1W]: ,Z8_G+KfeMN;~V');
define('SECURE_AUTH_SALT', ';JHjgsK-#ofsk4YE/MisqL}2BTix3Om[BM:]C-iFuJTqh{tF-8Uw$d;b!eiVpaX=');
define('LOGGED_IN_SALT',   '6_Z~T^QPxUUJT|{Eb%OL}kXo,#_wciI=,FxW_+N84YMyY)=sHUj~.zd3C/Dh65kJ');
define('NONCE_SALT',       '-vi/;it2>VH,D%Ox5E*A,0|hw!:hlvpm6M6~#=d: (-KC|Bf3CxF[?q&h?YX<lu{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ld_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
