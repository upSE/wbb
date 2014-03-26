<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>WebboardSE</title>
<link rel="stylesheet" type="text/css" href="CSS/main.css">
<link rel="stylesheet" type="text/css"
	href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="main">
		<div class="header">
			<h1><?php echo $webname; ?></h1>
<<<<<<< HEAD
		</div>




		<div class="body">
			<form action="register.php" method="post">
				<label></label>
			</form>

			<form role="form">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label> <input
						type="email" class="form-control" id="exampleInputEmail1"
						placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label> <input
						type="password" class="form-control" id="exampleInputPassword1"
						placeholder="Password">
				</div>
				
				<div class="checkbox">
					<label> <input type="checkbox"> Check me out
					</label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>

		</div>





		<div class="footer"></div>
=======
		</div>
		<div class="body">
			<form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
		</div>
		<div class="footer">footer</div>
>>>>>>> d9b2203806cbaee01bfffaa62d6b9837990bd556

	</div>
</body>
</html>
