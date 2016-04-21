<?php
	include "../config/db.php";
	include "../include/admin/header.php";
?>
<?php
if(isset($_POST['submit']))
{
  if($_POST['description']!=null){
     $stmt = $mysqli->prepare("INSERT INTO categories(description) VALUES (?)");
     $stmt->bind_param('s', $description);
 
     $description = $_POST['description'];
 
     $stmt->execute();
     header("Location: category.php");
 }
}
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Video Pedia : New Categories</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3 border">
		<p>sidebar</p>
		<?php include "../include/admin/nav.php"; ?>
	</div>
	<div class="col-sm-9 border">
		<p>content</p>

		<form action="" method="post" class="form-horizontal" role="form">
			<div class="form-group">
				<label for="description" class="col-sm-2 control-label">Description</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="description" id="description">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="Add" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>
<?php
	include "../include/admin/footer.php";
?>