<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naidu' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.cvhszmibdseg.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm6CSI#LEv9<n|Y!UM]=KI+n;t?k_,ph8{Sj-=+v936TdlH)WEt|W,(E/iV:g|5i<');
define('SECURE_AUTH_KEY',  '6jO|u,W![-Nc8|>iy{p>kOac7VDQv#GFSy) Zla?pG_9;%_#1t9v-?HbL3aDk{S!');
define('LOGGED_IN_KEY',    '!fx53kep6fB?EjGdt44YNT{cJPQuqC|2TR^FwN*>a-`iqCn+>itV1~|8&Z,|Ga]r');
define('NONCE_KEY',        '.)9uPE]eJU9*-++X;fIT{|-!x*+3a[q-7HKa^ikE-ORMrk4n3N<(k*fHt$URNBSr');
define('AUTH_SALT',        '-9lfGrjrz`lQkqJY<Dm?K4[OE4T!u$@qxP^>0JLlbQ^-.~r|13No6EB ^g@kDK{e');
define('SECURE_AUTH_SALT', 'u4e4MVc-IO~+5$B-+%tRg+<3Gt]vS^|7j5J$~{*@KJQn4Kx945~|5q}_%)WWRU7s');
define('LOGGED_IN_SALT',   'Lf ]%}T{*y{|+]@Ayt+<oX?x!  |&~e&bW5H#evt.UxGs1(AWoz}l(9`j=(.73za');
define('NONCE_SALT',       '(Vk{(B10V-g07ZOa&4<95P1n!7$ZDSb3d 6fh@.+r)|uH2bE:0N{)>wt:D+-hkiQ');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
