<?php

session_start();
$_SESSION['phonecount']=$_SESSION['phonecount']+1;


echo $_SESSION['phonecount'];

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
// header("location: confirm.php"); 

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

        .right {

            float: right;
        }

    </style>
</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Gizmojo</h1>
        <p>Buy Sell Exchange!</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="index.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Buy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Exchange</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-8">
                <row>
                    <h5 class="red-text">Sell Your Phones for Cash$$$</h5>
                    <h7 class="green-text">Enter details of your phone and follow simple steps to get the best prices</h7>

                    <div class="fakeimg">

                        <form clsss="form-group" action="#" name="brand">
                            <div class="form-gorup">
                                <label> Your Brand</label>
                                <select class="form-control" id="brand" onchange="func(this.value)">
                                    <option selected disabled>Select a Brand</option>
                                    <?php
                              $conn =mysqli_connect('localhost','root','','test');

if(!$conn){
    
   echo 'Connection error'.mysqli_connect_error();
}

$sql ='SELECT DISTINCT brand FROM buyback';

$result =mysqli_query($conn,$sql);


$orderbrands =mysqli_fetch_all($result,MYSQLI_ASSOC);


mysqli_free_result($result);

mysqli_close($conn);  
                                
                    foreach ($orderbrands as $brand){?>
                                    <option value=<?php echo $brand['brand']; ?>><?php echo $brand['brand']; ?></option>
                                    <?php }
                    ?>
                                </select>
                            </div>



                            <div class="form-group">
                                <label> Your Model</label>
                                <select class="form-control" id="model" onchange="funcvariant(this.value)">
                                    <option selected disabled>Select a brand first</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> Your Variant</label><br />
                                <select class="form-control" id="demo" onchange="funcprice(this.value)">
                                    <option selected disabled>Select a model first</option>
                                </select>
                            </div>



                        </form> <br />



                    </div><br />
                    <label for="imei">IMEI #</label><br />
                    <input type="text" id="imei" name="user" class="form-control"><br />
                    <div class="right">
                        <input method="get" type="submit" name="submit" value="submit" class="form-group" onclick="getimei(this.value)">
                    </div>
                    <input type="checkbox" id="tnc" name="tnc">
                    <label for="agree"> I agree to the Terms and Conditions</label><br>
 
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Read T and C
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Modal Heading</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Terms and Conditions</h3>
          <p>Detailed terms and conditions associated with your use of gizmojo services can be read by accessing our  <a href="www.gizmojo.in">terms page</a></p>
          <p>Here are the specific terms for you to sell your phones to gizmojo and associated resellers</p>

          <p>1. You agree that the phone is owned by you </p>
           <p>2. You agree that the phone not stolen </p>
            <p>3. You agree that by selling the phone, you forfiet all rights on the phone(s) as identified by their unique IMEI numbers  </p>
             <p>4. You agree that Gizmojo may disclose the personal information such as name, contact number, addres and email ID to law enforcement in the event of a claim made by a third party on the same IMEI# </p>
                <p>5. You agree to bear all legal expenses in that event </p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
                    <h5 id="gotimei"></h5>
                    <h6 id="dsp">IMEI# can be checked on the phone by sending *#06#; please note that you may leave this blank for now and await a mail from us to provide the same later. Also note that if a valid IMEI# number of the phone that you wish to sell is not provided, the request is treated as incomplete.</h6>


                </row>
                <row>


                    <p></p><br />

                    <h6>Guaranteed Best Prices.. !</h6>
                    <p>Hassle-free valuation and pick-up</p>
                    <p>Help us identify the details of yur phone including Brand, Model etc. Provide us with your contact details including your name email id and addres. We will schedule an appointment for our field executve to check the phone physically. Hand over your phone and get paid instantly. <a href="">Read Terms and Conditions</a></p>
                </row>

            </div>


            <div class="col-sm-4">
                <h5>About Us</h5>
                <h6>#staycurrent</h6>
                <div class="fakeimg"><iframe width=100% src="https://www.youtube.com/embed/E3GjfzILShs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><br />
                <p>Gizmojo is a re-commerce marketplace that connects the end users on the one hand
                    with businesses on the other, so that the customers are able to buy, sell or exchange their used
                    phones with certified pre-owned mobile devices offered by these businesses.

                    At Gizmojo, our mission is to "enable customers to stay current with the latest technology at
                    incremental price points via the Gizmojo Phone-as-a-service model"

                    By promoting the reuse of electronic devices, we help control the generation of eWaste and
                    hence contribute to conservation of the environment. <a href="">Buy now</a>
                    <a href="">Sell Now</a>
                    <a href="">Exchange Now</a></p>

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
        <h7 id="price1"></h7>



    </div>



    // get models for selected brand

    <script>
        function func(data) {

            var req = new XMLHttpRequest();

            req.open("GET", "response.php?datavalue=" + data, true);
            req.send();



            req.onreadystatechange = function() {

                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('model').innerHTML = req.responseText

                }


            }


        }

    </script>




    // get varaints for selected model
    <script>
        function funcvariant(data1) {

            var req1 = new XMLHttpRequest();

            req1.open("GET", "response1.php?datavalue1=" + data1, true);
            req1.send();



            req1.onreadystatechange = function() {

                if (req1.readyState == 4 && req1.status == 200) {
                    document.getElementById('demo').innerHTML = req1.responseText;

                }


            }


        }

    </script>

    // get price of the selceted brand model varaint combination
    <script>
        function funcprice(data2) {

            var req2 = new XMLHttpRequest();

            req2.open("GET", "response2.php?datavalue2=" + data2, true);
            req2.send();



            req2.onreadystatechange = function() {

                if (req2.readyState == 4 && req2.status == 200) {

                    document.getElementById('price1').innerHTML = req2.responseText;

                }


            }


        }

    </script>


    <script>
        function getimei(data3) {
           if(document.getElementById("tnc").checked != true){
               
               alert('PLease Agree to Terms and Conditions');
           } else{
            
            
            $b = document.getElementById("imei").value;



            function getlength(number) {
                return number.toString().length;
            }

            $l = getlength($b);


            if ($l == 15) {




                var digits = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4];
                var digits2 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4];

                x = 0;
                while (x < 15) {
                    digits[x] = parseInt($b.slice(x, x + 1));
                    x = x + 1
                }



                let y = 1;
                while (y < 15) {
                    digits[y] = digits[y] * 2;
                    y += 2;
                }



                let sumofdigits = 0;
                let z = 0;
                let w = 0;
                while (w < 14) {
                    digits2[z] = Math.floor(digits[w] / 10);
                    digits2[z + 1] = digits[w] % 10;
                    sumofdigits = sumofdigits + digits2[z] + digits2[z + 1];
                    z += 2;
                    w += 1;

                }


                var u = 0;
                var v = 0;
                u = sumofdigits + digits[14];
                v = u % 10;
                if (v !== 0) {
                    alert('Inavlid Imei: You may leave the field blank if you dont have the phone with you');
                } else {

                    document.getElementById('dsp').style.display = 'none';
                    var req3 = new XMLHttpRequest();

                    req3.open("GET", "response3.php?datavalue3=" + $b, true);
                    req3.send();



                    req3.onreadystatechange = function() {

                        if (req3.readyState == 4 && req3.status == 200) {

                            document.getElementById('gotimei').innerHTML = req3.responseText;

                        }


                    }
                }

            } else {

                if ($l == 0) {
                    document.getElementById('dsp').style.display = 'none';
                    var req3 = new XMLHttpRequest();

                    req3.open("GET", "response3.php?datavalue3=" + $b, true);
                    req3.send();



                    req3.onreadystatechange = function() {

                        if (req3.readyState == 4 && req3.status == 200) {

                            document.getElementById('gotimei').innerHTML = req3.responseText;

                        }


                    }
                }
                if ($l > 0) {
                    alert('Recheck the IMEI: It should be 15 digits long. You may leave the field blank if you dont have the phone with you');
                }

            }
}
        }

    </script>

</body>

</html>
