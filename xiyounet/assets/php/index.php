<?php
	require 'db_connect.php';

	$nname = $_POST["name"];
	$ngraduate_year = $_POST["graduate_year"];
	$nmail = $_POST["mail"];
	$ntel = $_POST["tel"];
	$nsecert = $_POST["keep_secert"];


	 $nname = htmlspecialchars($nname);
     $ngraduate_year = htmlspecialchars($ngraduate_year);
     $nmail = htmlspecialchars($nmail);
     $ntel = htmlspecialchars($ntel);
     $nsecert = htmlspecialchars($nsecert);
    
     if(!get_magic_quotes_gpc()){
         
             $nname = addslashes($nname);
		     $ngraduate_year = addslashes($ngraduate_year);
		     $nmail = addslashes($nmail);
		     $ntel = addslashes($ntel);
		     $nsecert = addslashes($nsecert);
		      }

	$ntime = time();
	$nfeedback = "";

	$ndonate_number = 1;
	if($ndonate_number>= 1){
		$nfeedback= 1;
	}else{
		$nfeedback= 0;
	}

	if (!preg_match("/^20[0-1][0-7]$/", $ngraduate_year)) {

		$code = 9527;
	}
	elseif (!preg_match("/^[_a-z0-9]+@([_a-z0-9]+\.)+[a-z0-9]{2,3}$/", $nmail)) {
	
		$code = 9528;
	}
	elseif (!preg_match("/^1[34578]\d{9}/", $ntel)) {
		
		$code = 9529;
	}
	else{

		$sql = "INSERT INTO donator_info(name,graduate_year,mail,tel,donate_number,timestamp,feedback,keep_secert) VALUES('".$nname."','".$ngraduate_year."','".$nmail."','".$ntel."','".$ndonate_number."','$ntime','$nfeedback','".$nsecert."')";
		$result = $con->query($sql);

		 	if($result){
		     	$code = 200;
		     }else{
		       $code = 9530;
		    }
		
	}

	$Code = array('code'=>$code);
$con->close();  
echo json_encode($Code);



