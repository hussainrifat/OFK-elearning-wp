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
define( 'DB_NAME', 'ofkbsazj_db_main_site' );
/** MySQL database username */
define( 'DB_USER', 'ofkbsazj_db_main_adm' );
/** MySQL database password */
define( 'DB_PASSWORD', 'Be a hitler 007' );
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
define( 'AUTH_KEY',         'il&NE4gZ26Ds,hSoa2+kG0N7C/dGcY8HQiH{<B^%1Ud/E.q5o5k`:4mCjfE=5.O,' );
define( 'SECURE_AUTH_KEY',  '..16u+Hf^ta/.)q FUkp&H MVH>--oE8Rj;yDeyCmntgxM;8ONhuacee7[>R=;=Y' );
define( 'LOGGED_IN_KEY',    'd`QVxf&0{p$h7GT*^^~gWEHm]I[A7Usj}wtb,/Z|^>=PA$dSezFrddIq1mrVq4tS' );
define( 'NONCE_KEY',        'a&9+&m1VfM.mu63.Yv8q;!_uGCe!(z/}WaETQQc8#^%7;,n-YCd1kWZ>HO3hugNe' );
define( 'AUTH_SALT',        '{3R,w.%:Q8cA:g{ZI_gX9_*%f?jXE/g,hfNh,.gU5_Loz{s4)1sNld3[Ww&WcfP9' );
define( 'SECURE_AUTH_SALT', 'x(8l0}XEg<Ic}:^#tT@Ydvo9-xqE1>-Ck7Fp{=Tg.E3[mfLmBp5i.i},pV{0JZLG' );
define( 'LOGGED_IN_SALT',   'Mmj5ow47E45kRjgdZ|KJ7aHK2y{*fvrNT7eA)Ki+@-}rWR@7;c@g0|$Dx[! 7qma' );
define( 'NONCE_SALT',       '96C:E~Vsh-y|(xG<sb|P72d{s@YJ{3)<B v]Xn}X#Vqz=$w3xtpI:J91(35B/omm' );
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
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );