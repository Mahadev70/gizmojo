<?php

$data = $_REQUEST["datavalue"];

session_start();
$_SESSION['brand'] = $data;
$b = $_SESSION['brand'];


 $conn =mysqli_connect('localhost','root','','test');

if(!$conn){
    
   echo 'Connection error'.mysqli_connect_error();
}

$sql2 ="SELECT DISTINCT model FROM buyback WHERE brand = '$b'";

$result2 =mysqli_query($conn, $sql2);


$ordermodels =mysqli_fetch_all($result2, MYSQLI_ASSOC);

mysqli_free_result($result2);

mysqli_close($conn); 


echo "<option selected disabled>Select a Brand</option>"; 
foreach($ordermodels as $m) {
        echo "<option> $m[model] </option>";
        
    }
    
?>