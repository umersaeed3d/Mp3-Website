<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbase = "music_website";
	$db = mysqli_connect( $server, $username, $password, $dbase); 

	if (!$db) {
		die("Database connection failed.");
	}
?> 