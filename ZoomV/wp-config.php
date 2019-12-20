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
define( 'DB_NAME', 'zoom_database' );

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
define( 'AUTH_KEY',         'e;n#MDl?Hcw9]xD+$QF#~I{QT_2FFz*J&8uUl?pA }m[3G$qe{)[6[Y+&]gg-~N;' );
define( 'SECURE_AUTH_KEY',  'x@o_wTQ{%v4uCN:BUDpaZ4l3Ur3]L@h-JFnt^DF__EnsKQUN42FFp2Rc R:n }ec' );
define( 'LOGGED_IN_KEY',    '14lY4Q?~ep*U@r/ues:AWdmkH}TG*(KReDkvANyd=,aqD~5I9gWNbpCacM`n1]jT' );
define( 'NONCE_KEY',        'V0DTb=`sH_/CAc!2FB3zH$tO5:KXx]sM_1r|{$m&x!?iM1B%Yg9YBJP&/*qvo4lS' );
define( 'AUTH_SALT',        'jN6kB%HT}36b0Pr0a9Jn%j(cI0>kP{sRT@4lQu5%CGRE<lr@*[w{+Wj_/==#erTf' );
define( 'SECURE_AUTH_SALT', '-58L/W}.(gE1tQ~GzZHW<#%?::RX.1McezpTI,xiw1#?OL#%scB76!SzXp@Wn_#W' );
define( 'LOGGED_IN_SALT',   's[oO$n- BJ=!SJVwceEQG]YgkgzrX+trH]GMYv<7BaFu*}UDFyABu@H:Bfd#>kQE' );
define( 'NONCE_SALT',       '/7/Ir(&-8l5Px7]eOA-a*~BK-(>Ywd,@9xZztqs3fYDm4?uV:Pg-qTkp,g0>XM,%' );

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
