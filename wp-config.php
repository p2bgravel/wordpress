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
define( 'DB_NAME', 'cms' );

/** MySQL database username */
define( 'DB_USER', 'cms' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cms' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$x1{~yHEp`F2;7p07^ZfPZz^&d77eR{./zHP($R&{3cAnZdaoF{y|I)n,[e,(_FA' );
define( 'SECURE_AUTH_KEY',  'TIp:vc_5fZqp9$;$||k?/pZ:g7wCb5MZgxyAe[XvQcMZ@koeoR?d,e6V-*{@X<).' );
define( 'LOGGED_IN_KEY',    'jd+0q$GX9pCsvb8vC*{b:C!KbmW*Oz!CcadK1a2sWy;%gs1_/2u&i>em5?kt*H}6' );
define( 'NONCE_KEY',        'Vgr;{v`-s`eQ=(hFlBRQTlG%,uoHQ+K$;l2a{yNz?$tE -Ew -{u={Jg!qD[EZ-h' );
define( 'AUTH_SALT',        'Q=?P[|JXwet!N}CLiX5+h#l<7,*~P~fjTI:iB&*&uUk(c;Bh[2^ _53mBdnLTGU-' );
define( 'SECURE_AUTH_SALT', '1Q?fsUwA?]=N4|*wXJsR=P{bE:#JS]b:5hD(sqy6-B:YT`P^9jQml=ylZQ<vOTY/' );
define( 'LOGGED_IN_SALT',   'fkDt:(cuzg~P4*@TH4}wkQY~rj/`a0dc4PhM.F?_=5Y/-R1>jN~H-M1DcP#$uKup' );
define( 'NONCE_SALT',       'x1G[D~ndw7xWqkTOp>:{<o8a2S!2%x7Y[(k9Ab@vy&yu5ua+HI&g+[mjHUBB*L!Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
