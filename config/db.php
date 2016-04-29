<?php
	session_start();
	$mysqli = new mysqli("localhost","root","","videopedia");
	if($mysqli->connect_errno)
	{
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
?>