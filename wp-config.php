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
define('DB_NAME', 'wp-okos-01');

/** MySQL database username */
define('DB_USER', 'shapu-okos-adm');

/** MySQL database password */
define('DB_PASSWORD', '5TqNdFDRMst3uEFr');

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
define('AUTH_KEY',         '$Gl/R5Vml`{?/}{gz ~dmnLl4G/R_OsB+NdDj{dnX)W3vC&<qG2+5n$:CEq<r.#s');
define('SECURE_AUTH_KEY',  '{G~NQIz8E?uamYCugFr95*P7/-+-.F:x^hGC=4P}&mgaWJ>8UZsJWU<`QPF$_t`7');
define('LOGGED_IN_KEY',    'cLuD^xzIt({;x}E02A+iH,8$qlu3o2X|gRfeT,|UINXa#xLo{kaC,W=O<qpb[p9Q');
define('NONCE_KEY',        'zr)*OzwlWvRsyo=(i!!djR%_2~sjk4~y~u<@t~*me8`/zsH)oXcro(A1rvm0OoLN');
define('AUTH_SALT',        'mh]5Ep-h;XL;KhlzDGW>Q,zOGtiPQDkD2tHw5Ws-1|1A=7U@N$EuB0,7_`Y9pR^3');
define('SECURE_AUTH_SALT', 'hn|<[`wii%L<=s0yo~RrF=d1W{oWjc~StL>cI34k0]CewM@yEKc7%I.j:[k+cLtA');
define('LOGGED_IN_SALT',   'oa`s<r:UJdHd*.j0o;6i949ml@%M rXD-k&5b9Ak$#4I|u.N/SR-mR:5w6U]cC}>');
define('NONCE_SALT',       '@Dp2`vX*p-DvUl*1#bAn!/{=7ZU$a_^ReLd%S*#fP1m=J|P(~e{g!`0^;{S;JsSe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_okos_';

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
