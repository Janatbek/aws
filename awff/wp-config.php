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
define('DB_NAME', 'awff');

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
define('AUTH_KEY',         'qwqKBlh5JJeG5ozWi<t_7:`KAyc]:6VB*GIu}h7E}%<m^?0n0!u-R8Y}#s=v<[(e');
define('SECURE_AUTH_KEY',  'ab@};{OAQb]V=>2WJ (2QD;#h?F,{2_sP=k#}`]bcxB5Z76[h#7GKA9j)PJrWI,I');
define('LOGGED_IN_KEY',    'K.{WP2:Ro.$`}FBSm/i|7zn]?Fr&oaqod`s{_?kemyA8]W%q-oi:KcJ&VTfBR.?0');
define('NONCE_KEY',        'I?zO*N-zN!M}7zAKpi$L=f?~Rx/jsO@A)kH9+ooU>)R:^Y!Bs/WTs.WNlT7)M$Zs');
define('AUTH_SALT',        'hkW9 i21U:pNKd&U:bx*5<lP3*B/QQpU)5yxEDhT2i9C]53(sAHG|1vzjgUz);rf');
define('SECURE_AUTH_SALT', 'Wo?jsI:D=3qK05,S_AZa:|H/%rOlh)4kD?^%(X0MH]Q,?9rv;b&~H gtHT%od1m*');
define('LOGGED_IN_SALT',   'fZ,eTG/IoxL$Org<3BifCb+c6:chY/oq^.Lr=1_C@@vUQ-M,;AUMU^c2sb!+md^)');
define('NONCE_SALT',       'h^gS(_<tf|ySOqf&PQ=tQW;fd g0fW^wL@%$dj|$)feYM_=SZ0W! r2J4 nw2WH$');

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
