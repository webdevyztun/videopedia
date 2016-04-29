<?php
	include "../config/db.php";
	include "../include/admin/header.php";
	$currentPage = 'category';
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Movie Pedia : Categories</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<?php include "../include/admin/nav.php"; ?>
	</div>
	<div class="col-sm-9">
		<p>
			<a href="newcategory.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus"></span></a>
		</p>
		<table class="display table table-bordered table-stript" cellspacing="0" width="100%">
			<thead>
				<tr>
					<td>Description</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
			<?php
				$res = $mysqli->query("SELECT * FROM categories");
				while ($row = $res->fetch_assoc()):				
			?>
			<tr>
				<td width="80%"><?php echo $row['description']?></td>
				<td>
					<a href="updatecategory.php?u=<?php echo $row['id']; ?>">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					Edit</a>
					<a onclick="return confirm('Are you want deleting data')" href="deletecategory.php?d=<?php echo $row['id']; ?>">
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
<?php
	include "../include/admin/footer.php";
?>

<script type="text/javascript">

	$(document).ready(function() {
	    $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
	});
	
	$(".nav a").on("click", function()
	{
	   $(".nav").find(".active").removeClass("active");
	   $(this).parent().addClass("active");
	});
</script>