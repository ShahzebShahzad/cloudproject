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
define( 'DB_NAME', 'cloud' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'TWl)Gt.=2Ai#-Rv:np`6Iudt7Y9}_E3yY9k*:i:n=8brauokLK{b15a~/=3/C)e!' );
define( 'SECURE_AUTH_KEY',  'J2U7<CX]SsnR_CwH.[k7zihy7,Ya^_J`aI)w(}zVDBvz+7s*0tM)?iS`DuI`HQYe' );
define( 'LOGGED_IN_KEY',    'X0)UlVb1Q2nT;E]tg6v2Ylc3o )@ReCEAY,q+e(&E.XW=4Z*%fZf%Q$7-u<{Jm`,' );
define( 'NONCE_KEY',        '(?A`ocvn_L>K^~H2ZkHx(jR-cWiJLzn>V43Aq+4-~~%N`j%0=uK^fD:)12Z{f.aq' );
define( 'AUTH_SALT',        ']YkN3)EIb3Q+GqI7fdQb+uApuE;5a-)1wmqJg_+cY&!!-;Axuov@9A^rr!l4nnMN' );
define( 'SECURE_AUTH_SALT', 's(7VsmPhYX(_DvB-OesHBvil}H@@Ol;zn2sfEC=M)n3_+h;}BLJ@DE82S}0^nN:d' );
define( 'LOGGED_IN_SALT',   'n5h`R;@lP(2DSGl?OG!.Os;LWgO3%)9Yg`JoSHEqGM::WSyPKl({[?CS6~Xj#l?T' );
define( 'NONCE_SALT',       '@v4-_g)@%3Gv+T;,[==f:8@l43[/^vG 96vJoT+N!^@_yhC-aaVkiO!8bBHpB0Nz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cc_';

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
