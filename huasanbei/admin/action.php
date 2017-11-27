<?php
require_once("../config.php");
require_once("./functions.php");
if( isset($_POST['name'])&&isset($_POST['pass'])&&isset($_POST['validate'])){
	$name =  $_POST['name'];
	$pass=  $_POST['pass'];
	$validate = $_POST['validate'];
	//print $name."<br>".$number."<br>".$academy."<br>".$classname."<br>".$address."<br>".$phone;

	if($_SESSION['code'] != strtolower($validate)){
	echo "<script type='text/javascript'>alert('验证码错误');location='javascript:history.back()';</script>";
	exit(0);
	
	}
		else{
		$sql = "SELECT admin_user,admin_pass from admin where admin_user = 'mxh'";
		$results = $_mysqli->prepare($sql);
	//$results = $_mysqli->query($sql)  or die($_mysqli->error);
		//$results->bind_param('s',$name);
		$results->execute();
		$results->bind_result($admin_user,$admin_pass);
		$results->fetch();
	}
    if($admin_user != $name || $admin_pass != md5($pass))
	if($admin_user != $name || $admin_pass != $pass){
		
		echo "<script type='text/javascript'>alert('用户名或密码错误');location='javascript:history.back()';</script>";
		exit(0);
	}
	else{
		echo '<!DOCTYPE html>
<html>
<head>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>发送邮件</title>
	<link rel="stylesheet" media="screen" href="../assets/css/Opensans.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="../assets/css/email.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<div class="container">
	<!--<div class="row">-->
	<!--<form name="form1" method="post" action="">
		<div class="middle">
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuDivider">
				<li role="presentation" class="divider">邮件主题:</li>
				<input type="text"></input>
			</ul>
		</div>
	</form>-->
 <!-- </div>-->
<form class="form-horizontal" role="form" name="form1" method="post" action="">
<div class="middle">
<div class="row">
	<div class="page-header">
  		<h1>邮件 <small>发送</small></h1>
   </div>
</div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">主题:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="theme" name="mail_title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">内容:</label>
    <div class="col-sm-8">
     <!-- <input type="text" class="form-control" id="inputEmail3" placeholder="content">-->
       <textarea class="form-control" placeholder="content" name="mail_text"></textarea>
    </div>
  </div>
  <input type="submit" value="发送" class="btn btn-default" id="sub"></input>
</div>
</form>
</body>
</html>';
	}	
}
if(isset($_POST['mail_title'])&&isset($_POST['mail_text'])){
	
	$mail_title = $_POST['mail_title'];
	$mail_text = $_POST['mail_text'];
	$sql = "SELECT address from user";
	$result = $_mysqli->query($sql);
	$_add =array();
	if ($result) {
		if($result->num_rows>0){
			while($rows =$result->fetch_assoc() ){ 
				$_add[] = $rows['address'];
			}
		}
	}
	$addlen = count($_add);
	for($i=0;$i<$addlen;$i++){
		$j=$i+1;
		//$to_user = $_add[i];
		//echo "正在发送给".$_add[i]."发送邮件<br>";
		$flag = sendMail($_add[$i],$mail_title,$mail_text);
		if($flag){
			echo $j.".发送给".$_add[$i]."邮件成功！<br>";
		}
		else{
	  		echo $j.".发送给".$_add[$i]."邮件失败！<br>";
		}
	}
	//$rows = $results->num_rows;
	//$flag = sendMail('1154324277@qq.com',$mail_title,$mail_text);
	//if($flag){
	//echo "发送邮件成功！";
	//}else{
	//    echo "发送邮件失败！";
	//}
	
}
?>