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

define( 'DB_NAME', "StreetDog" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "root" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '{MkVF/jOTrS-}GR@MXloff>7rpQ(bU}5%iP^6pq>s/@m0X?B40@uH~a}WqQ#!UHu' );

define( 'SECURE_AUTH_KEY',  ':#b|OhE:@g2zRJYW0]1#dojdCRa^_n!oJfwh4*4~Fy,jQeYq|r;3`vaKt!LA%:M8' );

define( 'LOGGED_IN_KEY',    '%^5]y7K[ySy/O((]MZJ-yDjPBAT+7cTz`S,HlPOlhtqw;l>of$s+;#wyoz-3<Qi3' );

define( 'NONCE_KEY',        'e=[205k6F,X3(#%w_+e}!.yl*Rte%l[d*_7;P@^(]8E3Eb.mee=(HJPM?Ge52%/>' );

define( 'AUTH_SALT',        '||xdKS~:`.DC[{guD@*)ZmV0JRmz9%*1kSkACJ[sL$D5S!RhLf.8q&xYf0N(@[ic' );

define( 'SECURE_AUTH_SALT', 'n3v6)w`F1$J E5LN1&3sDX}Gh0V3UU}Te5@.>1jm!-lS`v5?RG2!4IR(b.9VXQ~f' );

define( 'LOGGED_IN_SALT',   'vkxm!T*}SDz5w}Ze-LFJK%qhyHv-F/qJYk_X9I-9!kxK9J)61bx]?9B60RsET+L~' );

define( 'NONCE_SALT',       'KC&4*DhpKuOdz0<v;6w u-![~UmRpOV1;.u<K*89qW?%F#H>vZFo/y#K|]#%$/f,' );


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

