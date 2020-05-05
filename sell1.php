<?php
session_start();
$_SESSION['phonecount']=0;
$_SESSION['name']=", Guest User";
 header("location: sell.php");



?>