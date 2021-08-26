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
define( 'DB_NAME', 'thongdao' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'yK,/ARM[EgT,.Y]w>=i=- Zm#Oi6*FINowmB$_7T$Gdg-f:lh=FS:gC=0bL%4yso' );
define( 'SECURE_AUTH_KEY',  '~u7[c4,O$m{) ^IbHm-vH5?[d(DJph9#FyF$*}%cK{C`129Z/z9wv=cX1in4+dR1' );
define( 'LOGGED_IN_KEY',    'u@.^0)|*!kJP6%*pm]e2u>*:-M4~qdxOs} 7,4^yJq;hvZ^SMn$>J(cLrU7NJ^^J' );
define( 'NONCE_KEY',        '4[y5TxpMnI[TySAo!WunK&)?2W)b+,6IRN`5C#}q9!_<JXZu:|/io +*x$0OHH&=' );
define( 'AUTH_SALT',        '354]/}A }]bhZe&$DE&&e+6gFrcxOWv^i;g&}EG54O/;e`N1eaNOt3JC0q#sL{1E' );
define( 'SECURE_AUTH_SALT', 'WH!dtoFo fK=+MO5t1Qes+TDNI($%b12Y_,3,CnbJ{#N0C*4do1Q844BijE!a;Ob' );
define( 'LOGGED_IN_SALT',   'uz8D?:QLpxuA->H:P*Gm}r:.dU:b<]3W|*YavxKBcNx.2h;3@Pdt[1Ct|?`ipg`M' );
define( 'NONCE_SALT',       'Q<#5O;|.5LCU[wo>hZK%GqxhJpmL0-(m]{kkz=D=)}D:I,%GzU+)T>7@.$wYXg1j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'td_';

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
