<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'elverines');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ' ZJ;xn(_<Eq_pmm</;lOL(!92)mitx3.XD#B5DNe~~C~v2<L(?:)L@n68:oGs40g');
define('SECURE_AUTH_KEY',  'j#0*S3>l.0 %E6iMntnS;%gi$l])AV6%[X=!Fm=)&|j.PP]E]@koHr_:0*7WW9n,');
define('LOGGED_IN_KEY',    '9Q^#4+au)GxF-w|!XQ iC(lU;xM$<(fj2^-p4mW?`sa*92aDZFWK=N5zN,(K%z14');
define('NONCE_KEY',        'Y[DN>[?R[OYZ%+Dwu}@Sr=9>.7deKCibP.>1,IP`G>v}$U*l,f>Je%>v+g%}d15a');
define('AUTH_SALT',        'Cct2;x(kk<Vsn >J)V&n9Vrro4U:{?+I>$VZqHiurh?u|3LjF_d4>kvMkOvyXQ41');
define('SECURE_AUTH_SALT', 'E.Lg 5kYq1v<Y<Do?m[SlZ$<a[/okV!Xom]n Q1:%jwcJMr<c0LU}cTpY?so2x]*');
define('LOGGED_IN_SALT',   ' cR_fS,Yes6Kl^i&g@b ~ROpg 3xD+K%zHzpu~|mpcfO!dWTI4Jc$0x(TXe(.<h<');
define('NONCE_SALT',       'B1#`&x(+XseMsj=dz.JO#_1<j<TJ2At<Z0nZE;~cjowO;JQ@??+EJ2D14.8[ U9t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'elve_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
