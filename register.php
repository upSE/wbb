<?php
include 'config.php';
$error = "";
if (isset ( $_POST ['first_name'] )) {
	if (empty ( $_POST ['first_name'] ))
		$error = "firstname";
	elseif (empty ( $_POST ['last_name'] ))
		$error = "lastname";
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

<!-- CSS code from Bootply.com editor -->

<style type="text/css">
/* move special fonts to HTML head for better performance */
@import
	url('http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700')
	;

/* custom template */
html,body {
	height: 100%;
	font-family: 'Open Sans', arial, sans-serif;
}

a {
	color: #222222;
}

.wrapper,.row {
	height: 100%;
	margin-left: 0;
	margin-right: 0;
}

.wrapper:before,.wrapper:after,.column:before,.column:after {
	content: "";
	display: table;
}

.wrapper:after,.column:after {
	clear: both;
}

.column {
	height: 100%;
	overflow: auto;
	*zoom: 1;
}

.column .padding {
	padding: 20px;
}

.box {
	bottom: 0; /* increase for footer use */
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	background-image: url('/assets/example/bg_suburb.jpg');
	background-size: cover;
	background-attachment: fixed;
}

.divider {
	margin-top: 32px;
}

#main {
	background-color: #fefefe;
}

#main .img-circle {
	margin-top: 18px;
	height: 70px;
	width: 70px;
}

#sidebar,#sidebar a {
	color: #ffffff;
	background-color: gray;
	text-shadow: 1px 0 1px #888888;
}

#sidebar a.logo {
	display: block;
	padding: 3px;
	background-color: #fff;
	color: #777777;
	height: 40px;
	width: 40px;
	margin: 15px;
	font-size: 26px;
	font-weight: 700;
	text-align: center;
	text-decoration: none;
	text-shadow: 0 0 0;
}

#sidebar-footer {
	position: absolute;
	bottom: 5px;
}

#footer {
	margin-bottom: 20px;
}

/* center and adjust the sidebar contents on smaller devices */
@media ( max-width : 768px) {
	#sidebar,#sidebar a.logo {
		text-align: center;
		margin: 0 auto;
		margin-top: 30px;
		font-size: 26px;
	}
	#sidebar a.logo {
		font-size: 50px;
		height: 75px;
		width: 75px;
		margin-bottom: 30px;
	}
}

/* bootstrap overrides */
h1,h2,h3 {
	font-weight: 800;
	font-family: 'Open Sans', arial, sans-serif;
}

.jumbotron {
	background-color: transparent;
}

.label-default {
	background-color: #dddddd;
}

.page-header {
	margin-top: 55px;
	padding-top: 9px;
	border-top: 1px solid #eeeeee;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
}

.col-sm-9.full {
	width: 100%;
}

small.text-muted {
	font-family: courier, courier-new, monospace;
}
</style>
</head>

<!-- HTML code from Bootply.com editor -->

<body>

	<div class="wrapper">
		<div class="box">
			<div class="row">

				<!-- sidebar -->
				<div class="column col-sm-3" id="sidebar">
					<a class="logo" href="#">UP</a>
					<ul class="nav">
						<li class="active"><a href="#featured">หน้าแรก</a></li>
						<li><a href="#stories">เกี่ยวกับเรา</a></li>
					</ul>
					<ul class="nav hidden-xs" id="sidebar-footer">
						<li><a href="login.php"><H2>เข้าสู่ระบบ</H2></a></li>
						<li><a href="http://www.commonder.com"><i
								class="glyphicon glyphicon-heart-empty"></i> by commonder</a></li>
					</ul>
				</div>
			<!-- main -->
				<div class="column col-sm-9" id="main">
					<div class="padding">
						<div class="full col-sm-9">

							<!-- content -->

							<div class="col-sm-12" id="featured">
								<div class="page-header text-muted"><h2>ลงทะเบียน</h2></div>
							</div>
							
					<!--/stories-->
				<div class="row">
							<div
								class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
								<form role="form">
									<hr class="colorgraph">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="first_name" id="first_name"
													class="form-control input-lg" placeholder="ชื่อ"
													tabindex="1"><span><?php echo ($error=="firstname"?"ต้องไม่เป็นช่องว่าง":"");?></span>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="last_name" id="last_name"
													class="form-control input-lg" placeholder="นามสกุล"
													tabindex="2"><span><?php echo ($error=="lastname"?"ต้องไม่เป็นช่องว่าง":"");?></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="text" name="display_name" id="display_name"
											class="form-control input-lg" placeholder="ชื่อผู้ใช้"
											tabindex="3">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email"
											class="form-control input-lg" placeholder="อีเมล์"
											tabindex="4">
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password" id="password"
													class="form-control input-lg" placeholder="รหัสผ่าน"
													tabindex="5">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password_confirmation"
													id="password_confirmation" class="form-control input-lg"
													placeholder="ยืนยันรหัสผ่าน" tabindex="6">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4 col-sm-3 col-md-3">
											<span class="button-checkbox"> <!--<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>-->
												<input type="checkbox" name="t_and_c" id="t_and_c"
												class="hidden" value="1">
											</span>
										</div>
									</div>
									<div class="col-xs-6 col-md-12">
										<p class="btn btn-default btn-block btn-lg">ลงทะเบียน</p>
									</div>
									<br>
									<br>
								</form>

					<!-- /col-9 -->
				</div>
				<!-- /padding -->
			</div>
			<!-- /main -->

		</div>
	</div>
	</div>

	<script type='text/javascript'
		src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


	<script type='text/javascript'
		src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>






	<!-- JavaScript jQuery code from Bootply.com editor -->

	<script type='text/javascript'>
        
        $(document).ready(function() {
        
            
        
        });
        
        </script>

</body>
</html>