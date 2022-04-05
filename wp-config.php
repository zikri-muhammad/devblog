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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u2021_devblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'y8:/,W^Ezjur?M:yjjS5p|~w+`9kdKhcvh(ZWZ97xs.M4$Xxk^8jc<.oPV BV{*n' );
define( 'SECURE_AUTH_KEY',  'sEi7qs>lLTpTs%sWHM][4PhP}4dr@*1 ;MZ7Di,~HK>kA,L3oj+]QA; S>DC39Nh' );
define( 'LOGGED_IN_KEY',    'tzR` RV},` t$GwjV9xcQecm-qDRMzH@A!`@Nc&/1T^2>|DT|3-Iq<}No%-si/CK' );
define( 'NONCE_KEY',        'l=ZfD 6${qb^)<PX#1)bZW[^V =-2R/&<f43aSrMg0<1!A1g8>nmFljM2-:!VPI&' );
define( 'AUTH_SALT',        '=]Kfma?x{E!x&;?oaZDmM~8&lh?m9K{Nkbgll2EOl9F,bwEn[tkNAwA/g~^!UE_7' );
define( 'SECURE_AUTH_SALT', 'aqeO1qQ.n`qYvuDBPNI^IcuR/UQQilstf_?)xO!(}6KOs!2Qw9xmr)_2!T Yne*B' );
define( 'LOGGED_IN_SALT',   'U{]Jq=z$]{|qe4sk&,I$d <Jx83Xu=Eqc}7A2mr{|;i>ig$6(xM%@M{d -szjwkM' );
define( 'NONCE_SALT',       'us0j~MIilPpXaGLU)+DQb0bTJZ)}c.<PK7dcn:4@uE|@.zj~7M|!!~oQ^a{]o{m3' );

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
