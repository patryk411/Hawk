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
define( 'DB_NAME', 'hawk_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'L(-@dociCYoeb*M4<nNs(v#dq,jz-~Ff@:J<{wPWNdI`Zi,G+O[;PlFlSSE?k!(3' );
define( 'SECURE_AUTH_KEY',  '/@hB8n;vP[F<b;#`9BCC5|:@UR%J&dkhdJ/g95T:#J8q<__w7tA0;I)+P*$&G)5b' );
define( 'LOGGED_IN_KEY',    'lECYQ0$ngX(B]Q=LwI:2tN0Pu=p)[B0$_BWenlD;WQ[!Y>:ZafIfSKkick[YXZKB' );
define( 'NONCE_KEY',        '%73YLr|j2qCZN)a[L}UX]]BKJ%cjgB256AL5Cpx^0]M36(f^=Og-X)aU~gV,d^MU' );
define( 'AUTH_SALT',        'H5wxm%nU+@cu^wV|UiVemQvoSZxYFCF5}FXkw5xW+mmCY24hjp]k,3%8^aaAZ2-4' );
define( 'SECURE_AUTH_SALT', 'Ea~9k9x2T`Tz,(}G8pche89uVH!9t_LSvTr{lVl{=yj2@xgoTO?n @]GckJk;s|O' );
define( 'LOGGED_IN_SALT',   'qTF*5IG$n[^`;]*6}v.!Qv> C,ZqfG0RGjHdG;7S;G1_/._5w1*8WcRm?Cp#0cBE' );
define( 'NONCE_SALT',       'mZt7s5*=I:eoAjBi:HI91[ZBd_6avRk`o1t`(vAcd};lU5=xwBm(Ob!>LB&3uw>:' );

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
