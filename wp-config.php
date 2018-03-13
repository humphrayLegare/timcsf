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
define('DB_NAME', 'timcsf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '11qweqwe');

/** MySQL hostname */
define('DB_HOST', 'localhost/timcsf');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


// //for timunix2
// define('DB_NAME', '2015_hlegareBD');

// /** MySQL database username */
// define('DB_USER', 'hlegare_user');

// /** MySQL database password */
// define('DB_PASSWORD', 'hlegare_mdp');

// /** MySQL hostname */
// define('DB_HOST', 'localhost');

// /** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8mb4');

// /** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');





















/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ld6_Z[{psATnTvG]]=`y-|dFoN~!>2O4oj+Ntu]xd!I>yM[D?w$c@R454VF(Amm5');
define('SECURE_AUTH_KEY',  '_Ibt}MZoHGlTigm-B&JwVV45p%?hw=@5){X4jo!dgBO|2jig~QL3~P0j%JF 9B?i');
define('LOGGED_IN_KEY',    '6&o5pUsDWda[r[<ymIfVU*v8pQD}UPy,0{-HBRlT?*0[|^}{/S}`bLgZ[uzr-f`b');
define('NONCE_KEY',        '9)|ExPw<($:F#KFn,PAk9Y_oE{6))pKA9sub9*$!GH[D8|or<0d/ITY{EP]31b!c');
define('AUTH_SALT',        'j]?Isz}7fy[$hh+|m6%Hzmec2)V$!}kD$p5ytEBuPpJ8WE:: fQvRJC.{&Sq]sY#');
define('SECURE_AUTH_SALT', '2wcEr|C%n&,rjyLC/VU2v[e5nl<z_Fe2Uo]>0Fzyfn8=_xg~/*VgM+%&lbj 7iv5');
define('LOGGED_IN_SALT',   ';6aBiu[/on@k@E(H]Fj^:N/pv&4z--A}XSo.oSh|K#cVPONoY/*Hlm>;s)8f}Vnk');
define('NONCE_SALT',       'ilNX]*ks`6E*sp&9kxcczJyJauZBM^;ngDmky*n8l#mDwN*6WSYPz6B51:~U8}$d');

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

