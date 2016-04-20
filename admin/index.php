<?php
	include "../include/admin/header.php";
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Video Pedia : Admin Panel</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3 border">
		<p>sidebar</p>
		<?php include "../include/admin/newnav.php"; ?>
	</div>
	<div class="col-sm-9 border">
		<p>content</p>
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