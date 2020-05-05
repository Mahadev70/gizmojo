<?php

$data3 = $_REQUEST["datavalue3"];
session_start();
$_SESSION['imei']=$data3;
$i=$_SESSION['imei'];
$b=$_SESSION['brand'];
$m=$_SESSION['model']; 
$v=$_SESSION['variant'];
$p=$_SESSION['price'];





echo 
   '<a href="personaldetails.php">Get up to Rs   '. floor($p*1.2) .'  for your   '.$m . ' bearingi imei#:'.$i.  ': Please provide additional information by filling out the form</a>'; 
  

?>