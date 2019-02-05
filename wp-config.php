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
define('DB_NAME', 'ace_exteriors');

/** MySQL database username */
define('DB_USER', 'andrew.stringfellow');

/** MySQL database password */
define('DB_PASSWORD', 'Buckeye123!');

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
define('AUTH_KEY',         '4P/cdeBN80q011SJ;hW;Z<n;T,7m}b@SaZU_7f9uOl7Kw}<wtt-hC0(?AIVeUk70');
define('SECURE_AUTH_KEY',  '{m(s3V9 $piSc+bFS:wX,.QGJkG1F}*Yplps_WPoD|#rLaAD+,-#:h$85;23A>c#');
define('LOGGED_IN_KEY',    'H_A}= :~)zu97_FmWCWpjW]^7nxAK{X0wZ=;7uoR<)3UC/|L^1{Lor`&y/$wjLIB');
define('NONCE_KEY',        'Ui@G~)>=L]*D6#y;Y2SW3nzQDB2`{YFVJb%5 VT&N|E&}WA7W]/?z u9-p.[*nA(');
define('AUTH_SALT',        'o3}!+&c]zv#&.H^CUvb%O<U)C~QFM>!>+s6N6mM;K>><DJpp89Mn9N6P,%ij]h*n');
define('SECURE_AUTH_SALT', 'b)&V2PT&kD3Kdq!>xm&]Z/(EWD<%(~D_qz3QvDGXtew-Oc[00Fw.2PtGB?HBx>:k');
define('LOGGED_IN_SALT',   'fptfojn@n/kHyHf/D{*^Q;<7a&b}<-N~m:ONazC::eBc=Nr/yb?S9jWa@(H7$)x,');
define('NONCE_SALT',       'gFE3f+Jg].ySDmtnPwnX#h|3.&97xVkw{#ja<t[f>9fzmO6N/@(4/=<[3U7$66L.');

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
