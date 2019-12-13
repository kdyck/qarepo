<?php

/**
 * Development environment config settings
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qarepo-wp' );

/** MySQL database username */
define( 'DB_USER', 'qarepo-wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'en3rgytypEv0!d4l!fERr$' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', false );

/**
 * Front-end redirect to SSL
 */
define('FORCE_SSL', true);

/**
 * Admin area require SSL
 */
define('FORCE_SSL_ADMIN', true);

/**
 * Mail settings
 */
//define('MAIL_DEBUG', 2);
define('MAIL_MODE', 'smtp');
define('MAIL_PORT', 587);
define('MAIL_HOST', 'mail.qarepo.com');
define('MAIL_USERNAME', 'sendAuth@qarepo.com');
define('MAIL_PASSWORD', 'changeme_imnotsecure');

/**
 * Google Maps settings
 */
// define('MAPS_API_KEY', 'AIzaSyD7uKsSMRcymEPNF7QW7kB11rwpTOjTA0Q');
// define('MAPS_BROWSER_KEY', 'AIzaSyCM_WnF3-5gpnU--IFKf9EbJvK8_OMDQ7Q');


/**
 * Contact settings
 */
define('CONTACT_EMAIL_FROM_NAME', 'QARepo');
define('CONTACT_EMAIL_FROM_ADDRESS', 'no-reply@qarepo.com');
define('CONTACT_EMAIL_SUBJECT', 'QARepo Website Contact Request');
define('CONTACT_EMAIL_TO_ADDRESS', 'kdyck00@gmail.com');

/**
 * reCaptcha settings
 */
// define('RECAPTCHA_ENABLED', false);
// define('RECAPTCHA_SITE_KEY', 'CHANGEME');
// define('RECAPTCHA_SECRET_KEY', 'CHANGEME');

/**
 * Kickbox settings
 */
// define('KICKBOX_ENABLED', true);
// define('KICKBOX_API_KEY', 'test_458c6b9398ab0d1fa086d95c6ad7200509ebe186735a0f2b32ca60d9178540a1');

/**
 * Multi-lingual settings
 */
define('MULTILINGUAL_ENABLED', false);
