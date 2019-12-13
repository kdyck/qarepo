<?php

/**
 * Define configuration environments based on hostname
 */

switch ($hostname) {
	case 'qarepo.local':
		define('WP_ENV', 'local');
		break;

	case 'qarepo-st.local':
		define('WP_ENV', 'staging');
		break;

	default:
		define('WP_ENV', 'production');
}
