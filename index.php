<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php echo $webname;?></title>
<meta name="generator" content="Bootply" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<link
	href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
	rel="stylesheet">
<link
	href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"
	type="text/css" rel="stylesheet">
<!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<link
	href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css"
	type="text/css" rel="stylesheet">

<!-- CSS code from Bootply.com editor -->
<link href="CSS/main.css" type="text/css" rel="stylesheet">

</head>

<!-- HTML code from Bootply.com editor -->

<body>

	<header class="navbar navbar-bright navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="/" class="navbar-brand">หน้าหลัก</a>
			</div>
			<nav class="collapse navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
					<li><a href="#">เกี่ยวกับเรา</a></li>
				</ul>
				<ul class="nav navbar-right navbar-nav">
					<li class="dropdown"><a href="login">เข้าสู่ระบบ</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i>
					</a>
						<ul class="dropdown-menu" style="padding: 12px;">
							<form class="form-inline">
								<button type="submit" class="btn btn-default pull-right">
									<i class="glyphicon glyphicon-search"></i>
								</button>
								<input type="text" class="form-control pull-left"
									placeholder="Search">
							</form>
						</ul></li>
				</ul>
			</nav>
		</div>
	</header>

	<div id="masthead">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h1>
						<?php echo $webname; ?>
						<p class="lead"></p>
					</h1>
				</div>
				<div class="col-md-5">
					<div class="well well-lg">
						<div class="row">
							<div class="col-sm-12"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /cont -->

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-spacer"></div>
				</div>
			</div>
		</div>
		<!-- /cont -->

	</div>


	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<div class="panel">
					<div class="panel-body">



						<!--/stories-->
						<?php  
							$query = mysql_query("SELECT * FROM catagory") or die("cannot select catagory");
							while($row = mysql_fetch_array( $query ) ){
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

						<!--/stories-->


						<a href="/" class="btn btn-primary pull-right btnNext">More <i
							class="glyphicon glyphicon-chevron-right"></i>
						</a>


					</div>
				</div>



			</div>
			<!--/col-12-->
		</div>
	</div>


	<hr>

	<div class="container" id="footer">
		<div class="row">
			<div class="col col-sm-12">

				<h1>Follow Us</h1>
				<div class="btn-group">
					<a class="btn btn-twitter btn-lg" href="#"><i
						class="icon-twitter icon-large"></i> Twitter</a> <a
						class="btn btn-facebook btn-lg" href="#"><i
						class="icon-facebook icon-large"></i> Facebook</a> <a
						class="btn btn-google-plus btn-lg" href="#"><i
						class="icon-google-plus icon-large"></i> Google+</a>
				</div>

			</div>
		</div>
	</div>

	<hr>

	<hr>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<ul class="list-inline">
						<li><i class="icon-facebook icon-2x"></i></li>
						<li><i class="icon-twitter icon-2x"></i></li>
						<li><i class="icon-google-plus icon-2x"></i></li>
						<li><i class="icon-pinterest icon-2x"></i></li>
					</ul>

				</div>
				<div class="col-sm-6">
					<p class="pull-right">
						Built with <i class="icon-heart-empty"></i> at <a
							href="http://www.bootply.com">Bootply</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<script type='text/javascript'
		src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


	<script type='text/javascript'
		src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>






	<!-- JavaScript jQuery code from Bootply.com editor -->

	<script type='text/javascript'>
        
        $(document).ready(function() {
        
            
        
        });
        
        </script>

</body>
</html>
