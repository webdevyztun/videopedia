<?php
	include "config/db.php";
	include "include/header.php";
	include "include/nav.php";
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
				<input type="text" class="form-control" name="name" id="name">
			</div>
		</div>

		<!-- Email -->
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label required">EMail</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="email" id="email">
			</div>
		</div>

		<!-- Password -->
		<div class="form-group">
			<label for="password" class="col-sm-2 control-label required">Password</label>
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