<?php

	$nusername = $_POST['username'];
	$ntitle = $_POST['title'];
	$ncontent = $_POST['content'];
	$t=time();
	$ntime = date("Y-m-d H:i:s",$t);


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bbs";

	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error)
		{
			die("Connection failed:" .$conn->connect_error);
		}

	
	
	//"INSERT INTO users(username,title,content,lastdate) VALUES('$nusername','$ntitle','$ncontent','$ntime')";

	$sql = "INSERT INTO `users`( `username`, `title`, `content`, `lastdata`) values (?,?,?,?)";

	if ($conn->query($sql) === TRUE) 
	{
	 echo "";
	} 
	else 
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$result = $conn->query("select * from users");//执行查询
	
	while($row = mysqli_fetch_assoc($result))//将result结果集中查询结果取出一条
	{?>
 	
 	<tr bgcolor="white">
 	<td>
 	用户：<font color="#ff9800"><?=$row['username']?></font>
 	标题：<font color="#ff9800"><?=$row['title'] ?></font>
	</td>
 	</tr>
 	<tr bgcolor="white">
 	 	<td>
 	内容：<font color="#ff9800"><?=$row['content']?></font><br><br>	
 	时间：<font color="#ff9800"><?=$row['lastdate']?></font><br><br>	
	<?php } 

	$conn->close();  
	?>