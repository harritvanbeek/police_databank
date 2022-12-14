<?php
	defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

	/* ini_set('session.cookie_samesite', 'None');
	ini_set("session.hash_function","sha512");

	$secure     = false; 	// if you only want to receive the cookie over HTTPS
	$httponly   = false; 	// prevent JavaScript access to session cookie

	if(PHP_VERSION_ID < 70300) {
		session_set_cookie_params(1800, '/; samesite=\'None\'', $_SERVER['HTTP_HOST'], $secure, $httponly);
	}else{
		session_set_cookie_params([
			'lifetime' => 1800,
			'path' => '/',
			'domain' => $_SERVER['HTTP_HOST'],
			'secure' => $secure,
			'httponly' => $httponly,
			'samesite' => 'None'
		]);
	} */

	session_start();

    if(file_exists(BPATH_CONFIGURATION . '/devConfig.php')){
        require_once BPATH_CONFIGURATION . '/devConfig.php';
    }else{
        require_once BPATH_CONFIGURATION . '/configuration.php';
    }

	ob_start();
	    $config = new Config;
	ob_end_clean();

	// Set the error_reporting
	switch ($config->error_reporting)
	{
		case 'default':
		case '-1':
		break;

		case 'none':
		case '0':
			error_reporting(0);
		break;

		case 'simple':
			error_reporting(E_ERROR | E_WARNING | E_PARSE);
			ini_set('display_errors', 1);
		break;

		case 'maximum':
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
		break;

		case 'development':
			error_reporting(-1);
			ini_set('display_errors', 1);
		break;

		default:
			error_reporting($config->error_reporting);
			ini_set('display_errors', 1);
		break;
	}

$GLOBALS["config"]	=	[
	"mysql"		=>	[
		"host"		=>	"{$config->local_host}",
		"username"	=>	"{$config->local_dbuser}",
		"dbName"	=>	"{$config->local_dbname}",
		"password"	=>	"{$config->local_dbpassword}",
	],

	"fivem"		=>	[
		"host"		=>	"{$config->fivem_host}",
		"username"	=>	"{$config->fivem_dbuser}",
		"dbName"	=>	"{$config->fivem_dbname}",
		"password"	=>	"{$config->fivem_dbpassword}",
	],

	"boann"		=>	[
		"user"		=>	"useruuid",
		"TabUuid"	=>	"uuid",
	],
];


//import function
require_once BOANN_LIBRARIES . '/function.php';
require_once BOANN_LIBRARIES . '/loader.php';
