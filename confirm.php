<?php

session_start();
$var1=$_SESSION['brand'];
$var2=$_SESSION['model'];
$var3=$_SESSION['variant'];
$var4=$_SESSION['price'];
$var5=$_SESSION["name"];
$var6=$_SESSION["number"];
$var7= $_SESSION["email"]; 
$var8=$_SESSION['imei'];



    $conn=mysqli_connect('localhost','root','','test');

    if(!$conn){
    
    echo 'connection error :' .mysqli_connect_error();
            }

$sql4="INSERT INTO orders (cust_name, cust_number, cust_email, phone_brand, phone_model, phone_var, order_price, IMEI) VALUES (?,?,?,?,?,?,?,?)";
$stmt=$conn->prepare($sql4);
$stmt->bind_param("ssssssss",$var5,$var6,$var7,$var1,$var2,$var3,$var4,$var8);
$stmt->execute();


//    $sql4 = "INSERT INTO orders (`cust_name`, `cust_number`, `cust_email`, `phone_brand`, `phone_model`, `phone_var`, 'order_price','IMEI') VALUES ('$var5', '$var6', '$var7', '$var1', '$var2', '$var3', $var4, $var9)";
      
   

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

        .list1 {
            list-style: none;
            margin-left: none;
        }

        .btn-red {
            float: right;
            margin-top: 5px;
        }

        .btn-blue {
            float: left;
            margin-top: 5px;
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
            <div class="col-sm-4">
                <h3><?php echo 'Thank you  '.$var5.' '; ?></h3>
                <h5>What Happens next!</h5>

                <ol>
                    <li>We will verify the details you have provided us with</li>
                    <li>If any of the information is incorrect/incomplete, we shall contact you by mail/sma/call</li>
                    <li>Once all the information is verified, we will pass on the details to an agent</li>
                    <li>The agent will contact you so as to fix up an appointment for a vist</li>
                    <li>The agent will visit you at a convenient time</li>
                    <li>He will evaluate your phone for functionality and physical appearnce</li>
                    <li>The agent will give you a final quote basis the evaluation</li>
                    <li>Ypu will be required to provide the agent with a valid ID and sign a decalartion</li>
                    <li>The agent will make a cash / UPI payment before picking up your phone</li>
                </ol>

            </div>

            <p> If you have more phones to sell <a href="sell.php">click Here </a> to add up to 5 phones</p>

            <div class="col-sm-4">


                <h3> What is the actual price of your phone?</h3>
                <h4>It depends!</h4>

                <p> The price indicated above is the maximum price we will pay for the brand/model that you have specified. The final price depends on </p>
                <ul>
                    <li>Physical condition of the phone</li>
                    <li>Functional aspects</li>
                    <li>Accessories </li>
                    <li>Brand box</li>

                </ul>

                <p>Please also note that;</p>
                <ul>

                    <li>We will verify your IMEI# before scheduling an appointment</li>
                    <li>Our agent will meet with you and check the phone</li>
                    <li>A final price will be comunicated to you by the agent after checking</li>
                    <li>The agent may pay you in cash or by UPI depending on the amount</li>
                </ul>


                <h3>Explore Gizmojo </h3><br />
                <a href="gizmojo.html">Buy a Gizmojo Product</a><br />
                <a href="sell.php">Sell another phone</a><br />



            </div><br />


            <div class="col-sm-4">
                <h5>Certified Pre-Owned Phones</h5>
                <p>What Can you Expect from a Gizmojo Certified Phones!</p>
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">Know more</button>
                <div id="demo1" class="collapse">
                    <div class="fakeimg"> Best Quality, Lowest Prices <br><img src="verified%20logo.jpg" width=200px; alt=""> </div>

                    <p>Each Gizmojo CPO phone goes through a series of tests in order to be called a certified phone. When you buy a gizmojo phone, you are laying your hands on a pre-owned phone but with all the qualities of a new one and yet you pay less than half the price that you would for a brand new device. <a href="">Explore Now</a> </p>
                </div><br />

                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h2>Certified Pre-owned Phones</h2>

                <h5>What Are Gizmojo certified phones !</h5>
                <div class="fakeimg"><img src="unboxedphone.jpg" alt=""></div>
                <p>Unboxed but never used</p>
                <p>We have a wide variety of the latest products from leading brands such as Samsung, Xiaomi Oppo, Vivo. These phones have been unboxed by another customer but they never used them. So you can get a brand new device but with a discount of more than 20% <a href="">Explore Now</a></p>

            </div>
            <div class="col-sm-3">
                <h2>Unboxed Phones</h2>

                <h5>What Are Gizmojo Unboxed phones !</h5>
                <div class="fakeimg"><img src="unboxedphone.jpg" alt=""></div>
                <p>Unboxed but never used</p>
                <p>We have a wide variety of the latest products from leading brands such as Samsung, Xiaomi Oppo, Vivo. These phones have been unboxed by another customer but they never used them. So you can get a brand new device but with a discount of more than 20% <a href="">Explore Now</a></p>

            </div>

            <div class="col-sm-3">
                <h2>About Us</h2>
                <h5>#staycurrent</h5>
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
            <div class="col-sm-3">
                <h3>Learn More</h3>
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

    <script>

    </script>
</body>

</html>
