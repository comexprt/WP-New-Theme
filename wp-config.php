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
define('DB_NAME', 'wp-test');

/** MySQL database username */
define('DB_USER', 'wp-test');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'q}HHFlX3~YGEGO6J)W}_^qfT[{_a^urien-UU8C{2rZV6c8`N)WKMNEKQwzQ2kB1');
define('SECURE_AUTH_KEY',  'VCp`n5TL[7/O@tr9k9I_YeDPUDIK_g+S/fAB/Q L?Q?L.Y/D]_w pK()XF7s0$RY');
define('LOGGED_IN_KEY',    'WiOkDKW?*p/.Lt #^W@KK@Q(f0|XXMwpV5H+m@2n_e#WGS&Qr,CK]f<K9nMYGxUL');
define('NONCE_KEY',        ' b=T4ulb#HBP<nP|o.u:R~7wt@25r/l@5AcFGd+yB|E7^/<m;Q6b@Uu7:#i=B[mh');
define('AUTH_SALT',        'ALMlV&7&GDdaRS,(d]H1M]Vm/;}[1vs/H&4cd4v o69d8Y4H1M,XqV}F^$?,q/.i');
define('SECURE_AUTH_SALT', ' BbrMe}Ze=&|#^ep!l1BNnO^r-.n))K5XJih3gk=g1t 0,`K0Ud;7YEGti_n>?TD');
define('LOGGED_IN_SALT',   'REv1]1ShTZl4NFJ53AlL^ZF$G{=yv!,dx|kvI2^yBdO)^7tQy<jsaf>vRB|w/P&v');
define('NONCE_SALT',       '^P|}_ JeQLq_.XC71x7%4vi}DiK[RI9L.4<y][PPxQNN`,s4o9WP%(k9AbOqqf1T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
