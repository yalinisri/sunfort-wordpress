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
define('DB_NAME', 'wordpresssri');

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
define('AUTH_KEY',         '%{=z)a=[0Xc 3@IDvS,{JGI/%y*1ld >q4?/z5;$!X-s3G{qqe_J8t_9#R@83X/f');
define('SECURE_AUTH_KEY',  'JbD0OMR>Ro-=A=hAo5}HFlLVvouT>.YRY~!kRFHQ8LAw&*)UH5:d~@_y&Hw*qMn:');
define('LOGGED_IN_KEY',    '2|BVotrY8vKFW:F#<ehq+2&yNK% .>K^4DO?0sO~<$[ye~NT/mlscli,md@3~aJR');
define('NONCE_KEY',        'rBlWvoFHTxYw!&i,SRcFl5UZ9xE:.wnVD+=6b?cp+yv3bpzDJupf$S#.=L*fpTdE');
define('AUTH_SALT',        'A!$aZ-M,[c%>m&R2t6d+ZMq=Y6X)[N66IB^U9wLM6Ho`LTN]QK;4M.lmBNg/(SVN');
define('SECURE_AUTH_SALT', '/3VYV=DRWV-[l_SZ %C<n%b%8[%JzjVQ?4?O#WGzJyC-5Qn`[`|@UW~m^W l3S!p');
define('LOGGED_IN_SALT',   'GVl,.:Xxl4^rOi4=cA}#CFlB`V^)z4XRvKAlk9D leiFIB%LdS<5|o3wMhs_dfo+');
define('NONCE_SALT',       '3z%/IZVsXGD.bBSn7&T#+R7IH tT]zz|7pMl;d;dKe|L.iiSNQE;l#DL_ r$JYqx');

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
