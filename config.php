<?php 
$webname="เว็บบอร์ดพะเยา";

$dbname = "wbb";
$u = "wbb";
$pass = "123456";

mysql_connect("localhost",$u,$pass) or die("cannot connect db.");
mysql_select_db($dbname);


?>