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
define( 'DB_NAME', 'gbua_store_nik7' );

/** Database username */
define( 'DB_USER', 'gbua_store_nik7' );

/** Database password */
define( 'DB_PASSWORD', 'ab55e29eyzx' );

/** Database hostname */
define( 'DB_HOST', 'mysql316.1gb.ua' );

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
define( 'AUTH_KEY',         'Z[[^+-:v[Qx=}llJ*,U*)G1+_Tqz;3X3QiI!t6V981h]J~=2PpVA~#5F,SA0En.Q' );
define( 'SECURE_AUTH_KEY',  'nAQo88UPMkxEa49Xe[:8)mli4IfUoyXgG9oG[!We{,pb2qPWDSrkAUiz-k T,C_S' );
define( 'LOGGED_IN_KEY',    '4R2[Dy8;}N5_<TrsJlW]s+6F*UiZ}^)qid|>kRCR`n(%z4S?G@)~0%-#B)=d>QDx' );
define( 'NONCE_KEY',        '?pY]%VdjlS,U_LWzjEz5Cw%TI {am(xXb42{c_/ziqm,VVlzsZ,OiWL1jj~FYr_Y' );
define( 'AUTH_SALT',        'jYT-ER|`,%o*VQ=^_iX[GDO*%kdv2O$)7#ut8MPk4^myA6)@.Qg}%3|B<Z$NJg9X' );
define( 'SECURE_AUTH_SALT', 'V:@q)LeC]~U/z&t-R r7O+oi]]r#L!ZAXa#GOQWf1-*>gbIAmul)%29#|5gNfpgI' );
define( 'LOGGED_IN_SALT',   'i[2_17REBri1rRp/|NqOMH_Jb&_f!uJ%jkg[Z:Fp^-5OA9Yayteu`P5cv{%+SZrL' );
define( 'NONCE_SALT',       'K=f6Q@SDB>sJ&3R)]A4[|vB3bTAIPB0RuHhqy/_ZS/sw#z)xExzeMg!%&,~ity!%' );

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
