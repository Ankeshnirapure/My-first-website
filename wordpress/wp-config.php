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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4Q8&Q2+#kMoMy5)E^2!S[>h~g!PuSgPO3)T5[:0Ev<stq5!k]s~2/!j@N&|a2O N' );
define( 'SECURE_AUTH_KEY',  ' ,$)T(]x=>y0&:zZwUlFKJtfF<I9@lRhN,Z2x-Ef8JQ15!L((C0QUMOw4bNzb|sh' );
define( 'LOGGED_IN_KEY',    'o#+Q;x8$Bi1jHUY/a7<`%N!j#B j%Uf,^FQ@OS#`:IS[u/n_EHWTeM6FYxOo)]C;' );
define( 'NONCE_KEY',        '}u7<Q8ujOrXl`B3y2q1?Pg*W[r.$?xh!x*Xj:,MU}6WCAF3(vf3)Fs Cg6RHSJxf' );
define( 'AUTH_SALT',        'WT i<Sx]8</i7@INH*Vd24|czki 4TTzeo)D1qQbioHgmQ[Qh,m:[/,mh^_vV1hh' );
define( 'SECURE_AUTH_SALT', '@&WA){pg,n!Wua~N!f|EKDgL^f)Y9TH)[CK*}*;TRrFk9d}W^<}ehmUUs7:mY_3b' );
define( 'LOGGED_IN_SALT',   '~bc_=Ctet*.Y=b/D,+^h5%3y.v8[VjrQ5mpoPF$dEQArwYNv;>qK!1;UD,P<<Wk)' );
define( 'NONCE_SALT',       '=mlgfSM1?#km3i2+IMw]g5Bt~-P:]x2yZ&J=dIq8R~Dtr|3fQ>ze|:y.IC1AS.y@' );

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
