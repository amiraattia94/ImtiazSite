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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'AlaimtiazDB' );

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
define( 'AUTH_KEY',         'e]C2 M1Wfx[IJu$]7x |.L[38|Sg`vUM,$R;&P{Ah^ ]H^kDtCqRjU@v`x$1>w#8' );
define( 'SECURE_AUTH_KEY',  ']z3jheKC :E6%0*cJgIFvX!a8RvOyXz2JXO[f;TV!I71%Ouu:7FDgEF*85UyTD4l' );
define( 'LOGGED_IN_KEY',    'j[9HMP1d#v]-7OdQ`9O4cZp`T406r[|3x:!>,`yBCfF4S`Yb0N%8|7lNb/sAsd++' );
define( 'NONCE_KEY',        '6]@J>$<5|1B%qBQ7=32u^6/el4?|<Icl.2~h(7H8^2w,+U(#HFyW!~H{IK5!)iB~' );
define( 'AUTH_SALT',        'q=}Fk2cvG]|^mP7Q;v5RE| uW6]z{E[]_+GRzGYF^?UVoV g6|LxdVI.bA$p}kra' );
define( 'SECURE_AUTH_SALT', '%k01e^r2*I;E#&ab>4J,c%|XqU!7Z.}@$A3k#LDG1vZH`0kliI8^$Vu5/|cuGQG.' );
define( 'LOGGED_IN_SALT',   '-6u4,JalW]s+mNWI=g9%F+IiD>rye0#M; shORGo&TrtUsbW149U,mwfLr3K-ooY' );
define( 'NONCE_SALT',       '$SIB#pc4e8Ru:k~rV~xox(KgV<dx8]Ys6d-#esme87O*#JkC!iS8jeH0r,;YX{-t' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
