<?php
	include "include/login_check.php";
	include "include/header.php";
	//include "include/nav.php";
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
<div class="row">
	<div class="col-sm-12 rpt-are">	
		<div class="col-sm-4 col-sm-offset-4 border">
			<div class="row">
				<div class="col-sm-4">
					<a href="#" role="button" class="btn btn-info btn-large">Hollywood</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<a href="#" role="button" class="btn btn-info btn-large">Cinema of China</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<a href="#" role="button" class="btn btn-info btn-large" >Bollywood</a>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php
	include "include/footer.php";
?>