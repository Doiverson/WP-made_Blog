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
define('DB_NAME', 'staygeek');

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
define('AUTH_KEY',         '3`:mb*oJJ_*(@K*/ZJAKTdj#i:QS[5M}ptm/y:%-5)WU>DX]*8T|?Ys5^2@ KAX>');
define('SECURE_AUTH_KEY',  'J|NZ=Eu.}vq)6!K ckz)-B<$%v(XT V^68pL-mceevV4:l,}q+,(|(erYNRT&cwO');
define('LOGGED_IN_KEY',    'gPRFR@Bb(3z9fj+#Ze%Z1!2X{[/[<Cpt[lV50^k&ku/aFsP%5UZ&w!8BD6:WIi41');
define('NONCE_KEY',        '7[YiansWrF1Gqc(7%s%m`J-/D$}LF@&*F K8.CBZkS+F$IFbwS`6SJr/>zb6!:0F');
define('AUTH_SALT',        '(E,j~(jJe2HlDlLod4!p[fB;~T5`/~b5COed#AW*V$pVtQ!~]Qg;K_uU}9;n3V-Q');
define('SECURE_AUTH_SALT', 'tuS^,Yx-7adOy4 ~Ehq>r.k*jT&`8G9;t{g>ye3uks?5tG.TR;*PK_mkg.b5XF C');
define('LOGGED_IN_SALT',   '|[Q8{zLH`r1a6>g5?g~Rx||izU~qRKaX6glRF2]-RL~bi8]3T{6m(y|k[v(1(=zF');
define('NONCE_SALT',       '|]6dG7<(Sf!/HU1=2Z[4JvE6{KPV3?O= ]iTA:?TcOqte,!OvQ!IbRr EPxM81H2');

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
