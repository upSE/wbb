<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title><?php echo $webname;?></title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->










        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            body {
  padding-top: 50px;
}

        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        
        <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">หน้าหลัก</a></li>
        <li><a href="login.php">เข้าสู่ระบบ</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
  
  <div>
  				<?php
						$query = mysql_query ( "SELECT * FROM catagory" ) or die ( "cannot select catagory" );
						while ( $row = mysql_fetch_array ( $query ) ) {
							?>
						<div class="row">
							<br>
							<div class="col-md-2 col-sm-3 text-center">
								<a class="story-title"
									href="http://www.techvisually.com/p/2LmGb0yEsL"><img
									alt="Repurpose Content to Reach a Wider Audience"
									src="img/<?php echo $row['image']; ?>"
									style="width: 100px; height: 100px" class="img-circle"> </a>
							</div>
							<div class="col-md-10 col-sm-9">
								<h3>
									
									<?php echo $row['topic'];?>
								</h3>
								<span><?php echo $row['description'];?></span>
							</div>
						</div>
						<hr>
						<?php } ?>
  </div>
  
</div><!-- /.container -->
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>





        
        <!-- JavaScript jQuery code from Bootply.com editor -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            
        
        });
        
        </script>
        
    </body>
</html>