<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table 
Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more 
information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php 
Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your 
web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy 
this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
 * You can generate these using the {@link 
https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key 
service}
 * You can change these at any point in time to invalidate all existing 
cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3YAZLx=W`x`PzgIR;bf:ta*:,SWkr#sS 
~aSdz%Fd^-hhzf6DVG@C@92V,+Lr9;T');
define('SECURE_AUTH_KEY',  '*em/gJoXv4cHP{(1D2uyW_l6 s=dY9 O 
R|4+(+]I<[LdgjZvOVC;6F:#NXV=1]p');
define('LOGGED_IN_KEY',    '~2Q/AG--& 
!t0ZNAg3u,/r;!T?c4Xo78tn7)StSh3$yGb=G. LA;py!}BXhZ)G$T');
define('NONCE_KEY',        
'*|`6`eMrko5u27II<0ZjDleiU9l-7+w=Bn;v#@_Y[TF[OE2%3{W:I!e* Cd+2T)J');
define('AUTH_SALT',        
'|qN{TWWdu0(b;cYC^nOW37p|~dg-_(-R|e*9M|7aQ8Iopt8$[(WM)&Y8-%8$XZY,');
define('SECURE_AUTH_SALT', 
'nA:i0v1^8I[o_s2{#hb!{#KCAF8*Le$J6N:,[KxBg4zQtb!S9Jd{Fap|1uq0,vMG');
define('LOGGED_IN_SALT',   '}R@{uPeR7V![oW$C)AL0Tn& 
|BY_J-`;hCo:,~5S;*$5Cvt ?&XO9;E~9 |iSaBH');
define('NONCE_SALT',       
'D*r_7P-?f<fb5XeM&`)Eq,}Uuj+`[qWCyJ^*#3[B~->BKG)9)#Mu5eCfM3}h$HTh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each 
a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the 
chosen
 * language must be installed to wp-content/languages. For example, 
install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable 
German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during 
development.
 * It is strongly recommended that plugin and theme developers use 
WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

