 <?php
include 'config.php';
?>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck"> 
<?php 
$usename = $_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['Email'];
$pass = $_POST['password'];
$passc = $_POST['passwordc'];

$sql_sel="SELECT * FROM `member` WHERE `username` LIKE '".$usename."' ";
$sql_result = mysql_query($sql_sel);
$num_rows = mysql_num_rows($sql_result);
if($num_rows>=1){
	echo "ชื่อผู้ใช้งานนี้มีบุคคลอื่นใช้แล้วไม่สามารถบันทึกได้";
	echo "<a href=\"login.php\"></a>";
}
else{
$sql_insert = "INSERT INTO $db_name.member";
$sql_insert.= "(username,fname,lname,email,password)";
$sql_insert.= " VALUES ('".$usename."','".$fname."','".$lname."','".$email."','".$pass."');";
$sql_result = mysql_query($sql_insert);
echo "บันทึกข้อมูลชื่อผู้ใช้งาน---> ".$usename." <---ของคุณเรียบร้อยแล้ว !<hr>";
}
?>
<div class="controls">
	<button class="btn btn-success"><a href=login.php>กลับไปยังหน้าลงทะเบียนหรือเข้าสู่ระบบ</a></button>
</div>