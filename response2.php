<?php

$data2 = $_REQUEST["datavalue2"];
session_start();
$_SESSION['variant']=$data2;
$b=$_SESSION['brand'];
$m=$_SESSION['model']; 
$v=$_SESSION['variant'];

 $conn =mysqli_connect('localhost','root','','test');

if(!$conn){
    
   echo 'Connection error'.mysqli_connect_error();
}


$sql4 ="SELECT DISTINCT price FROM buyback WHERE brand = '$b' && model='$m' && variant='$v'";

$result4 =mysqli_query($conn,$sql4);


$orderprices =mysqli_fetch_all($result4,MYSQLI_ASSOC);


mysqli_free_result($result4);

mysqli_close($conn); 

               foreach ($orderprices as $price){

                echo 
                 'Get up to Rs   '. floor($price['price']*1.2) .'  for your   '.$m . ' :  Please provide additional information by filling out the <a href="personaldetails.php">form</a>'; 
                $_SESSION['price']=floor($price['price']*1.2);

                }




?>