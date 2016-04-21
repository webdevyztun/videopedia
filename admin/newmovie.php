<?php
	include "../config/db.php";
	include "../include/admin/header.php";
?>
<?php
	if(isset($_POST['submit'])){
  if($_POST['description']!=null){
     $stmt = $mysqli->prepare("INSERT INTO categories(description) VALUES (?)");
     $stmt->bind_param('s', $description);
 
     $description = $_POST['description'];
     
 
     $stmt->execute();
 }}
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Video Pedia : New Movies</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3 border">
		<p>sidebar</p>
		<?php include "../include/admin/nav.php"; ?>
	</div>
	<div class="col-sm-9 border">
		<p>content</p>

		<form method="post" class="form-horizontal" role="form">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" id="name">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input id="submit" name="submit" class="btn btn-primary" type="submit" value="Add">
				</div>
			</div>
		</form>
	</div>
</div>
<?php include "../include/admin/header.php"; ?>