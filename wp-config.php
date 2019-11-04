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
define( 'DB_NAME', 'bargain' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<hY$YgxUkpZ1p-~Ls3ROPR[2K8_ 4srB!nxn<sJ3Ms,o&7RKS0+J&?KyrS@s7h$M' );
define( 'SECURE_AUTH_KEY',  'VT.L788df0Cx!O#8Ftbh/Zx0ZUw9&Mp`,f+LN7fyILuD8An)D}<^!eg?NxlE,)8q' );
define( 'LOGGED_IN_KEY',    ']j L7WCC#2?6IyI&YUXN}:95}0lgw9`#<(z@xgRm%(})U|1ESQw&T +Cn>1JkwFL' );
define( 'NONCE_KEY',        '(KFZ|gsr3Fb2cUMTz+2PS._@u4Yq![wf!?fY1Y/8r|<MK2NZ}fYgp[6!:Qvn4LUC' );
define( 'AUTH_SALT',        '9|-. 6pCAY{WtcMGoCjn:RF[lgsl{7l@U+[y1O&Ea1zm`]O@|tSVdbKzY2o+Ng//' );
define( 'SECURE_AUTH_SALT', ' 3e5B#+<Ur)w4$b|+LKx[Ak9ads?Q6b+m|$sx{KJG!N9?|K:E yXhPw%i@Lz;YRO' );
define( 'LOGGED_IN_SALT',   '@tVL(*K79z].]6Uc_ConJq,M]R.&8;x}f&7}2`4+o4, .2R|3W|$&a5JB!2>kYXC' );
define( 'NONCE_SALT',       '0xp;&,=_yy3NHLOC>ae@d4[9B}C4@g_lLTNT8FR~v7x63pmcRMaSiu;VjoW]C/9`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
