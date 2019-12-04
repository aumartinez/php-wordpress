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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3$G[NkIPMWx.2C0Aus+O[H%kpniH(P&vaCd>%Ws>~.ZW_mO%EoaIfniB|?(R:J6m' );
define( 'SECURE_AUTH_KEY',  'leWJe}2TC|ueJ$NYNzqPJ/*/#r_a](f.~!VnRJ:1TZ7n<~~)Y|n+^ALgZr}SQ3`e' );
define( 'LOGGED_IN_KEY',    '*)LIrhkQ6??Z${dAW=0E.^~zV@jLpf|?hs(F?2WkOzo_ATI h)5,gkBo!1+vh:O>' );
define( 'NONCE_KEY',        '}oDX@S/%LP1y&GA_?:v?[/I%D%bh8xboZ>~j!J~F^J6vAlaJ}lrbsdxcs?scg~~ ' );
define( 'AUTH_SALT',        '_I-<v e-7&O$M_80N, Mg@-&{U;RAYbyjRCF]zZH5hMm5zXvE,m(-pSO9 X=NhGk' );
define( 'SECURE_AUTH_SALT', 'ksz-RYI+ co/0=Py1{ocVxd@p.pTKQaE5|GUI3xI}QR<.,(oN3W:$u@5Qzq9k8wq' );
define( 'LOGGED_IN_SALT',   '4}_ymK0n~@Sfn5|nD]i1+e,9)<4IBkRdd_J])LA-lLuP1jmRJ0|Y8`.ptL)&eptL' );
define( 'NONCE_SALT',       '+1wXi>w9A&ghErrV.Es(2ql|`9BA=P,:bk}v,EO.6+X13)_ZXF:Lp[~F;Nk8uvA)' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
