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
define('DB_NAME', 'mysite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '5`;@KiRc8My) J!=6|bjT7^gc<QjMitW5-2=& m~58VRDC;H}2oFb.R[LQX0c@54');
define('SECURE_AUTH_KEY',  'e9_c|r1IIhEu67toS_Z%y7z%_OiEWW9wfpVY@XJ-o-Z~S$me-3 n6/yh+HP:^x89');
define('LOGGED_IN_KEY',    'OY*(!~w<llM,6J*UtP2`j5hGmLPh_G9C3{: t~4s(*Rc+T!!STiTeQ*qxo2D$IQb');
define('NONCE_KEY',        'z;O~b26fet=77!]$nm?|sAs91V.X*Cwb |zStqXq/-K_Ap<b$uKm|cshdPPQoW#v');
define('AUTH_SALT',        '+th&t4M~Bo<:a@hDeH>P_lS)#*lXu(-=yZ2dy,Zglz<$Eb<!6uw6E<z$_OV|e^:&');
define('SECURE_AUTH_SALT', ' zV#s$35J[w@LvZMK5GMv{[{eXZ#P7lfX,sWkR+$AA 5y)q$6c}dI~-!EjIChogL');
define('LOGGED_IN_SALT',   'sGemm1Q]{1MZs_bDs:@`hk||764_}v5<~Z]n6AJs6Zc<=fw--mF5P1n-a]@p=-x3');
define('NONCE_SALT',       'z -4Rt|6yw|,<^zXZ?TK}zxX4JcL/D-@3MhsB9|r* /0xh`mH^q5 .{IsyEKQ0me');

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
