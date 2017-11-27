<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
$_mysqli = new mysqli('127.0.0.1','root','100100mxh','huasanbei');
	if (mysqli_connect_errno()) {
		echo '数据库连接错误！错误代码：'.mysqli_connect_error();
		exit();
	}
	$_mysqli->set_charset('utf8');
?>