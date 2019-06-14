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
define('DB_NAME', 'restaurant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'NEzxyLW2@@MQYX5,/R&@~t~v;RHWxr+v$5c/%`=d?s7+YQTH>QZ!led(O^v8$cKl');
define('SECURE_AUTH_KEY',  'BW03+n!~14JxPa:,{Y6NeMB;KU1EgJ[;-p9>_yL,56Lp#)72LHrM5CR)CBTu0{{q');
define('LOGGED_IN_KEY',    'z[=Jj??dG6>!OY/2,`GI;hLG}%iQG1{hFD#>`y(47.Q`Xr.XT>zJma5E}0Y86$Rz');
define('NONCE_KEY',        'Bg!3$0Wn,e9x(CX#5qHVG$_y=eWj8)=C>v]<vLYra}n-o`jp5cb)8qI=e/Z&uU[#');
define('AUTH_SALT',        'soUP9h55z?ZQz~-mPc{t-A7!H(YQ bx{=%,D(,QxM/7w[}UvJ }DJ_zjCK2[k]6h');
define('SECURE_AUTH_SALT', 'eI!-;P.#:pfd,@2H1bky2 {M9FGz1g.BZTJP*%.]c)tUpX:kp2J>_ID|@v7aNcGx');
define('LOGGED_IN_SALT',   'rwsKb/6d~cS+h7TD~amCUS&x}O}g#KIqP=<+()@|NtV?:@^.lyCcmYxs;8a!Z@OD');
define('NONCE_SALT',       'mK +yLlB@``,#,{YgEbX;iEG-{3d3p7pyfF}hAbi5rQ7Lc5tlGPc>P}keX{Vc3_=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
