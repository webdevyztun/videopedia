<?php
	include "../config/db.php";
	include "../include/admin/header.php";
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Movie Pedia : Movies</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3 border">
		<p>sidebar</p>
		<?php include "../include/admin/nav.php"; ?>
	</div>
	<div class="col-sm-9 border">
		<p>content</p>
		<p>
			<a href="newmovie.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus"></span></a>
		</p>
		<table class="display table table-bordered table-stript" cellspacing="0" width="100%">
			<thead>
				<tr>
					<td>Name</td>
					<td>Category</td>
					<td>Directed by</td>
					<td>Produced by</td>
					<td>Review</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$res = $mysqli->query("SELECT * FROM movies");
					while ($row = $res->fetch_assoc()):
				?>
				<tr>
					<td><?php echo $row['moviename']?></td>
					<td><?php echo $row['categoryname']?></td>
					<td><?php echo $row['directedby'];?></td>
					<td><?php echo $row['producedby'];?></td>
					<td><?php echo $row['review'];?></td>
					<td>
						<a href="updatemovie.php?u=<?php echo $row['id']; ?>">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						Edit</a>
						<a onclick="return confirm('Are you want deleting data')" href="deletemovie.php?d=<?php echo $row['id']; ?>">
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						 Delete</a>
					</td>
				</tr>
				<?php
					endwhile;
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include "../include/admin/header.php"; ?>