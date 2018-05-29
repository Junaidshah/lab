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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FRyBguJaFFxkeXgPGseShOG8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vUqTUT&g7LEeexYlu#r*O|}&3j%Wp}N@=VSwmDjsVkD5!zvpCpVosLiO[H4wc|0Z' );
define( 'SECURE_AUTH_KEY',  '}(&DGHtYZa7^h[4D0h<7$?X`D1!-E3_C;qHD{e% vdAaj5^?~< *g9TrD|u;0=(<' );
define( 'LOGGED_IN_KEY',    '}d{ziOuBv<(Cp>CieA(qY,e1?||w%6B.A?M#0I s@YRoR3]l#cyB]F-VP[w*(E!&' );
define( 'NONCE_KEY',        'E:^E!Jt|+#}xZ3Gv~=mhJd=z@PX&qfJGN!3;wjOfJrI9qGHP^;+^8/We5b>=hliY' );
define( 'AUTH_SALT',        's{jm|+%Uw2pJJQ<~JYu4ogO.Mqj@*et]wl`*UjZ6fG=7[F#GP*2+W&uRN{ZVVn{>' );
define( 'SECURE_AUTH_SALT', 'n=^&YK.zl=Q}5]+}[J?NPE }0~h<@hKt6+x7AG9S?+:>:JwGnDq<^#q.:P FSyTm' );
define( 'LOGGED_IN_SALT',   ':LXz%|&G-U(tNPY))6g?i/9!T9^^y|Yco(,x<M{yYC&BI9T,j=Ha@2vI_U_2NE$f' );
define( 'NONCE_SALT',       'M&rJ!KQEx&&_jIRL+%%7]+iKP0,?V>-&S$v|;`60?p%oA=e0!f *)>~#mj9@D,u}' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SAVEQUERIES', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
