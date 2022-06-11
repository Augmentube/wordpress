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
define( 'DB_NAME', 'postgres' );

/** Database username */
define( 'DB_USER', 'postgres' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
define( 'DB_HOST', '172.27.0.2' );

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
define( 'AUTH_KEY',         ':+$Z7mBCCiIp+wkG&5g8RtA,gN$B*p}.$gk)_4Y*&}$jbL,HtPc(FW$LMG(08+B2' );
define( 'SECURE_AUTH_KEY',  '4&FD|UCV}[c7J(a-vutrv|kq|_|x~Wc&Do(?oMm`bufvR9`16x%bJ4~/If,F+raY' );
define( 'LOGGED_IN_KEY',    '_AHw$CGHV3f.hE:qbaFR+7%YCk].Bh`jtQT.}#@qSGQtz!|=Fh{J>uLM*E,&GBsO' );
define( 'NONCE_KEY',        'xX*|c 1}pd^|I:-&d=@/blAiP~?: y7M*4njJo_g<Ly$5b5&BkEc;V@8@!GBZiy]' );
define( 'AUTH_SALT',        'I?uz^{..?2paf@mo]9cpj8l_$l5iZL%(few~k/i~cOoaJwE%a(9y-$;rcN*oZ}Zs' );
define( 'SECURE_AUTH_SALT', '%%Iam0N(J5t=nM~_2.3=8A4sBD#MOs@S~CuOukOkwgoq@1x_]9|Z)_IVK;N]TqED' );
define( 'LOGGED_IN_SALT',   'JT(vl=r`ju])E-xmV2PPwnsg%*i~c/!4ou; 42~bYRvi+b*0=:!g)6|Q*J<Tucq*' );
define( 'NONCE_SALT',       '~gs`:4yr[15#P-g~(q{}14@!Rk#zwSiy5?V$f0b?b>7NQ=++zNWe{d%5hEPV 9f%' );

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
