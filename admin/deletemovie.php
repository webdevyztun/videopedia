<?php
	include "../config/db.php";
	if(isset($_GET['d'])):
		$id = $_GET['d'];
		$stmt = $mysqli->prepare("DELETE FROM movies WHERE id=?");
		$stmt->bind_param('s',$id);

		if($stmt->execute()):
				echo "<script>location.href='movie.php'</script>";
			else:
				echo "<script>alert('". $stmt->error ."');</script>";
		endif;
	endif;
?>