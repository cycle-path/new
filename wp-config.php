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
define('DB_NAME', 'zimba');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '@Coporeti2#');

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
define('AUTH_KEY',         '_=G/&2x.~xRGsgp|Nx52@*:2n{!XP)Sn:;ByqBJEeFvrnK/q~R.Kw8CoqRNy]ArG');
define('SECURE_AUTH_KEY',  '2qMs]a@)}.dAW*v/(`L![|E;im-I7-^5eGt$jm}k NtBvg7u[6xY.FaQ&3),s[}h');
define('LOGGED_IN_KEY',    'bGFO(b[j^LsGxuG,~BLqS{M_q]L0~n,u_/oHK7s?v|>b?XKL5R@6)rQr$2Mg76ww');
define('NONCE_KEY',        'AxUEgw(5wh$NYox;kO+Bg<+ps]%z=uH]GTVV;fxY8|RwV+I/bYip~.tqy Wp:S3:');
define('AUTH_SALT',        'C|:(1}}~0g{[3/Fc_)HN9=O}d{NtY*kTjDb1+[AEDj@^.tBHr1s@mD&;tI/eDqLp');
define('SECURE_AUTH_SALT', 'z}dcwj Yb36jYp=]h2;6G=)4%L^g4S/HO<ieCOb$_P_KCXzgUD3(R&nBldH7wY8j');
define('LOGGED_IN_SALT',   '.&bg=dZ1;i+C9K{N4IqC8=Yp)9HQc^M_Ex!r,KppC)8I/P4{L0/X`;RN2s@*y.0=');
define('NONCE_SALT',       'hTA7W/d^BU#vW@-@)Y/95? |e1I[3Q:;;IjvX0dLHq|h_vxrVA-iN%=;|$;Lf2!6');

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
