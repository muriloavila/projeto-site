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
define('DB_NAME', 'site_db');

/** MySQL database username */
define('DB_USER', 'conexao');

/** MySQL database password */
define('DB_PASSWORD', 'bad27robot');

/** MySQL hostname */
define('DB_HOST', 'site-db.cspx6pvikryz.us-east-2.rds.amazonaws.com');

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
define('AUTH_KEY',         ',b6NNu[siAodAH5;]|,~@Qe~ybss*nH=TX^wu%V%6--8_e,!:2ti7Ew*Wg[rYNlE');
define('SECURE_AUTH_KEY',  '[F8JM<O)?@8hyJ{~N}NlD 8xW20t{oTl/!ZQI-|MJkzj4A+Fcw[_Fv,-J]dVsz}>');
define('LOGGED_IN_KEY',    'GTi?cJoN0IkIP>qd/znsZ/{[wpt>EnFdaPAB~mnZoXG-9~y^w1cRM_9 {jt!%%$G');
define('NONCE_KEY',        ' T_p!r{#DCsd0g`48jMjSRU.eIj9pY_HH>C-/An:l^FE/FMtbnNCch_e+4j%eU0a');
define('AUTH_SALT',        '|p%H{P#:SA8Y/td}Ham~;8D<#OuY[V1jv6qGN*]Kr`E3WfQHDQYg,7yh^x8_h/(<');
define('SECURE_AUTH_SALT', '-F3~3Cn9*j&&rb=_b6C/MIr1P>_u}CK9|-[?ru>j}<Uz#fA42$|<`9 P2<:vy?O7');
define('LOGGED_IN_SALT',   'y#dQs]y?lU$2j(k{wEP,p>y;NIWe?Bgh.<ih3!`9pR^1;w3ApV5_@:nv%KKC958[');
define('NONCE_SALT',       'sFrR=|1#&p?j2V{y{bS;nOPtwGn<GNeG$%vfGmOQY9KeKpoLTAO:o2{rWkcdxOi$');

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
