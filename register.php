<?php
	include "config/db.php";
	include "include/header.php";
	include "include/nav.php";
?>
<?php
	if(isset($_POST['submit']))
	{
		if($_POST['name']!=null && $_POST['email']!=null && $_POST['password']!=null)
		{
			// $stmt = $mysqli->prepare("INSERT INTO users(name,email,`password`) VALUES (?,?,?)");

			// $stmt->bind_param('sss',$name,$email,$password);

			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			$checkexist = $mysqli->prepare("SELECT `name` from users WHERE `name`=?");

			$checkexist->bind_param('s',$name);

			$checkexist->execute();
			$res = $checkexist->get_result();
			//$row = $res->fetch_array(MYSQLI_ASSOC);
			$row = $res->num_rows;

			if ($row == 1) 
			{
				echo "User already exist";
			}
			else
			{
				// $stmt = $mysqli->prepare("INSERT INTO users(name,email,`password`) VALUES (?,?,?)");

				// $stmt->bind_param('sss',$name,$email,$password);

				$stmt = $mysqli->prepare("INSERT INTO users(name,email,`password`) VALUES (?,?,?)");

				$stmt->bind_param('sss',$name,$email,$password);

				//$stmt->execute();

				if($stmt->execute() === false) 
				{
				  trigger_error('Wrong SQL: ' . ' Error: ' . $mysqli->error, E_USER_ERROR);
				} 
			}
			
		}
	}
?>
<div class="row">
	<div class="col-sm-12">	
		<h1>Video Pedia : Register</h1>
	</div>				
</div>
<div class="row">
	<form action="" method="post" class="form-horizontal" role="form">
		<!-- Name -->
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label required">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name" id="name" required="true">
			</div>
		</div>

		<!-- Email -->
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label required" required="true">EMail</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" name="email" id="email">
			</div>
		</div>

		<!-- Password -->
		<div class="form-group">
			<label for="password" class="col-sm-2 control-label required" required="true">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="password" id="password">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input type="submit" value="Register" name="submit" id="submit" class="btn btn-primary">
			</div>					
		</div>
		
		<!-- Signin Form -->
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<span>Already Register?</span>
				<span><a href="index.php">Sign in.</a></span>
			</div>
		</div>
	</form>
</div>
<?php
	include "include/footer.php";
?>