<?php
	include "../config/db.php";
	include "../include/admin/header.php";
	$currentPage = 'category';
?>
<?php

if(isset($_POST['submit'])){
  if($_POST['description']!=null){
     $stmt = $mysqli->prepare("INSERT INTO categories(description) VALUES (?)");
     $stmt->bind_param('s', $description);
 
     $description = $_POST['description'];
     
 
     //$stmt->execute();
     if($stmt->execute()):
			echo "<script>location.href='category.php'</script>";
		else:
			echo "<script>alert('". $stmt->error ."')</script>";
	endif;
 }}
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Movie Pedia : New Categories</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<?php include "../include/admin/nav.php"; ?>
	</div>
	<div class="col-sm-9">
		<form action="" method="post" class="form-horizontal" role="form">
			<div class="form-group">
				<label for="description" class="col-sm-2 control-label required">Description</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="description" id="description" required="true">
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