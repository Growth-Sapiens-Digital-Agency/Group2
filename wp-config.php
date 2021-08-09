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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digintmedia_git2' );

/** MySQL database username */
define( 'DB_USER', 'digintmedia_git2' );

/** MySQL database password */
define( 'DB_PASSWORD', '(UW]~=*6ssZ5' );

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
define( 'AUTH_KEY',         '4*Qki[A&|Gpp2N$N *.M0Q1p>cJjFJ}vjPO`K#?]UiaIMhR}vBa!{`ro+UE2N2g+' );
define( 'SECURE_AUTH_KEY',  'N]cXPqF7bW>.@RD_@n4m1xD0@yLH2fqE[sCsAJCKPZka]qn mR*uvsDL), Ag(]O' );
define( 'LOGGED_IN_KEY',    'wR5A B`DU[qNXCMx6Jn~^q{2y}[@ /.v?^6,471tL#l${)X{8eOy~Yph%a3W1%,}' );
define( 'NONCE_KEY',        ')skx9h;Ibjj^$@P4G!!6{%T%Dp0kP{)ccsU.~o+v]J=I;#jPs:a1E8om4i`HB7oJ' );
define( 'AUTH_SALT',        'q6I]|#uOdDnQw4=2Z.wn8vSZf_47=4(A_2q^FT:on@+c*meBi|kMREIt,)YgBN[+' );
define( 'SECURE_AUTH_SALT', '<o@A4gIdkxVQofbvwaYdu4Zy{b5z`ildP6cw{iY~cWLzxq1x;! 4yqWCnr/a[)^4' );
define( 'LOGGED_IN_SALT',   '+FEF3;UF:nNlt}ST^@6Z[<Ab{n3@1C;H6w}-8;Za.6/0m,P$5Gku:Mbu*HG%nzIW' );
define( 'NONCE_SALT',       'E;&(>|6_^XQKI^[RLMnPPlVjtjg6.Aqa~-(6VhB9)WOu:?9ew!s-fVo+QTH*dWnw' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
