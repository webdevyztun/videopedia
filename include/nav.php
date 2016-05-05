<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Movie Pedia</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a class="active" href="home.php">Home</a>
                </li>
                <li>
                    <a href="report.php">Report</a>
                </li>
            </ul>
            <!-- <div class="col-sm-4 col-md-4 pull-right">
                <form action="" class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="eg. movie name" name="q" id="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" id="btnsearch">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div> -->
            <div class="input-group col-md-12">
                <input type="text" class="  search-query form-control" placeholder="Search" id="q" />
                <span class="input-group-btn">
                    <button class="btn btn-danger" type="button" id="btnsearch" >
                        <span class=" glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>       
    <div id="result"></div>
<script>
    $(document).ready(function(){

        $("#btnsearch").click(function(){
            var vname = $("#q").val();

            if(vname != '')
            {
                //alert(vname);
                $.post("include/q.php", 
                { 
                    name:vname
                },
                function(response){ 
                    //alert(response);

                    $("#result").html(response).show();
                
                //$("#form")[0].reset();
                });
            }
            

        });
        
    });
</script>