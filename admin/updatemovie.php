<?php
	include "../config/db.php";
	include "../include/admin/header.php";
	if(isset($_GET['u'])):
		$id = $_GET['u'];

		$movies = $mysqli->query("".$id);
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
			<!-- Name -->
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" id="name">
				</div>
			</div>
			<!-- Category Name -->
			<div class="form-group">
				<label for="categoryname" class="col-sm-2 control-label">Category Name</label>
				<div class="col-sm-10">
					<select class="form-control" name="categoryname" id="categoryname">
						<?php 
					      // while($row = $category->fetch_assoc()) {
					      //    echo "<option value = '{$row['description']}'> {$row['description']} </option>";
					      // }
					   ?>
					</select>					
				</div>
			</div>
			<!-- Directed By -->
			<div class="form-group">
				<label for="directedby" class="col-sm-2 control-label">Directed By</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="directedby" id="directedby">
				</div>
			</div>
			<!-- Produced By -->
			<div class="form-group">
				<label for="producedby" class="col-sm-2 control-label">Produced By</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="producedby" id="producedby">
				</div>
			</div>
			<!-- Review -->
			<div class="form-group">
				<label for="review" class="col-sm-2 control-label">Review</label>
				<div class="col-sm-10">
					<textarea name="review" id="review" class="form-control" rows="3"></textarea>
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