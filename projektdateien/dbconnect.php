<?php
	$dbuser = "db_user";
	$password = "byWn6JA942tUQMuw";
	$dbserver = "localhost";
	
	$db = mysqli_connect($dbserver, $dbuser, $password) or die("Verbindung zur Datenbank gescheitert!");
	mysqli_select_db("eventmanager", $db);
?>