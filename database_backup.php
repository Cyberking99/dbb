<?php

    error_reporting(0);

	include 'backup_function.php';

	if(isset($_POST['backup'])){
		
		$server = $_POST['server'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$dbname = $_POST['dbname'];
		
		backupDB($server, $username, $password, $dbname);

		exit();
		
	}
	else{
		echo 'NOTE: Fill All Required Field!';
	}

?>