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
define('DB_NAME', 'acnl');

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
define('AUTH_KEY',         't}^QA<k59(2S#^k?V` MSQX*Z]:tLP84oPStHk[Kd}%~Hs0fAz90b2c[rgFo*y<3');
define('SECURE_AUTH_KEY',  ':!L#mRvrUe`sv>3S`0J/F{G|r! 2Ci+7[-3jQR9[PJ,JZ~.1%fZhvM;_swoJzqQ.');
define('LOGGED_IN_KEY',    '?tNg>rS^#v[[n5[K8KnZ8K~dwx:~i;3h>~g)NnbFs/n`c%]@n88Cl!Rs;b|3ED^R');
define('NONCE_KEY',        'J J,#,3rZ_Spxy4RaElEE~P[85n:.@YhNvY<roC?L(+`(G2({P}-l(jK_I?u<5R?');
define('AUTH_SALT',        'WM;K!dWmqJ~tEXo%:ot,i|hs`SNa#aGOF5=oi4-hf*tS9aBLC?o-T/Icsw_R[o^x');
define('SECURE_AUTH_SALT', 'g6Q=:mu(-b#LVD4DVCO#n,N`Kt^n.$~8EX(g_u?`L `,=aeF(zY>_5:HPT8?#VO#');
define('LOGGED_IN_SALT',   'N& wA8h:^LwYUv:}~?op*`&p5XRc *OGaYz,I}W!js`T3G$[TLYLPFd sXGmr[v}');
define('NONCE_SALT',       'hJ6gb{8UE?7WXqCChrO0idnE.QS[^w0w|Y|%h.NE=nGjRfhJ]zg|;o01@W(|fH]`');

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
