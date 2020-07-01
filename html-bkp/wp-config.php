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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'yeti' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DB@Walrond' );

/** MySQL hostname */
define( 'DB_HOST', '10.6.221.40' );

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
define( 'AUTH_KEY',         '/z}HXPEiUe3q&X*oS&-H~v4T?U-i-`5V${,Ug1-->VuK.W@s^f3MyO2iW[3a269 ' );
define( 'SECURE_AUTH_KEY',  '2p6RH*yOp-NDJ.~/u!t?W>fy_;ph|MRxU,},SPda `z_QFzw;IId4nc~@@s1Nl-O' );
define( 'LOGGED_IN_KEY',    'vPN+-hDdO?b9IyUw&i[Cgz_xPL(~;v@(7myh4PD8l(Ya/M^Nvz[gfE[A>A}1@S4.' );
define( 'NONCE_KEY',        '6F3H]udMj2_SoJC~} fYq*.SVReD2c[k6S>Cg+qGD5{w6wgVo1b<4t SL&JTtJ:9' );
define( 'AUTH_SALT',        'NXfjJx}+9ud_G_Iq}`{8h?]tZ@>~B:2`goVb2v5^|z~vY%5k%w1(_*A?`TD}hqI*' );
define( 'SECURE_AUTH_SALT', 'iu_LwWaJmFmwmC)R0gJ>}C{W}Jv.Ck7&3G5@i*P+}pt.xe=%|Lt6_*s Bl~1{W,;' );
define( 'LOGGED_IN_SALT',   'a4#i}f_C<CI0o!3^n?KSfSm+l@;=h8w^v4(KnT&BqC<MCfYa(MtP*?K,yJ2d*PHi' );
define( 'NONCE_SALT',       'ecJ!@%rPt^:kl5]M8D0$aS<8Vi%^CgTDhw?zS)~&:]l3emTA^SHv3.o/n,Dk>:w1' );

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
