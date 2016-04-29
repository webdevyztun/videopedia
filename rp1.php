<?php
	include "include/login_check.php";
	//include "config/db.php";
	include "include/header.php";	
	include "include/nav.php";
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Hollywood Movies List</h1>
	</div>
</div>
<div class="row">
	<table class="display table table-bordered table-stript" cellspacing="0" width="100%">
		<thead>
			<tr>
				<td>Name</td>
				<td>Category</td>
				<td>Directed by</td>
				<td>Produced by</td>
				<td>Review</td>
			</tr>
		</thead>
		<tbody>
			<?php
				$res = $mysqli->query("SELECT * FROM movies WHERE industry='Hollywood'");
				while ($row = $res->fetch_assoc()):
			?>
			<tr>
				<td><?php echo $row['moviename']?></td>
				<td><?php echo $row['categoryname']?></td>
				<td><?php echo $row['directedby'];?></td>
				<td><?php echo $row['producedby'];?></td>
				<td><?php echo $row['review'];?></td>				
			</tr>
			<?php
				endwhile;
			?>
		</tbody>
	</table>
</div>
<?php
	include "include/footer.php";
?>