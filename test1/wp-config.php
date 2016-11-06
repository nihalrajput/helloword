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
define('DB_NAME', 'db652932319');

/** MySQL database username */
define('DB_USER', 'dbo652932319');

/** MySQL database password */
define('DB_PASSWORD', '%^RV-PE+de3%@3@A');

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
define('AUTH_KEY',         '2@igHH%V8uXq7VQ<r55WYWw/1OZUaQ@r&0Z(BM1B^{n%Yfs&#rYp`J<V</DG}#:i');
define('SECURE_AUTH_KEY',  '93a?)~pmQL|Le@z)G]2DiJc>;Sf~J=IdN;vD5Y<_T_6PG!(lCJUbVr%2q~%b)mFy');
define('LOGGED_IN_KEY',    '5yt&:Jh;/eB0mY^g9.xVE MfjY|n1>*df0;YfJ4Bh(VC~fGOlUj|tmS/_2{n1 Y~');
define('NONCE_KEY',        'P5^q!hEnL9`1,dm[dY.A_jbJ4p>}Lj5Y52UKqV4JOX09W+0W3IA1AzbEz^ {B9}.');
define('AUTH_SALT',        'pC>`|$@k!~L}nO_tY@A=%r@>_<%4tcnNHa[CN1PL_s5p#owD;,p`hQQL*6Jg>s5-');
define('SECURE_AUTH_SALT', 'J<$T_0jM]wY07p.dtQ.<SH)~^&m27<BJW^|FSB_2*E0#Q{q8&Bl5FJrC}FLElh9S');
define('LOGGED_IN_SALT',   's<}a#N:Oof6*t[/tesWqh%1V@T@]{a+;wOdugbG*|/~}VE{?@O5&paX.Qvr:`.r&');
define('NONCE_SALT',       'A5^bx?jRzX/@;q05mby6GK$`:l^&8}I=j:u`~PG5E:Mynmp7;y:fp{yt|W)^(QI<');

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
