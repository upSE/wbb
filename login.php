<?php
include 'config.php';
$error = "";
if( isset($_POST['first_name'])){
	if (empty($_POST['first_name']) ) $error = "firstname";
	elseif (empty($_POST['last_name']) ) $error = "lastname";
}
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
<script type="text/javascript" src="jquery-ui-1.10.4/jquery-1.10.2.js"></script>
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
					<li class="dropdown"><a href="login.php">เข้าสู่ระบบ</a></li>
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
						<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="login.php" method="post" id="form-register" style="display:none">
			<h1>ลงทะเบียน</h1>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="ชื่อ" tabindex="1"><span><?php echo ($error=="firstname"?"ต้องไม่เป็นช่องว่าง":"");?></span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="นามสกุล" tabindex="2"><span><?php echo ($error=="lastname"?"ต้องไม่เป็นช่องว่าง":"");?></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="ชื่อผู้ใช้" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="อีเมล์" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="รหัสผ่าน" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="ยืนยันรหัสผ่าน" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<!--<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>-->
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				
				
				<!--<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>-->
			</div>
			</form>
			
			<form role="form" action="login.php" method="post" id="form-login">
			<h1>เข้าสู่ระบบ</h1>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="ชื่อผู้ใช้" tabindex="1"><span><?php echo ($error=="firstname"?"ต้องไม่เป็นช่องว่าง":"");?></span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="password" id="password" class="form-control input-lg" placeholder="รหัสผ่าน" tabindex="2"><span><?php echo ($error=="lastname"?"ต้องไม่เป็นช่องว่าง":"");?></span>
					</div>
				</div>
				
				
				<!--<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>-->
			</div>
			</form>
			<hr class="colorgraph">
			<div class="row">
				<!-- <div class="col-xs-12 col-md-6"><input type="submit" value="ลงทะเบียน" class="btn btn-primary btn-block btn-lg" tabindex="7"></div> -->
				<div class="col-xs-12 col-md-6" onclick="$('#form-register').hide();$('#form-login').show()"><p class="btn btn-primary btn-block btn-lg">เข้าสู่ระบบ</p></div>
				<div class="col-xs-12 col-md-6" onclick="$('#form-register').show();$('#form-login').hide()"><p class="btn btn-success btn-block btn-lg">ลงทะเบียน</p></div>
			</div>
			<br><br>
		
	</div>
</div>

						<!--/stories-->


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
