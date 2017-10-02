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
define('DB_NAME', 'cpswebsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']2,yt<]/WH%ePE*Yj,lYB{u$%t8++-t)IE)$70QD;SMSoJg {+i$1->uREAH6G8|');
define('SECURE_AUTH_KEY',  '[0Y]ViZE6RZk%2>aNDxrgP}1(+&d vys1YV^-a[(dx,8|VzRKzD5/n) x,JqFmdi');
define('LOGGED_IN_KEY',    ']m)u ,P01vMAkQ]7?!(m{?+0&t6*&MI>9Xc1pR<bxOz=O_9$[sMYkpPSzw$JCl?l');
define('NONCE_KEY',        'K2O9`f+FAF>b1=+~`(CrQuh|>|wI=wI=4AO[9g7>(@9dbCMiLn^[_.+dW^]<=<vc');
define('AUTH_SALT',        'u#}>i$1F|6F`)qsW6,uC8y8&4,@.0_fsvj%MC5`SLFo<-MCXFI+EdG`Ri=!oep+D');
define('SECURE_AUTH_SALT', 'Y0d%Ao>c%iW:wCEd_]9 m`CL||l^:k`e#~-Ji_ t;*3ap&%#<CSqvg%w:|NN/(6v');
define('LOGGED_IN_SALT',   'H@uXCSi]s+yxN2fC&66x Rl]%V,.n0>7U+ BTsSMg#z.W)pG~~(NJXqFN:S(cY@l');
define('NONCE_SALT',       'hhI|S4O#aOnhJ|iuOoqh?yAbXxxt5*0*qaF Mx]}|gBdXl]0TxR^{[>$Z|BRZF.v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cps_';

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
