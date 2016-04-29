<?php
	include "include/login_check.php";
	include "include/header.php";
	include "include/nav.php";
?>
<?php
	if(isset($_GET['id'])):
		$id = $_GET['id'];	
?>
<div class="row">
	<span class="msg">
		<?php if ($login_user) 
		{
			echo "<em>Login in As </em>"."<b>$login_user</b>";echo " ";
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
		$res = $mysqli->query("SELECT * FROM movies where id=$id");
		while ($row = $res->fetch_assoc()):
	?>
	<div class="row">
		<div class="col-sm-12">
			<div class="col-sm-6 col-sm-offset-3">
				<img class="largeimage" src="uploads/largeimage/<?php echo $row['largeimage']; ?>" alt="movie"/>
			</div>			
		</div>
	</div>	
	<div class="row">
		<div class="col-sm-12">
			<p><?php echo $row['review']; ?></p>
		</div>
	</div>
	<!-- <div class="row"> -->
	<div class="col-sm-12 dtl-lab">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-3">
				<label for="">Directed By</label>
			</div>
			<div class="col-sm-3">
				<p><?php echo $row['directedby']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-sm-offset-3">
				<label for="">Produced By</label>
			</div>
			<div class="col-sm-3">
				<p><?php echo $row['producedby']; ?></p>
			</div>
		</div>
	<!-- </div> -->
</div>
	<?php
		endwhile;
	?>	
<!-- </div> -->
<?php
	endif;
	include "include/footer.php";
?>