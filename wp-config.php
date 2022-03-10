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
define( 'DB_NAME', 'mywebsite' );

/** Database username */
define( 'DB_USER', 'richard' );

/** Database password */
define( 'DB_PASSWORD', 'RRgWY4/EEG7U4kJ9' );

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
define( 'AUTH_KEY',         'Q&4:@StU0YfvC41<,:>UcGGb3$0};>SP4~.BzB~n2Bz|u!^RyH`b2028A0Kqb]*{' );
define( 'SECURE_AUTH_KEY',  'PRK E8$l2Lm!o,`KzS(y@4FM.iv:$[k&;o~U*hT[>kR<M(#4!l:._!2^Kn?IESU}' );
define( 'LOGGED_IN_KEY',    'u5F`d.ol/dSpk%=EC#ITnk_:YF:@Qr[~i~y_~;>P8#Z)O}VaM8Fn!{e{h%^8/85;' );
define( 'NONCE_KEY',        '9!)n`=t6%pGljEEE^:lWfTPk8^^Qr!JE[&%*xB./Q#h*`@$yr;>{-G12!V*;Gv<N' );
define( 'AUTH_SALT',        '@)`e-y)G2QaC<W-T_L<[OKn?h%x,8jKQs55j4m~MxdjnFd,vLyJX2TtQa:EM@&6v' );
define( 'SECURE_AUTH_SALT', ';2!gaYx>~z_-`}TciLw<p+!500PmeKg.~SK%0^4YUi(m3tjR@-maof+R2/csTrqB' );
define( 'LOGGED_IN_SALT',   'w#za9<Hju(}kp-uVFDKIcwh+7Zvv;V^$Q]Cjv}MsW=L<8wh-mfgua([>tNsf#ZJ)' );
define( 'NONCE_SALT',       'EBMn)]VtCh}7jnc$Qf%Rgv0GXzZ6k2*<idBJ2^lbimq`cLq~[+/=a4|/(%,H<5X!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aqr_';

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
