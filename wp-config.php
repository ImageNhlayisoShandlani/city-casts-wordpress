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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'QuOF4LV.wpP5WzmRB0>~_tPk6@x<2R;5R0*8XzC-*cq6Ip^J-Ffg.ug2o[&[?wfJ' );
define( 'SECURE_AUTH_KEY',   'vBkm9$L$xq[m:YFb{;t$b|}I{yGl(Ea-Fm~@e&;.`%03&X{FJq P5hRo9Q0M,08%' );
define( 'LOGGED_IN_KEY',     'zv1W0&W0yY9@e ]j{e})K1~EG~c7IvM:_X5A]~00_t>rz@]pyP)lnApqH9k,IbDT' );
define( 'NONCE_KEY',         '*;/je14|ko0Hv@5]1;T!fFT~{C<ZFamftT7q7eAtTA<d>lx!Zj7KbBA1jX=`<@$:' );
define( 'AUTH_SALT',         'QOv*u&!FV|%2S+qDXLt~dP2L<siF:Wh)(TQ%N=kr]9),wLtG8YKI_o~?+IAU^eJE' );
define( 'SECURE_AUTH_SALT',  '@[{E  vv[gvdZLiazj}D29 |Q0a.%eX>.ZH}_9z!tmIgrp+akb}gt0R,z1a.%%gz' );
define( 'LOGGED_IN_SALT',    'qG_m%99<*,8=[wwBx8<{7=K|mzPB7,AR2-5$K}<@#:/[BZExjaLo1xTRK;K$gcm?' );
define( 'NONCE_SALT',        '8b(*mWnv}sDY:aq-T9JTOU?rvLHyltDm5Tn|+>Y`ssZ[=9F5BTc;7eF15h!p%7; ' );
define( 'WP_CACHE_KEY_SALT', '.V0qj)[cJ-Qk4R=mLpb#[Uc9VOa6u4P3MjJWAt69V@vnnUi^ra:-)|hSg)-+X4;~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
