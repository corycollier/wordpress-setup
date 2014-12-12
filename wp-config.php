<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// specify the known environments here
$environments = array(
    'production'    => array(
        'DB_HOST'     => 'localhost',
        'DB_NAME'     => 'wp_production',
        'DB_USER'     => 'wp_user',
        'DB_PASSWORD' => 'password-value',
        'DB_CHARSET'  => 'utf8',
        'DB_COLLATE'  => '',
        'WP_DEBUG'    => false,
    ),

    'staging'   => array(
        'DB_HOST'     => 'localhost',
        'DB_NAME'     => 'wp_staging',
        'DB_USER'     => 'wp_user',
        'DB_PASSWORD' => 'password-value',
        'DB_CHARSET'  => 'utf8',
        'DB_COLLATE'  => '',
        'WP_DEBUG'    => false,
    ),

    'development'   => array(
        'DB_HOST'     => '127.0.0.1',
        'DB_NAME'     => 'wp_development',
        'DB_USER'     => 'wp_user',
        'DB_PASSWORD' => 'password-value',
        'DB_CHARSET'  => 'utf8',
        'DB_COLLATE'  => '',
        'WP_DEBUG'    => true,
    ),

    'qa'        => array(
        'DB_HOST'     => 'localhost',
        'DB_NAME'     => 'wp_qa',
        'DB_USER'     => 'wp_user',
        'DB_PASSWORD' => 'password-value',
        'DB_CHARSET'  => 'utf8',
        'DB_COLLATE'  => '',
        'WP_DEBUG'    => true,
    ),
);


// determin which environment is being served. Default to produciton
$env = getenv('APP_ENV');
if (! $env) $env = 'production';
$env = $environments[$env];

// check for local settings
if (file_exists('wp-config.local.php')) require(ABSPATH . 'wp-config.local.php');

// ** MySQL settings - You can get this info from your web host ** //
define('DB_HOST',     $env['DB_HOST']);
define('DB_CHARSET',  $env['DB_CHARSET']);
define('DB_COLLATE',  $env['DB_COLLATE']);
define('DB_NAME',     $env['DB_NAME']);
define('DB_USER',     $env['DB_USER']);
define('DB_PASSWORD', $env['DB_PASSWORD']);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/**#@-*/

/** Sets up WordPress vars and included files. */

define('FS_METHOD',        'direct');
define('AUTH_KEY',         'k3dO3=2i_h?5E(-x|+mmo)X0AYHE)2&4 wz*g*O5Kh-2.Y[cIFvI;l;;v*Ws@1X(');
define('SECURE_AUTH_KEY',  '}`uL+vU9yG[uueTY<BL3qV+0l2;l,#igf;+0+V UBl!Ktrr8RAUoJyitr41$_1cC');
define('LOGGED_IN_KEY',    '=oG<9~cdmQ_tkEd+J^/:3YW)`Ce~([A  AL,Hr1]uQ=Ca pq:a%O&tF-CGQ*#=o9');
define('NONCE_KEY',        'mV*7LjL-7GwU^_#KTm&_1GolUqmln-P--bQl(t/P<0f+AD[cSotY7I1bmWW#zsFW');
define('AUTH_SALT',        'lK.iUWBy,vl[dqoBpE;(oW9B,66g^c|c5voO{1@7oJC8PVvsd5{-k#}X$Z:F$Lju');
define('SECURE_AUTH_SALT', '] x)($b1+i|236lg3p)0DPm j /#/w+$nKN_(ay_B{X/6E`]&!-/qg^&ue_w2#6r');
define('LOGGED_IN_SALT',   'J|1g{.6=2:n=6!%K;6HT4vp_biPx(4t^Qfba&/Nj-:$cf2_/6&vRPo|v-|Tx.1tA');
define('NONCE_SALT',       '(@wPsz}j>0@On =His,|,o1bUVAJZ0qNFOoNr1@@Bs[]60fCm^iSWn3f{3^MHe|1');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', $env['WP_DEBUG']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');