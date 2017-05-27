<?php
if (file_exists('config.php')) {
	require_once('config.php');
}

//Libraries
//print_r(DIR_LOGS);

function error_handler($errno, $errstr, $errfile, $errline) {
	global $log, $config;
	$handle = fopen(DIR_LOGS, 'a');
	switch ($errno) {
		case E_NOTICE:
		case E_USER_NOTICE:
			$error = 'Notice';
			break;
		case E_WARNING:
		case E_USER_WARNING:
			$error = 'Warning';
			break;
		case E_ERROR:
		case E_USER_ERROR:
			$error = 'Fatal Error';
			break;
		default:
			$error = 'Unknown';
			break;
	}
	if (in_array($errno,array(E_USER_NOTICE,E_USER_WARNING,E_USER_ERROR))) {
		/*if ($config->get('config_error_display')) {
			echo '<b>' . $error . '</b>: ' . $errstr . ' in <b>' . $errfile . '</b> on line <b>' . $errline . '</b>';
		}
		
		if ($config->get('config_error_log')) {*/
			//$log->write('PHP ' . $error . ':  ' . $errstr . ' in ' . $errfile . ' on line ' . $errline);
			
			
			fwrite($handle, 'PHP ' . $error . ':  ' . print_r($errstr, true) . ' in ' . $errfile . ' on line ' . $errline . PHP_EOL);
		//}
	}

	return true;
}
	
// Error Handler
set_error_handler('error_handler');
$a = array(1,2,3,4,5,6,7,8,9,0);
//trigger_error(print_r($a, true));
//trigger_error('qwertyuiop');

//require_once 'files.php';
require_once 'regexp.php';
?>