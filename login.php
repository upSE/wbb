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
        <link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->






        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            body {
  padding-top: 50px;
}

.modal-body{
  max-height : none;
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
			<div class="" id="loginModal">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-hidden="true"><a href=\"index.php\">×</a></button>
						<h3><i
								class="glyphicon glyphicon-heart-empty"></i> Welcome <i
								class="glyphicon glyphicon-heart-empty"></i></h3>
					</div>
					<div class="modal-body">
						<div class="well">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#login" data-toggle="tab">เข้าสู้ระบบ</a></li>
								<li><a href="#create" data-toggle="tab">ลงทะเบียน</a></li>
							</ul>
							<div id="myTabContent" class="tab-content">
								<div class="tab-pane active in" id="login">
									<form class="form-horizontal" action='ckk_login.php' method="POST">
										<fieldset>
											<div id="legend">
												<legend class="">Login</legend>
											</div>
											<div class="control-group">
												<!-- Username -->
												<label class="control-label" for="username">ชื่อผู้ใช้</label>
												<div class="controls">
													<input type="text" id="username" name="log_username"
														placeholder="" class="input-xlarge">
												</div>
											</div>

											<div class="control-group">
												<!-- Password-->
												<label class="control-label" for="password">รหัสผ่าน</label>
												<div class="controls">
													<input type="password" id="password" name="log_password"
														placeholder="" class="input-xlarge">
												</div>
											</div>


											<div class="control-group">
												<!-- Button -->
												<div class="controls">
													<button class="btn btn-success">เข้าสู่ระบบ</button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
								<div class="tab-pane fade" id="create">
									<form id="tab" action = "member_insert.php" method = "post">
										<label>ชื่อผู้ใช้</label>    <input type="text" value=""class="input-xlarge" name="username">
										<label>ชื่อ</label>      <input type="text" value="" class="input-xlarge" name="fname"> 
										<label>นามสกุล</label>   <input type="text" value="" class="input-xlarge" name="lname"> 
										<label>อีเมล</label>     <input type="text" value="" class="input-xlarge" name="Email"> 
										<label>รหัสผ่าน</label>   <input type="password" value="" class="input-xlarge" name="password"> 
										<label>ยืนยันรหัสผ่าน</label><input type="password" value="" class="input-xlarge" name="passwordc">
										

										<div>
											<button type="submit" class="btn btn-primary" name="register">ลงทะเบียน</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
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