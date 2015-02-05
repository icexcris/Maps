<?php

//Database Credentials
	$db_driver	= '';
	$db_host 	= '';
	$db_user 	= '';
	$db_pass 	= '';
	$db_db 		= '';
//Database Connection
try{
	$db = new PDO("{$db_driver}={$db_host};dbname={$db_db};", $db_user, $db_pass);
}catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
//script variables


//autoloader