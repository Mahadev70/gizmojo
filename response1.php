<?php

$data1 = $_REQUEST["datavalue1"];
session_start();
$_SESSION['model']=$data1;
$b=$_SESSION['brand'];
$m=$_SESSION['model'];    

 $conn =mysqli_connect('localhost','root','','test');

if(!$conn){
    
   echo 'Connection error'.mysqli_connect_error();
}


$sql3 ="SELECT variant FROM buyback WHERE brand = '$b' && model= '$m'";

$result3 =mysqli_query($conn,$sql3);


$ordervariants =mysqli_fetch_all($result3,MYSQLI_ASSOC);


mysqli_free_result($result3);

mysqli_close($conn); 

echo "<option selected disabled>Select a Variant</option>"; 
foreach ($ordervariants as $v) {
        echo "<option> $v[variant] </option>";
        
    }
 
?>