<?php
	include "include/login_check.php";
	include "include/header.php";
	include "include/nav.php";
?>

<div class="row">
	<span class="msg">
		<?php if ($login_user) 
		{
			echo "<em>Login As </em>"."<b>$login_user</b>";echo " ";
			echo "<a href='logout.php'><b>Logout</b></a>";
		}
		else
		{
			echo "<em>register</em>";echo "<a href='register.php'><b>here</b></a>";
		} 
		?>
	</span>	
</div>
<!-- <div class="row"> -->
	<?php
		$res = $mysqli->query("SELECT * FROM movies");
		while ($row = $res->fetch_assoc()):
	?>
	<div class="row">
		<div class="col-sm-9 border">
			<div class="col-sm-4 hm-img">
				<!-- <img src="uploads/largeimage/largeimage_14618609209.jpg" alt="movie"> -->
				<img class="smallimage" src="uploads/smallimage/<?php echo $row['smallimage']; ?>" alt="movie"/>
			</div>
			<div class="col-sm-8 hm-data">
				<div class="row">
					<label for="moviename" class="col-sm-6 control-label">Name</label>
					<span class="col-sm-6">
						<?php echo $row['moviename'];?>
					</span>		
				</div>
				<div class="row">
					<label for="category" class="col-sm-6 control-label">Category</label>
					<span class="col-sm-6">
						<?php echo $row['categoryname'];?>
					</span>		
				</div>
				<div class="row">
					<label for="directedby" class="col-sm-6 control-label">Directed By</label>
					<span class="col-sm-6">
						<?php echo $row['directedby'];?>
					</span>		
				</div>	
				<div class="row">
					<a class="col-sm-6 col-sm-offset-6" href="detail.php?id=<?php echo $row['id'];; ?>">Details</a>
				</div>
			</div>
		</div>
	</div>
	<?php
		endwhile;
	?>	
<?php
	include "include/footer.php";
?>