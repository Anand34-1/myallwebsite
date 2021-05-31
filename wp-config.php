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
define( 'DB_NAME', 'cookingweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{4_$(e_TsZar=bd[z<gn%nz/>q;Y65z]K*(*nlv>EoGqk<IPmw@/lm.iF.[XWlOO' );
define( 'SECURE_AUTH_KEY',  'si)4orrW}HQvleYaDza58$q7Vl|hmyK2:;/ 7l|f 5/a>7ju%THK!{:]>2>}jF,i' );
define( 'LOGGED_IN_KEY',    'b9+d:5(S~aG:&9^e$sTCpfo8+ySc8c{Q0{F[L#OORAvJ4wzdR<I/url*B/LW8oK?' );
define( 'NONCE_KEY',        'JX`*+},WKTT)8-~cl?yOST)*v(,TA-v5Wnxy|^t,-8h7>FNjNIN#=2T%XIQqbz.w' );
define( 'AUTH_SALT',        'X oN=aw=3mEt4C78~,v=TK~jWgi|uQ6Q.gqN*0_98jyFcE+^ $H[e=[D9Js86,h=' );
define( 'SECURE_AUTH_SALT', '1@1L&)ijy;;<Y 5/g|T.i1x`x[n/ot%U(f:I_ixz/H[} ~<h6$$wX_+^z*%zl=%>' );
define( 'LOGGED_IN_SALT',   ' I<uuaM{z<;I~;hnWG+bEZ0ru}V{7.DWJQDg~^kk^,80[(AD~<y)Fk&P#>WFa{Q?' );
define( 'NONCE_SALT',       'oF-,?*?ykasN3!At&!s%|S1)2,~Q/FN$|T3HJXM~YHI1gT|Xz-2#g;-+c* {JqU?' );

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
