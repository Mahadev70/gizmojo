<?php>

    $data5 = $_REQUEST["datavalue5"];
        $conn=mysqli_connect('localhost','root','','test');
        
     
        $e= mysqli_real_escape_string($conn,$data5);
session_start();
$n=$_SESSION['number'];
        
 $sql4 = "INSERT INTO 'messages' ('id','cust_number','cust_message') VALUES (NULL,'$n','$e')";
        
echo 'Thanks for your message : we will contact you on :'; 
         
    
    ?>