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
define( 'DB_NAME', 'rr_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'clave' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'F6 2~uwxPgj}AujF-WTH?=D!:_:Rl|uIx0 ;D!G,=W(K]|{C::Bx*2(BU@8{3Rn}');
define('SECURE_AUTH_KEY',  '3xrsk4Gf8zFMFPaa!@tC?L~sTrV.0z-.6.P{=u1yJADHh=i:=!ICP=Pny2)#Gqik');
define('LOGGED_IN_KEY',    's:&^qxGl{V8?$2h-C)Z&z)mBT^),f[R77w==EbpX>kWhOL-<#rjpT}ODbCh_wNB:');
define('NONCE_KEY',        '4bhm:EtF~Ss|udPP1N_T+^S5FC[:1]J?Y0BS@2HS*zTG{{^O;k4.2zzx44hzN!}p');
define('AUTH_SALT',        'oQ}v<2M-Y0A8>7b!B ej3]=7NYyV- 4Y9[[v2[n0Ab|jxP4IC+c.G`P5Jd|M!M&Y');
define('SECURE_AUTH_SALT', 'E;3n~</V$-{!y+v<.6ovbq#YxC+Q+>#_K}P%? H!MR?~X]n#qb>?W(_TjMr-1LZ8');
define('LOGGED_IN_SALT',   '(dCNi.-wFx$ywNt;*Jeo|F4=2nWO;I(>D2ieHH11d)XKweJrSwLAkIr+1EBSAT5m');
define('NONCE_SALT',       'vE;k~7n0mD8eMd=4`oL8F0DPv-ru+@S2;<|+X!!d6n49>9-J&P|.MFwDO5G}2CJa');

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
define('FS_METHOD', 'direct');
