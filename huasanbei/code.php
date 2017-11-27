<?php
session_start();
require './class.validateCode.php';
$_vc = new ValidateCode();
//echo $_vc->getCode();
$_vc->doimg();
$_SESSION['code'] = $_vc->getCode();

?>