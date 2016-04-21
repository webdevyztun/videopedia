<?php
	include "../config/db.php";
	include "../include/admin/header.php";
	if(isset($_GET['u'])):
		$id = $_GET['u'];

		if(isset($_POST['submit'])):
			$stmt = $mysqli->prepare("UPDATE movies SET moviename=?,directedby=?,producedby=?,review=? WHERE id=?");
			$stmt->bind_param('sssss',$moviename,$directedby,$producedby,$review,$id);

			$moviename = $_POST['name'];
			$directedby = $_POST['directedby'];
			$producedby = $_POST['producedby'];
			$review = $_POST['review'];

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
		<h1>Video Pedia : Edit Movies</h1>
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
			<!-- Review -->
			<div class="form-group">
				<label for="review" class="col-sm-2 control-label">Review</label>
				<div class="col-sm-10">
					<textarea name="review" id="review" class="form-control" rows="3"><?php echo $row['review']; ?></textarea>
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