<?php
	define('DB_HOST', 'localhost');
    define('DB_USER', 'cooproperty');
    define('DB_PASSWORD', 'iOTp0BtMNp01a0cx');
    define('DB_DATABASE', 'cooproperty');
	
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}

	
	//Select database
	$db = mysql_select_db(DB_DATABASE,$link);
	if(!$db) {
		die("Unable to select database");
		
	}
	
	
	
?>
