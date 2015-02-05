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

//theme
	require_once "../themes/libs/Smarty.class.php";
	require_once "theme.php";
//script variables

//autoloader

	function autoLoad($class){
		$director = "classes";
		$file = $director."/".$class.".class.php";
		if( is_file() ){
			//include
		}
	}