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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home1/estudjl6/public_html/hencorp/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'estudjl6_484' );

/** MySQL database username */
define( 'DB_USER', 'estudjl6_484' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DCABE7F3q0jr2g5a4i8o1d9u6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e6+r0HLkAvRl<^#uN&S.i%vF[W.yiOF)t|j^>O=BRa2w#2u-i 53I%<JpT;.oHoU' );
define( 'SECURE_AUTH_KEY',  '9<L.WQL|+9{xFH3s[[Q-APQ495w4?utM3b/>c^ ktM,8c]f,ZU+YnDfJu}Ykz|kR' );
define( 'LOGGED_IN_KEY',    'jBiFJ1-c?H690;vR^Z+BE]vw(H1tE6si4Q@?zu$RBAz_EAvjZZE)=<TuhK_#W,xG' );
define( 'NONCE_KEY',        '=BHi{o)%`C=QJoh0ObkU*f6uGQP0ei#,VH)zyhFD8[3,^@1`[d%}DV2*]7h9|IBt' );
define( 'AUTH_SALT',        '3#:{?DKdczdBBn8BUShy5|5|<n2Bi/-H!Ku!!u}ux_PNA83CE%X&ZplG)dFeTaG=' );
define( 'SECURE_AUTH_SALT', 'I{Zap5ONsN41Z2=ylG4v(^X7`_Ilr87.BwXP.N7do=!r3Em%~,eTu)V>r&,>E]zP' );
define( 'LOGGED_IN_SALT',   'k]Y<e^mW{pMry;`}.luOhkG%xBnetLFoN1hr|@zTrp=KN=H{:i4{@Cl]*)q)a/%y' );
define( 'NONCE_SALT',       'BCMlF!R,C}C,9p!6|r=FST}!k!rqj.&Rm&+!)FuMJiA4Q{Wk3+K)q~w|pNyi2Sz?' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '484_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
