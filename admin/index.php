<?php
	include "../include/admin/header.php";
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Movie Pedia : Admin Panel</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<?php include "../include/admin/nav.php"; ?>
	</div>
</div>
<?php
	include "../include/admin/footer.php";
?>

<script type="text/javascript">
	$(".nav a").on("click", function()
	{
	   $(".nav").find(".active").removeClass("active");
	   $(this).parent().addClass("active");
	});
</script>