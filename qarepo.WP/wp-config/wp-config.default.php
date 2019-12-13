<?php

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * ACF Activation Key
 */
// define('ACF_ACTIVATION_KEY', 'b3JkZXJfaWQ9NzMzNjN8dHlwZT1wZXJzb25hbHxkYXRlPTIwMTYtMDEtMjMgMDM6MjE6NDc=');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AK%sy_Q2S6>q.8m[>vFi-sby+fcTOBe#kNSL*Dk|[_O>ZXB:jWe+By_]Kq.:bl.B');
define('SECURE_AUTH_KEY',  '20.S6b-+{+elo&?/u|HDyOmI=gQY-F(),$- `-n(=-cR<B/}PY-:Bbfllfqv=<L^');
define('LOGGED_IN_KEY',    ':[Az>y6P*Wl[pxY!s -8QyAQw7;Kf*ZLU 84S|sffOQY#@b$Py|>.f5|7R~@=F9A');
define('NONCE_KEY',        '`P{5s-_-H,}&57Y/{Fw|iFS:dz4JP_m0.4cEr-JFRG:7Y&]Bk3@NzkvV%AuSA}Do');
define('AUTH_SALT',        'ARlNI`+$m`kh[VUEI%pej{ i8/w^Y-Yb*K9gu}GGQDM:r?v}&oYu6dCC)$m7asp4');
define('SECURE_AUTH_SALT', '97i|3^83DCx|8x~<oaC*6C=XnTqd6%322o+N#6%<corf9C ;&x6r ~+vbr1cXvVM');
define('LOGGED_IN_SALT',   'D)0DrZ++hQu0VhQ$]ZKrjwy,4r`o/nlj{jW*v=m-t#AZT<tI!^H}/%5Kev+.|lVA');
define('NONCE_SALT',       'leQkEA_QS5TI@J*e8$:]X| p*)jYA$:B3r4Yk[7W>cH|k|}Nt?3*%^sp+>,?ic0*');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Admin File Upload Restrictions
 */
define('ALLOW_UNFILTERED_UPLOADS', true);

/**
 * WordPress Amount of Post Revisions to Keep
 */
define('WP_POST_REVISIONS', 10);
