<?php
	include "config/db.php";
?>
<?php
	$check_user = $_SESSION['name'];

	$check_ses = $mysqli->prepare("SELECT `name` FROM users WHERE `name`=?");

	$check_ses->bind_param('s',$check_user);

	$check_ses->execute();
	$result = $check_ses->get_result();
	$row = $result->fetch_array(MYSQLI_ASSOC);

	$login_user = $row['name'];

	if(!isset($check_user))
	{
		header("Location: index.php");
	}
?>