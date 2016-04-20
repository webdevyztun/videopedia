<nav class="navbar navbar-default" role="navigation">
	<div class="collapse navbar-collapse navbarCollapse">
	    <ul class="nav navbar-nav navbar-right">
	        <li class="active">
	            <a href="#">Movies</a>
	        </li>

	        <li>
	            <a href="#"> Categories</a>
	        </li>                    
	    </ul>
	</div>
</nav>

<script type="text/javascript">
	$(".nav a").on("click", function(){
		alert()
	   $(".nav").find(".active").removeClass("active");
	   $(this).parent().addClass("active");
	});
</script>