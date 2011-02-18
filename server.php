<?php

db_connect();

function db_connect() {
	$result = new MySQLi('localhost', 'David', 'OSB', 'OSB_test');
	
	if (!$result) {
		throw new Exception('Could not connect to database server');
	} else {
		return $result;		
	}
}
?>