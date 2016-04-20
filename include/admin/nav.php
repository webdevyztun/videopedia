<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- <div class="container-fluid"> -->
        <!-- <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbarCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/index.php">MyBrand</a>
        </div> -->

        <div class="collapse navbar-collapse navbarCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="/index.php">Movies</a>
                </li>

                <li>
                    <a href="#"> Categories</a>
                </li>                    
            </ul>
        </div>
    <!-- </div> -->
</nav>

<!-- <div id="links">Links</div> -->


<script type="text/javascript">
	$(".nav a").on("click", function(){
	   $(".nav").find(".active").removeClass("active");
	   $(this).parent().addClass("active");
	});
</script>