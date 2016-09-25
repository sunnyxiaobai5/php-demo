<?php
	session_start();
	$_SESSION["authentication"]=false;
	$host = $_SERVER["HTTP_HOST"];//返回当前主机目录，此处为localhost.all_demo
	$path = rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");//dirname()返回路径中的目录部分
	header("location:http://$host$path/index.php");
?>
