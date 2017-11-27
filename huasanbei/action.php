<?php
require_once("./config.php");
require_once("./functions.php");
error_reporting(0);
if( isset($_POST['name'])&&isset($_POST['number'])&&isset($_POST['academy'])&&isset($_POST['classname'])&&isset($_POST['address'])&&isset($_POST['phone'])
	&&isset($_POST['validate'])){
	$name =  $_POST['name'];
	$number =  $_POST['number'];
	$academy =  $_POST['academy'];
	$classname =  $_POST['classname'];
	$address =  $_POST['address'];
	$phone =  $_POST['phone'];
	$validate = $_POST['validate'];
	//echo $validate."<br>";
	//echo $_SESSION['code'];
	//print $name."<br>".$number."<br>".$academy."<br>".$classname."<br>".$address."<br>".$phone;
}
if($_SESSION['code'] != strtolower($validate)){
	echo "<script type='text/javascript'>alert('验证码错误');location='javascript:history.back()';</script>";
	exit(0);
	
}
$mail_title = "华三杯报名";
$mail_text = $name.":恭喜你报名成功！";
if(strlen($number) === 8){
	$sql1 = "select number from user where number = $number";
	$results = $_mysqli->query($sql1);
	$rows = $results->num_rows;
	if($rows>0){
		echo "<script type='text/javascript'>alert('该学号已注册');location='javascript:history.back()';</script>";
		exit(0);
	}
}
//	
if (($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/pjpeg")||($_FILES["file"]["type"] == "image/png")){
  	if($_FILES["file"]["error"] > 0 ){
		echo "error!".$_FILES["file"]["error"]."<br/>";
		exit(0);
	}
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . md5($number).".jpg");
	//echo "上传成功: " . "upload/" . md5($number).".jpg";
}
	
$sql = "INSERT INTO `user`( `name`, `number`, `academy`, `classname`, `address`, `phone`) values (?,?,?,?,?,?)";
$results = $_mysqli->prepare($sql);
//$results = $_mysqli->query($sql)  or die($_mysqli->error);
$results->bind_param('ssssss',$name,$number,$academy,$classname,$address,$phone);
if($results->execute()){
	$flag = sendMail($address,$mail_title,$mail_text);
	echo "<script type='text/javascript'>alert('报名成功,请注意查收邮箱！');location='javascript:history.back()';</script>";
	exit(0);
}
//if($flag){
//	echo "发送邮件成功！";
//}else{
//    echo "发送邮件失败！";
//}

?>