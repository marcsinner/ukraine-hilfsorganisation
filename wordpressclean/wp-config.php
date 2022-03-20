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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ukraine' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'RJs($)]rBq&y*wP2<coU=;<m{_aJ07}%]n3b(DS4kX[dY?9?XP+A8n66hj%<JgSy' );
define( 'SECURE_AUTH_KEY',  'IrJYE5`2rm_3h}J,6SI%!j!ZQ!qso,E;h)J&X77]U&>-h>O1Y#sS;WQS*?gH}h,K' );
define( 'LOGGED_IN_KEY',    'atg$Avh k-c_<8}LoQ=6r#`~Y<ei0C%_rZ#st~Bx|D4w9-Cxl{|N-C+^#NxBXOws' );
define( 'NONCE_KEY',        'cpPN_AM@^92^UJaSzyEa!tba).0SCPF9%?mRkzS(b^6)Pu.mNIxS$6asV!PTO31|' );
define( 'AUTH_SALT',        '/i[Be&:9wSq{dZ2SV2[)&8A`4E&F!vp!<-boyHR86I92hIRS_j5L<_KpU2-sP$hz' );
define( 'SECURE_AUTH_SALT', 'Eb47))PmL gkiLbd=]W.]NGMS,:0$.JR9EH=]ee)`@zxBd`y&Z@:w.0Zku)pExkX' );
define( 'LOGGED_IN_SALT',   'cI<@! cz3#sC=>bM& n4Rq 0x|e^{ixb-3J7shg>:QZ|tX9)50XFp4TF25vsl8.U' );
define( 'NONCE_SALT',       'T(,{R S3Fuyhl8K}v$23675sw?L]/e^FSb^C}[*MtWL>jPVea?WX~ftj`]0&fHau' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
