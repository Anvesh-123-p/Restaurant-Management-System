<?php

function Connect()
{
	$dbhost = "remotemysql.com";
	$dbuser = "wCQV7YHzay";
	$dbpass = "dLmHMh0ADL";
	$dbname = "wCQV7YHzay";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>
