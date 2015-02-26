<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-box');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', 'root');


/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<9wqb@BZvUpoO^5G*pd% 2YZ]]%51lu9.>*=(Z6ndHQ724Kx4TbbLw<xXdgc)4}&');

define('SECURE_AUTH_KEY',  'WH,^e+416/jV+?S|3MVqz,eSIE)M7j_]zFHpQ4<#A&:/|tg??zyyL[qX4@vxx%kQ');

define('LOGGED_IN_KEY',    'X!,K>+z<F,$!0:>2G%t,/-x[3]e7fxJlZ{}D$@-~(mE)ZRjMTQr<={C;<;CRrg4f');

define('NONCE_KEY',        '|5|z&;?1PqXS_&0QQe(SKHLaQ!!l-%sGk-]w-,2|HZ~fxk;+qAd/)n{Ckjl|X6+}');

define('AUTH_SALT',        '-1Pg+uSj2bR6%Y{,5Tj#Ukbd);5]x)Xb)zlJ5yKzszrXC~KMmP<Qk}3yAx`5LhzG');

define('SECURE_AUTH_SALT', 'Ug=U.qfO`4J<r{b,j)=WSpp6N3~m.Qn-Eei+@Cf~,(84GW+2p3vd0:H(9D]~T4(N');

define('LOGGED_IN_SALT',   'rP=5y./}_OzmT,/gBMbL J1!8x-*<em5SG?tpO(^1{Hict7V[}|X0bQh*:+Kf+2U');

define('NONCE_SALT',       'Nc+s<5Qi5yEas9>E.TC6}H,K-|d?Iry^$=}W|aXkf@//f$nM.TI+nN$;y2!e!9sm');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'lbh.dev');
define('PATH_CURRENT_SITE', '/wp-box/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
