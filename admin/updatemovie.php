<?php
	include "../config/db.php";
	include "../include/admin/header.php";
	if(isset($_GET['u'])):
		$id = $_GET['u'];

		if(isset($_POST['submit'])):
			$stmt = $mysqli->prepare("UPDATE movies SET moviename=?,directedby=?,producedby=?,industry=?,review=?,smallimage=?,largeimage=? WHERE id=?");
			$stmt->bind_param('ssssssss',$moviename,$directedby,$producedby,$industry,$review,$newimage1,$newimage2,$id);

			$moviename = $_POST['name'];
			$directedby = $_POST['directedby'];
			$producedby = $_POST['producedby'];
			$industry = $_POST['industry'];
			$review = $_POST['review'];

			 // Image1
		    $errors = array();
			$file_name = $_FILES['smallimage']['name'];
			$file_size = $_FILES['smallimage']['size'];
			$file_tmp = $_FILES['smallimage']['tmp_name'];
			$file_type = $_FILES['smallimage']['type'];
			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
			$newimage1 = "smallimage_".time().rand(5, 15).".".$file_ext;

			$extensions = array("jpeg","jpg","png");

			if(in_array($file_ext, $extensions) === false)
			{
				$errors[]="extension not allowed";
			}
			if($file_size > 2097152)
			{
				$errors[]='File size must be less than 2 MB';
			}

			if(empty($errors)==true)
			{
				move_uploaded_file($file_tmp, "../uploads/smallimage/".$newimage1);
				//move_uploaded_file($file_tmp,dirname(__FILE__)."/uploads/".$newimage1);
			}

			// Image2
			$error1 = array();
			$file1_name = $_FILES['largeimage']['name'];
			$file1_size = $_FILES['largeimage']['size'];
			$file1_tmp = $_FILES['largeimage']['tmp_name'];
			$file1_ext = pathinfo($file_name, PATHINFO_EXTENSION);
			$newimage2 = "largeimage_".time().rand(5, 15).".".$file_ext;

			if(in_array($file1_ext, $extensions)=== false)
			{
				$error1[]="extension not allowed, please choose a JPEG or PNG file.";
			}
			if(($file1_size > 2097152))
			{
				$error1[]='File size must be exactly 2MB';
			}
			if(empty($error1)==true)
			{
				move_uploaded_file($file1_tmp, "../uploads/largeimage/".$newimage2);
			}
			else
			{
				print_r($error1);
			}

			if($stmt->execute()):
					echo "<script>location.href='movie.php'</script>";
				else:
					echo "<script>alert('". $stmt->error ."')</script>";
			endif;
		endif;

		$movies = $mysqli->query("SELECT * FROM movies WHERE id=".$id);
		$row = $movies->fetch_assoc();

		$sql = "select description from categories";
		$category = $mysqli->query($sql);
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Movie Pedia : Edit Movies</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3 border">
		<p>sidebar</p>
		<?php include "../include/admin/nav.php"; ?>
	</div>
	<div class="col-sm-9 border">
		<p>content</p>

		<form method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $row['id']; ?>" name="id" id="id">
			<!-- Name -->
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" id="name" value="<?php echo $row['moviename']; ?>">
				</div>
			</div>
			<!-- Category Name -->
			<div class="form-group">
				<label for="categoryname" class="col-sm-2 control-label">Category Name</label>
				<div class="col-sm-10">
					<select class="form-control" name="categoryname" id="categoryname">
						<?php 
					      while($rowcat = $category->fetch_assoc()) {
					         echo "<option value = '{$rowcat['description']}'> {$rowcat['description']} </option>";
					      }
					   ?>
					</select>					
				</div>
			</div>
			<!-- Directed By -->
			<div class="form-group">
				<label for="directedby" class="col-sm-2 control-label">Directed By</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="directedby" id="directedby" value="<?php echo $row['directedby']; ?>">
				</div>
			</div>
			<!-- Produced By -->
			<div class="form-group">
				<label for="producedby" class="col-sm-2 control-label">Produced By</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="producedby" id="producedby" value="<?php echo $row['producedby']; ?>">
				</div>
			</div>
			<!-- Movie Industry -->
			<div class="form-group">
				<label for="industry" class="col-sm-2 control-label">Movie Industry</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="industry" id="industry" value="<?php echo $row['industry']; ?>">
				</div>
			</div>
			<!-- Review -->
			<div class="form-group">
				<label for="review" class="col-sm-2 control-label">Review</label>
				<div class="col-sm-10">
					<textarea name="review" id="review" class="form-control" rows="3"><?php echo $row['review']; ?></textarea>
				</div>
			</div>
			<!-- Image1 -->
			<div class="form-group">
				<label for="smallimage" class="col-sm-2 control-label">Image1</label>
				<div class="col-sm-10">
					<input type="file" name="smallimage" id="smallimage">
				</div>
			</div>
			<!-- Image2 -->
			<div class="form-group">
				<label for="largeimage" class="col-sm-2 control-label">Image2</label>
				<div class="col-sm-10">
					<input type="file" name="largeimage" id="largeimage">
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
<?php
	endif;
	include "../include/admin/footer.php";
?>