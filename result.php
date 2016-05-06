<?php
	include "include/login_check.php";
	//include "config/db.php";
	include "include/header.php";
	include "include/nav.php";
?>
<div class="row">
	<div class="col-sm-12">	
		<h1>Movie Pedia : Search </h1>
	</div>				
</div>
<?php
	if(isset($_GET['q'])):
		if($_GET['q']!=null):
	
			$name = $_GET['q'];
			//$name = "Fan";
			if($searchresult = $mysqli->query("SELECT * FROM movies WHERE moviename like '%$name%'"))
			{
				while ($row = $searchresult->fetch_assoc()):
?>
				<div class="row border-btm">
					<div class="col-sm-12">
						<span><a href="detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['moviename']; ?></a> </span>
					</div>
					<div class="col-sm-12">
						<span><?php echo $row['categoryname']; ?></span>
					</div>
					<div class="col-sm-12">
						<span><?php echo $row['directedby']; ?></span>
					</div>
					<div class="col-sm-12">
						<span><?php echo $row['industry']; ?></span>
					</div>
				</div>
<?php
			 	endwhile;
			}
			else
			{
				echo "no result found!!!";
			}
		else:
			echo "no result found!!!";
		endif;
?>

<?php
	else:
	echo "no result found!!!";
?>
<?php 
	endif;
	include "include/footer.php";
?>