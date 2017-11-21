<?php
/*$con = mysql_connect('115.28.219.231','demo','YEmH3378sTn7kwN794C9H9mxiwQcLK');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }*/
// echo "db_connect";
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "xiyounet";

	$con = new mysqli($servername,$username,$password,$dbname);

	if($con->connect_error)
		{
			die("Connection failed:" .$con->connect_error);
		}
		
		//mysql_query("SET NAMES 'utf8'");
?>

