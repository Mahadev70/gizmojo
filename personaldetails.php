<?php

session_start();
$var1=$_SESSION['brand'];
$var2=$_SESSION['model'];
$var3=$_SESSION['variant'];
$var4=$_SESSION['price'];


if($_SESSION['phonecount']!=1){
    
    if($_SESSION['phonecount']<5){
                                    header("location: confirm.php");  
                                 }  header("location: index_earlier.html");  
}


//$conn=mysqli_connect('localhost','root','','test');
//
//if(!$conn){
//    
//    echo 'connection error :' .mysqli_connect_error();
//}

$errors1= array('name'=>'','phone'=>'','email'=>'','add_1'=>'','add_2'=>'','city'=>'','pin'=>'');
$errors2= array('name'=>'','phone'=>'','email'=>'','add_1'=>'','add_2'=>'','city'=>'','pin'=>'');

$n ='';
$e ='abc@example.com';
$c ='';
$d="";
$f = "";
$g = "";
$p="";

if(isset($_POST['submit'])){
    
    if(empty($_POST['name'])){
    $errors1['name']='missing name';
    } else {
        if(!preg_match('/^[a-zA-Z\s]+$/',$_POST['name'])){
            $errors2['name']='invalid name';
           
        }
    }
    
    if(empty($_POST['phoneNumber'])){
    $errors1['phone']='missing number';
    } else {
        if(!preg_match('/^[6-9][0-9]{9}$/',$_POST['phoneNumber'])) {
            $errors2['phone']='invalid number';
            
        }
    }
    
    if(empty($_POST['email'])){
    $errors1['email']='missing email';
    } else {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors2['email']='invalid email';
        
        }
    }
    
    if(empty($_POST['add_1'])){
    $errors1['add_1']='missing address';
    } else {
//        if(!preg_match('/^[a-zA-Z0-9-. ]+$/',$_POST['add_1'])) {
//            $errors2['add_1']='invalid address line';
        
//        }
    }
    
    if(empty($_POST['add_2'])){
    $errors1['add_2']='missing address';
    } else {
//        if(!preg_match('/^[a-zA-Z0-9-. ]+$/',$_POST['add_2'])) {
//            $errors2['add_2']='invalid address line';
//        
//        }
    }
    
    if(empty($_POST['city'])){
    $errors1['city']='missing City';
    } else {
        if(!preg_match('/^[a-zA-Z\s]+$/',$_POST['city'])) {
            $errors2['city']='invalid city name';
        
        }
    }
    
    if(empty($_POST['pin'])){
    $errors1['pin']='missing pin';
    } else {
       if(!preg_match('/^[0-9]{6}$/',$_POST['pin'])) {
            $errors2['pin']='invalid pin';
        
        }
    }
    
    
    
 $n=$_POST['name']; 
 $c =$_POST['phoneNumber'];  
 $e=$_POST['email'];
 $d=$_POST['add_1'];
$f = $_POST['add_2'];
$g = $_POST['city'];
$p=$_POST['pin'];  
    
    
    
    if(array_filter($errors1) ||array_filter($errors2) ) {
    
    } else {
      
        $conn=mysqli_connect('localhost','root','','test');
        
        $n= mysqli_real_escape_string($conn,$_POST['name']);
        $c= mysqli_real_escape_string($conn,$_POST['phoneNumber']);
        $e= mysqli_real_escape_string($conn,$_POST['email']);
        
        $_SESSION["name"] = $n;
        $_SESSION["number"] = $c;
        $_SESSION["email"] = $e;  
        
        
//     if($_SESSION['phonecount']>0){
//    
//                                    if($_SESSION['phonecount']<5){
//                                    header("location: confirm.php");  
//                                    } 
//         else {
//                                            session_reset();
//                                            header("location: thanks.php"); 
//                                            }
//                                    }   
//
//$count=$_SESSION['phonecount'];
//$count=$count+1;
//$_SESSION{'phonecount'}=$count;
header("location: confirm.php");        
        
    }
    
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gizmojo buy used refurbished and unboxed smartphones in India. sell, trade-in and exchange your used phones. Get instant cash for your phones anywhere in India</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: white;
            color: black;
            font-size: .75rem;
        }

        .red-text {
            color: red;
        }

        .green-text {
            color: green;
        }

        #price {
            color: red;
            font-weight: 200;
            animation-direction: reverse;
        }

    </style>
</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Gizmojo</h1>
        <p>Buy Sell Exchange!</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Buy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sell.php">Sell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Exchange</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-8">
                <h2>Your Details:</h2>
                <h5>Please fill out this form to complete the request</h5>


                <form clsss="form-group" action="personaldetails.php" name="brand" method="post">
                    <div class="form-gorup">
                        <label class="formLabel">Your Name</label>
                        <input class="form-control" type="text" name="name" value="<?php echo htmlspecialchars($n) ?>">
                        <div class="red-text"><?php echo $errors1['name'] . $errors2['name'];?>
                        </div>
                        <label>Your Contact Number</label>
                        <input class="form-control" type="integer" name="phoneNumber" value="<?php echo htmlspecialchars($c) ?>">
                        <div class="red-text"><?php echo $errors1['phone'] . $errors2['phone'];?>
                        </div>
                        <label>Your Email</label>
                        <input class="form-control" type="text" name="email" value="<?php echo htmlspecialchars($e) ?>">
                        <div class="red-text"><?php echo $errors1['email'] . $errors2['email'];?>
                        </div>
                        <br>
                        <label>Address Line 1</label>
                        <input class="form-control" type="text" name="add_1" value="<?php echo htmlspecialchars($d) ?>">
                        <div class="red-text"><?php echo $errors1['add_1'] . $errors2['add_1'];?>
                        </div>
                        <label>Address Line 2</label>
                        <input class="form-control" type="text" name="add_2" value="<?php echo htmlspecialchars($f) ?>">
                        <div class="red-text"><?php echo $errors1['add_2'] . $errors2['add_2'];?>
                        </div>
                        <label>Your City </label>
                        <input class="form-control" type="text" name="city" value="<?php echo htmlspecialchars($g) ?>">
                        <div class="red-text"><?php echo $errors1['city'] . $errors2['city'];?></div>
                        <label>PIN CODE </label>
                        <input class="form-control" type="text" name="pin" value="<?php echo htmlspecialchars($p) ?>">
                        <div class="red-text"><?php echo $errors1['pin'] . $errors2['pin'];?></div><br />

                        <div class="right">
                            <input type="submit" , name="submit" , value="submit" , class="btn-red">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-sm-4">
                <h5>The selling Process Explained</h5>

                <h6>How does it work!</h6>
                <div class="fakeimg"><img src="unboxedphone.jpg" alt=""></div>
                <p>Hassle-free valuation and free pick-up</p>
                <p>As you follow the simple steps on our site, you will share with us the details of the phone such as the brand, model and variant. You will then be presented with an approximate price that you can receive for the phone. If you agree, you continue to provide us more details like your contact information. We will then arange for a visit by our field agent. The agent will check the physical condition and functional aspects of the phone in a quick 5-miute process. He will then offer you the exact amount that we can pay for the phone. If you agree, you will be requestd to provide a copy of your ID and sign a decalration. The agent will then proceed to give you cash or transfer by UPI the amount agreed before he picks up the phone from you. </p>

            </div>

        </div>


        <div class="row">
            <div class="col-sm-8">
                <h6>Certified Pre-Owned Phones</h6>
                <p>What Can you Expect from a Gizmojo Certified Phones!</p>
               <div class="fakeimg"> Best Quality, Lowest Prices <br><img src="verified%20logo.jpg" width=200px; alt=""> </div>
                <p>Each Gizmojo CPO phone goes through a series of tests in order to be called a certified phone. When you buy a gizmojo phone, you are laying your hands on a pre-owned phone but with all the qualities of a new one and yet you pay less than half the price that you would for a brand new device. <a href="https://www.gizmojo.in/home">Explore Now</a> </p>
                <br />

            </div>
            <div class="col-sm-4">
                <h5>Unboxed Phones</h5>

                <h6>What Are Gizmojo Unboxed phones !</h6>
                <div class="fakeimg"><img src="unboxedphone.jpg" alt=""></div>
                <p>Unboxed but never used</p>
                <p>We have a wide variety of the latest products from leading brands such as Samsung, Xiaomi Oppo, Vivo. These phones have been unboxed by another customer but they never used them. So you can get a brand new device but with a discount of more than 20% <a href="">Explore Now</a></p>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5>About Us</h5>
                <h6>#staycurrent</h6>
                <div class="fakeimg"><iframe width=100% src="https://www.youtube.com/embed/E3GjfzILShs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Watch this Youtube video to learn how it works</div>
                <p>Gizmojo is a re-commerce marketplace that connects the end users on the one hand
                    with businesses on the other, so that the customers are able to buy, sell or exchange their used
                    phones with certified pre-owned mobile devices offered by these businesses.

                    At Gizmojo, our mission is to "enable customers to stay current with the latest technology at
                    incremental price points via the Gizmojo Phone-as-a-service model"

                    By promoting the reuse of electronic devices, we help control the generation of eWaste and
                    hence contribute to conservation of the environment. <a href="">Buy now</a>
                    <a href="">Sell Now</a>
                    <a href="">Exchange Now</a></p>
            </div>
            <div class="col-sm-6">
                <h5>Learn More</h5>
                <p>Curious to see what it all means ...</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Become a Seller</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
        </div>
    </div>




    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>

</body>

</html>
