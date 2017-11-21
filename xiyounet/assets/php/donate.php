<?php
	require 'db_connect.php';

		$con->set_charset("utf8");
		$sql = "select id,name,graduate_year,donate_number from donator_info";
	
		$result = $con->query($sql);

		if (mysqli_num_rows($result)>0) {
			# code...
			while($row = $result->fetch_assoc()){
				$rows[]=$row;
			}
		}
		
	


$con->close();  
echo json_encode($rows);



