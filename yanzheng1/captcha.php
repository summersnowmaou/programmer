<?php  
session_start();  
require './ValidateCode.class.php';  //先把类包含进来，实际路径根据实际情况进行修改。  
$_vc = new ValidateCode();
echo $_vc->getCode();
$_vc->doimg();
$_SESSION['code'] = $_vc->getCode();

?>