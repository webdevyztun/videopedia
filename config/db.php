<?php
	$mysqli = new mysqli("localhost","root","root","videopedia");
	if($mysqli->connect_errno)
	{
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
?>