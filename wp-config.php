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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Not using FTP. */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PZDa#p~*Nl8DVrl&MsR{1qMFNp6HY5@j0p.jGFB5e+mU)9jZS>+~$~ZE2R)8-/r1' );
define( 'SECURE_AUTH_KEY',  'e{?UUO*c%kSg@z{Yt9/nikyzDJ#V,96O-P{tp)*`/3$0eQ8)FG@O9gL57$],=|$e' );
define( 'LOGGED_IN_KEY',    'ZT< M%<F{.+r%p4#[25@-=2*muLWI8E9j2%k9|OzjV`nixNr5a]39%Qf~f{I+(hE' );
define( 'NONCE_KEY',        'Fu&}@J`:+0X&GBfO@v*%|fm Y.MFFbh!AG267qn0&E[`uGAS+P/T!X<PEBEAv5:U' );
define( 'AUTH_SALT',        'TlwxbqNQG1q08y4+3FK@=C9Mk@o/F1|Ts+^N)g%^Q|[pTa#`9&C7mA=eq44Cnu3z' );
define( 'SECURE_AUTH_SALT', '+Gf#E(%#Xd2%7d{j)Tol%s~Tj.Ted2{Or/4%HyYg}VC):rg@2d958. ueT0bf`/o' );
define( 'LOGGED_IN_SALT',   ']]E<d!&C*H=J7V*u*d8p%k:mdUixy:xpfk>J./[BR>&p(srTA.0mj*-Zi2PG5im&' );
define( 'NONCE_SALT',       'z;~F0uSRX>`tB<e4}gE2E5zCMQ#@|B%qx}Bhs2jK.=21W`2^aQBFF5+aYb1D>`w,' );

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
