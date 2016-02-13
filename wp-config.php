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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'CccZ0k6gNF');

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
define('AUTH_KEY',         '}+6ww_EDQw*+8Ef(1iEayFWKY!`yFAJFV1-np VSZU$Gb`#7hh&byxKsl7unBcx5');
define('SECURE_AUTH_KEY',  'p>o|-P-NtotT]H SuF)_teyn!gybhZ61}: Ay;3M1/(ye( <KKNr /PIPpG&|M[*');
define('LOGGED_IN_KEY',    '#uF:1JRybTL#oHpCK~~9evh/]D`0(/)8#xGnYCbpxgnl:~e62h(PtYQxGfEIAb(q');
define('NONCE_KEY',        '1Z_BhoE$|op=:Dy{tw;[ElC#920rsbaH2m<]8RP{+lDI|6*Fj_CsMjs-aUMU;Mu~');
define('AUTH_SALT',        '~omk /<4b$dr].jrox=K<X(3qyCen;>uKHMJ(cf0a3YYFf,4Dw%FzkvxMPYNtHU_');
define('SECURE_AUTH_SALT', 'q/6}Td=B;}TMVZU}+@l[N;XdbkH +#rZd@n`4ruv&?{ffRmICn&x1JEA@LeTi:;N');
define('LOGGED_IN_SALT',   'Ux0a{SJfSb^56kwkoCCYE71!aT]diS*]aot(418z9;NfA$f)}XN.1;^%n@O`C{<V');
define('NONCE_SALT',       'wiD.Ip3tShV;(B#,4p/(;c{_Y*W`{ %~)+HJlc4GjBoUuX%nfj<wI0Z_oY <Eg$6');

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
