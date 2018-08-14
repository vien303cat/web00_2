<?php 
session_start();
$link = mysqli_connect("localhost","root","","db00_2");
mysqli_query($link,"SET NAMES UTF8");

$strtime = strtotime("+6hour");
$today = date("Y-m-d H:i:s",$strtime);
?>