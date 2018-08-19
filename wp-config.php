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
define('DB_NAME', 'wolfress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

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
define('AUTH_KEY',         '):UP=`/:`uQYhaMTUZQh&%/9JP3Pv3D|DwCnB#s/tcVhI+W.MDa6Xj_;2:*c9:)I');
define('SECURE_AUTH_KEY',  'qc.le0>$$zMoq !2PWy,P=[)!HmbXFiu6fOL>t</KRu b%3%bc-/e&|<ME AP3=A');
define('LOGGED_IN_KEY',    '{s8Z,iAz5w*y/F]qEJ~^[c@MB-Di6tV 0Z!zJqPL%2z~Kc=<Tti[JWgKB&CGL(JF');
define('NONCE_KEY',        '@X?bCCQ?IN,S]O1~PY]ZO{GqNLR:eh=I7kF%SvIX;OOi&<L(bCj$fRsfk<YnJ2|U');
define('AUTH_SALT',        '7of:}?]_8GYJeL5~O|@&yN-A>^S(wE+/W{W T@[6JQKjUghHWN!EMjA#^{*7Tnn6');
define('SECURE_AUTH_SALT', 'ucM_$u!1N|1h8R/1m8y>iV^Q^BnZpN_$d(>?J]}|o}oDV*(dHl=VC<],-i.vvHF;');
define('LOGGED_IN_SALT',   'w&uiyV$z_p%7)lI`afG`B+AiIGq:9z$9_4YHQye} {h`]YH;$xvaxs0zY;+b{1$5');
define('NONCE_SALT',       'hbbI@_i9!#!:)jX rq!S.`MEuAg-8{@*=q*Pc4T8eysiX )EZ> a0Y0*ef[3wvI;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 's_';

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
