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
define('DB_NAME', 'elonlive_hgbiz');

/** MySQL database username */
define('DB_USER', 'elonlive_hgbiz');

/** MySQL database password */
define('DB_PASSWORD', 'hgbizgalia44');

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
define('AUTH_KEY',         '<N!!:||ax)+_M:tT6AE_C*x7Y[GND?39oKT>hz-[-,M|]~za)%?~FURQf01z+rr-');
define('SECURE_AUTH_KEY',  ')E4!%+Ma6tCR<CBFs<IIcbW4i`:d(.F4-]F@wNFm!jJK24#%2d^fL|D{y:TF9U-=');
define('LOGGED_IN_KEY',    '-fKRzJs4m5!!na#)dZu/9ZcZ_> Fxz(;~o+eChEAdqkS_c|?qvYMXSzT~]I:xij4');
define('NONCE_KEY',        '!*E!zF`45rA1GHTDR$-!o1:ADu3yCMSDb 9K+QRZ _I)z1+dC[%ZYD=++Jc_Y)2|');
define('AUTH_SALT',        'I61{Ee`:o,y)1F5QMJ/F~kC4Mm+x=JJNZcgXg]^cps-U-4MF7bG?u]O5`wv6jS*0');
define('SECURE_AUTH_SALT', 'aKoU*7N7mbpL|r+R-5JY$OEZ<UIXZg|iGS1F#H)N/OD[;_UdRKHvmE+]mM$lv7Ko');
define('LOGGED_IN_SALT',   'j`d}]4*rC^P|f_?7+yy?&-k0Khbyi 9)<i+Hf{D0[=R{QybwK6!$DiUCXteh=++s');
define('NONCE_SALT',       'tvhD>KVW9j7b|B:bbY_cJI}{2-j]}Ik#q,v&|iq1|_dbMx8uh_40Eq6Nq/P`5A%x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hgbiz_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
