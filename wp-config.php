<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'articles' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' G0q^.H:f 2#x?*q 7/k~lB35hzOP1L`lq||@).p7.FRgpURsVZJnOdq;zd@aF2j' );
define( 'SECURE_AUTH_KEY',  'Lq:8h*Lx,i|LA%?g_0BPFPM[Bm]d[)v5 RL Y5t8lHdnYT=fb*EPFXA,.V/@m_d,' );
define( 'LOGGED_IN_KEY',    '/h%uo/ohQo]SSB<A0sA%,C <ZC{tbBCL`D*+D/,;v?V-<81H<hkk*C{ U?Sj(Lt|' );
define( 'NONCE_KEY',        'W[s[ctrr+ok3aFX:#H}.jO(b%xJa|kz:KGnCs@d|*VabzMQ%ywLz0qVspQ.<)=Mm' );
define( 'AUTH_SALT',        '#)_&!a,bI_Zw~K^dN2El=F#f6D#8WQ!1`+*G>CU?]AR#dv)o|HjSWo(~fADa)_Qw' );
define( 'SECURE_AUTH_SALT', 'QhZ7{aP3{MNEV^;3#UoOkY,;P+&JuStjLZV+R#ftH2toUi;9UR&SH^r-<~yZ}e#]' );
define( 'LOGGED_IN_SALT',   'G7};h/Q&Dw+@0J5(p^;P6rRd:EZkj(i2I8_3hO3A@m;M]r-:q%}VI2I.KmF@skcp' );
define( 'NONCE_SALT',       '6-B(WiP_ .8=;(Mu6Jox+vmTS/=VV?@n!9 4@cJQg55RC>~C?llXd7iu!z{*h3`_' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
