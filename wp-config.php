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
define('DB_NAME', 'eats_blog');

/** MySQL database username */
define('DB_USER', 'eatsAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'Pass2019');

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
define('AUTH_KEY',         '5O<tlbVH-vhL[y{GAKI?0-S{y@5#,++7G6JRg~M..pYZX$bm5T?X8LQa+d2Z%Y=z');
define('SECURE_AUTH_KEY',  '$P;4okq!Y`Oc;=%l#l!v!f)Czfzm+*0(vTN?@[<LJIHP-Q+|KAft19gMY(_HJ!|-');
define('LOGGED_IN_KEY',    'T3:|k33[9/y|/7{-dO2@eTRfVGP-1W<@)[|ZJxW4!iw`=v1 ocTU]W=]h].H9Pl*');
define('NONCE_KEY',        'CdR0d%6}&mhgE[^5zb_T NJ5h1- Ft[k]8-EtzF 712vL/5@^.IH9uD|vJ!^y+O7');
define('AUTH_SALT',        '+!rV,{#UR)gR`3I7oC3FWue4<5|W`$-#CjwJpwJm9|pOP=Z#B|Y&?u<QOFc|K+B$');
define('SECURE_AUTH_SALT', '16<BR^0>r}L%[.X0`Z5+Jl3TZzs3UWt6fJs_~ePz]+W6|+;IUGyek^S$t<f)`D+J');
define('LOGGED_IN_SALT',   '!Vv ,#|C`*Pz?>+5--3OPS9#a1~x A8lA]j,cO>j PVSYCvA|G%9k=2:097^,/;N');
define('NONCE_SALT',       'RF=emkt;N_aZ$8UL!^yq.w(&H%IdMM+|*t:CJ4Il[rJA$,$m%86^d,=yW2BtkiTy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ebdb_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
