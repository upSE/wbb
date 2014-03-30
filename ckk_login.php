 <?php
include 'config.php';
?>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck">
<?php
if ($_POST) {
	$str_username = $_POST ['log_username'];
	$str_pass = $_POST ['log_password'];
	
	$SQL_LOGIN = "SELECT * FROM member WHERE username LIKE '" . $str_username . "' ";
	$RESULT_LOGIN = mysql_query ( $SQL_LOGIN );
	$NUM_USER = mysql_num_rows ( $RESULT_LOGIN );
	
	if ($NUM_USER == 1) {
		$SQL_PWD = "SELECT * FROM member WHERE username LIKE '" . $str_username . "' AND password LIKE '" . $str_pass . "' ";
		$RESULT_PWD = mysql_query ( $SQL_PWD );
		$NUM_PWD = mysql_num_rows ( $RESULT_PWD );
		
		if ($NUM_PWD == 1) {
			$strNameUser = mysql_result ( $RESULT_PWD, 0, 'username' );
			$strPasswdUser = mysql_result ( $RESULT_PWD, 0, 'password' );
		} else {
			echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้องกรุณากลับไปตรวจสอบอีกครั้ง <hr>";
		}
		if ($strPasswdUser == $str_pass) {
			echo "ยินดีต้อนรับคุณ---> " . $strNameUser . " <---เข้าสู่ระบบ";
		} else {
			echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
		}
	}
}
?>
<div class="controls">
	<button class="btn btn-success">
		<a href=login.php>กลับไปยังหน้าลงทะเบียน</a>
	</button>
</div>