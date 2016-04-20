<?php
	include "../include/admin/header.php";
	$currentPage = 'category';
?>
<div class="row">
	<div class="col-sm-12">
		<h1>Video Pedia : Categories</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-3 border">
		<p>sidebar</p>
		<?php include "../include/admin/nav.php"; ?>
	</div>
	<div class="col-sm-9 border">
		<p>content</p>
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