<?php
	include "../config/db.php";
	include "../include/admin/header.php";
	$currentPage = 'category';
	
	if(isset($_GET['u'])):
		$id = $_GET['u'];

		if(isset($_POST['submit'])):
			$stmt = $mysqli->prepare("UPDATE categories SET description=? WHERE id=?");
			$stmt->bind_param('ss',$description,$id);

			$description = $_POST['description'];
			$id = $_POST['id'];

			if($stmt->execute()):
				echo "<script>location.href='category.php'</script>";
			else:
				echo "<script>alert('". $stmt->error ."')</script>";
			endif;
		endif;

		$category = $mysqli->query("SELECT * FROM categories WHERE id=".$id);
		$row = $category->fetch_assoc();
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Movie Pedia : Edit Category</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<?php include "../include/admin/nav.php"; ?>
	</div>
	<div class="col-sm-9">
		<form action="" method="post" class="form-horizontal" role="form">
			<input type="hidden" value="<?php echo $row['id']; ?>" name="id" id="id">
			<div class="form-group">
				<label for="description" class="col-sm-2 control-label">Description</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="description" id="description" value="<?php echo $row['description']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="Edit" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>
<?php
	endif;
	include "../include/admin/footer.php";
?>