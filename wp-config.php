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
define( 'DB_NAME', 'paylite' );

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
define( 'AUTH_KEY',         '2o~]]I7V]DOjh]eU&Tvl3U!x.BUF-u_%%)?*Qr:KAn?-=v%*-D3G&TzNmcmyCONJ' );
define( 'SECURE_AUTH_KEY',  's%{,M/5VJwbsF]QF?,ym*&n:]&fXd]7h<zX&iX[MA2cu.%`G~#j[eQXxi/!(R~di' );
define( 'LOGGED_IN_KEY',    'T p$tZ}q=1JptjW$Sw!&_44j[~Wm;a`,Ui5&&fQc_ep*D&}wSCe%ENXZ;<x-H5}C' );
define( 'NONCE_KEY',        'V<1A>3<4*EV/Ica;y7$/@-H6gfhfukA%{wUIwR~xp{?K|T^q,p:.5j?G}${$H^6t' );
define( 'AUTH_SALT',        'hDFe?D)>g?ZoA],uy)jX1vG<N#XD5I%4,_*lbI}ZYd%CJe2l@95`($YH&m wU<f1' );
define( 'SECURE_AUTH_SALT', 'hU6r5f~;kFDAu7tiQ_^&iFc;M9_~wwR#uI)r48j8yNJ[fE+U&n=]{I|6.BLZ~[@h' );
define( 'LOGGED_IN_SALT',   '!rziRx9@}75q>Sx3.7PZtE|NUr_K(]Iz&-Vo`_X?PJmG5n3V#3K/|(0DOzswZbg8' );
define( 'NONCE_SALT',       'g!-=*;F?=h$R,Dg(uEv,`gH=79z#=1w)vaHu=m-XxFEf<zsy>]]h4u$K1llH)Sr ' );

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
