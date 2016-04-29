<?php
	include "include/login_check.php";
	//include "config/db.php";
	include "include/header.php";
?>
<?php
	if(isset($_POST['submit']))
	{
		if($_POST['name']!=null && $_POST['password']!=null)
		{
			$name = $_POST['name'];
			$password = md5($_POST['password']);

			$login = $mysqli->prepare("SELECT uid FROM users WHERE `name`=? and `password`=?");

			$login->bind_param('ss',$name,$password);

			$login->execute();
			$result = $login->get_result();
			$row = $result->num_rows;

			if($row == 1)
			{
				$_SESSION['name'] = $name;
				header("location: home.php");
			}
			else
			{
				echo "Can't Login";
			}
		}
	}
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Video Pedia : Login</h1>
	</div>
</div>
<div class="row">
	<form action="" method="post" class="form-horizontal" role="form">
		<!-- Name -->
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name" id="name" required="true">
			</div>
		</div>

		<!-- Password -->
		<div class="form-group">
			<label for="pasword" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="password" id="password" required="true">
			</div>
		</div>
	
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Login" class="btn btn-primary">
			</div>
		</div>
		
		<!-- Sign Up Form -->
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<span>Need an account?</span>
				<span><a href="register.php">Sign up.</a></span>
			</div>
		</div>
	</form>
</div>
<?php
	include "include/footer.php";
?>