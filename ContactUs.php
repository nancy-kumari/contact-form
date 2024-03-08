<?php
session_start();
include("Form/index.php");
// error_reporting(0);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
   <link rel = "stylesheet" href = "@import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900'">
    <title>Contact Form</title>
</head>

<body>
    <?php

if(isset($_SESSION['status']))
{


  ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey</strong> <?php  echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php



unset($_SESSION['status']);
}

?>
    <!--Container containing navbar-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo Here</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/cwhphp/21_POST_Post.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/features.html" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Features
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/action.html">Action</a></li>
                                <li><a class="dropdown-item" href="/anotheraction.html">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/shop.html" tabindex="-1" aria-active="true">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact.html">Contact</a>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <i class="fa-solid fa-address-book"></i>
                        <i class="fa-solid fa-cart-shopping"></i>

                    </form>
                </div>
            </div>

        </nav>
    </div>


    <!--Container containing middle heading-->
    <div class="container">
        <h3>Contact Us</h3>
        <p>Any Question or remarks? Just write a message!</p>

    </div>

    <!--container containing information-->
    <div class="container ">
        <div class="row">


            <div class="col-md-4 col-sm-4 col-lg-4" style="background-color: black; border-radius: 10px; ">
                <h2 class="heading"
                    style="text-align: left; margin-top: 20px; margin-left: 25px;  font-family: 'Poppins';">
                    Contact&nbsp;Information</h2>

                <p class="sub-head" style="text-align: left; color: #C9C9C9; margin-top: 10px; margin-left: 25px; font-family:'poppins-Regular'; font-size:18px">
                    <nobr>say something to start a live chat!</nobr>
                </p>
                <br>
                <br>
                <br>
                <i class="fa-solid fa-phone-volume"></i>
                <p class="number">
                    <nobr style="padding-right: 157px;">+1012 3456 789</nobr>
                </p>

                <div>
                    <i class="fa-solid fa-message"></i>
                    <p class="email" style="padding-right: 153px;">demo@gmail.com</p>

                </div>
                <div>
                    <i class="fa-solid fa-location-pin"></i>
                    <p class="text-1">
                        <nobr style="padding-right: 110px;">132 DartMouth Street Boston,</nobr>
                    </p>
                    <p class="text">
                        <nobr style="padding-right: 77px;">Massachusetts 02156 United States</nobr>
                    </p>
                    <br>
                    <br>
                          
                   <div class= "shapes">
                        <div class="circle"style="border-radius:50%; height:150px;width:150px;margin-top: -51px margin-left: 241px; float:right; background-color:#ffffff2e; position: absolute;
                         margin-left: 293px; margin-top: -10px">

                      <div class="circle-2"style="border-radius:50%; height:100px;width:100px; float:right; background-color:rgb(123 122 122 / 50%);position: absolute;margin-top: -39px;margin-left: -16px;" >

                      </div>

                        </div>
                    
                        </div>

                    <br>
                    <br>
                    <br>
                    <div class= "icons">
                    <div class="mb-3 socialicons">
                        <i class="fa-brands fa-square-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-solid fa-gamepad"></i>
                    </div>
                    </div>
                </div>


            </div>

            <div class="col-md-8" style="padding: 40px;">
                <br>
                <!--Form-->
                <form action="/Form/ContactUs.php" method="post">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="First_Name">First Name</label>
                                <input
                                    style="background-color:transparent;border-bottom:1px solid rgb(8, 8, 8);border-top:0px solid red;border-left:0px solid red;border-right:0px solid red;"
                                    type="text" class="form-control" id="FirstName" name="First_Name">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="Last_Name">Last Name</label>
                                <input
                                    style="background-color: transparent; border-bottom: 1px solid rgb(8, 8, 8); border-top: 0px solid white; border-left: 0px solid white; border-right: 0px solid white;"
                                    type="text" class="form-control" id="LastName" name="Last_Name">
                            </div>

                        </div>

                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="email_address" for="email">Email</label>
                                <input
                                    style="background-color: transparent; border-bottom: 1px solid rgb(8, 8, 8); border-top: 0px solid white; border-left: 0px solid white; border-right: 0px solid white"
                                    type="email" class="form-control" id="email" name="email">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="Phone_Number" for="phone">Phone Number</label>
                                <input
                                    style="background-color: transparent; border-bottom: 1px solid rgb(8, 8, 8); border-top: 0px solid white; border-left: 0px solid white; border-right: 0px solid white"
                                    type="number" class="form-control" id="Number" name="Phone_Number">
                            </div>

                        </div>

                    </div>

                    <br> <br>
                    <div class="row">

                        <div class="col-md-12">
                            <div>
                                <label class="heading" for="heading" name="heading">Select Subject?</label>
                            </div>
                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="General inquiry- 1">
                                <label class="form-check-label" for="inlineRadio1">General inquiry 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="General inquiry 2">
                                <label class="form-check-label" for="inlineRadio2">General inquiry 2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                    value="General inquiry 3">
                                <label class="form-check-label" for="inlineRadio3">General inquiry 3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                    value="General inquiry 4">
                                <label class="form-check-label" for="inlineRadio3">General inquiry 4</label>
                            </div>
                        </div>



                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">
                                <label class="message" for="Message" name="message">Message</label>
                                <input
                                    style="background-color:transparent;border-bottom:1px solid rgb(10, 10, 10);border-top:0px solid red;border-left:0px solid red;border-right:0px solid red;"
                                    type="text" class="form-control" id="message" name="message"
                                    placeholder="write your message..">
                            </div>
                            <br>

                            <button type="submit " class="btn btn-primary" name="submit_button"
                                style="background-color: black; float: right;">Send Message</button>




                        </div>


                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- //footer  -->
    <br>

    <div class="container-fluid" style="background-color: black;">
        <div class="container" style="background-color: black;">

            <div class="row">
                <div class="col-12">
                    <footer class="text-center">
                        <!-- Section: Social media -->
                        <section class="border-bottom">
                            <!-- Left -->
                            <div class="me-5 me-5 d-none d-lg-block d-lg-block" style="color: white; margin-top: 40px;">
                                <h1>Logo Here</h1>
                            </div>


                </div>
            </div>

        </div>
        <br>


        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div>
                        <p style="color: white; padding-right: 150px">Reach Us</p>


                    </div>
                    <i class="fa-solid fa-phone-volume"></i>
                    <p class="number">
                        <nobr style="padding-right: 60px">+1012 3456 789</nobr>
                    </p>
                    <div>
                        <i class="fa-solid fa-message"></i>
                        <p class="email">demo@gmail.com</p>

                    </div>
                    <div>
                        <i class="fa-solid fa-location-pin"></i>
                        <p class="text-1">
                            <nobr>132 DartMouth Street Boston,</nobr>
                        </p>
                        <p class="text">
                            <nobr>Massachusetts 02156 United States</nobr>
                        </p>
                    </div>

                </div>
                <div class="col-2">
                    <p style="color: white;">Company</p>
                    <br>
                    <p style="color: white;">About</p>
                    <br>
                    <p style="color: white;">Contact</p>
                    <br>
                    <p style="color: white;">Blogs</p>
                </div>
                <div class="col-2">
                    <p style="color: white;">Legal</p>
                    <br>
                    <p style="color: white;">Privacy Policy</p>
                    <br>
                    <p style="color: white;">Terms & Services</p>
                    <br>
                    <p style="color: white;">Terms of Use</p>
                    <br><br>
                    <p style="color: white;">Refund Policy</p>
                </div>
                <div class="col-2">
                    <p style="color: white;">Quick Links</p>
                    <br>
                    <p style="color: white;">Techlabz Keybox</p>
                    <br>
                    <p style="color: white;">Downloads</p>
                    <br>
                    <p style="color: white;">Forum</p>
                </div>
                <div class="col-3">

                    <div class="card" style="width: 18rem; background-color:rgb(39, 37, 37)">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white;">Join Our Newsletter</h5>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">

                                        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="your email address"
                                            style="background-color:rgb(39, 37, 37); border: 2px solid rgb(39, 37, 37);">

                                    </div>
                                </div>
                                <div class="col" style="width: 5px;">
                                    <button style="background-color: black; border: 2px solid black;" type="submit "
                                        class="btn btn-primary">Subscribe</button>
                                </div>
                                <br> <br>
                                <div style="color: grey">
                                    <li>will send you weekly updates for your better total management </li>
                                </div>

                            </div>



                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <?php
      
      if(
        isset($_POST['First_Name'])
       && isset($_POST['Last_Name'])
       && isset($_POST['email'])
       && isset($_POST['Phone_Number'])
       && isset($_POST['inlineRadioOptions'])
       && isset($_POST['message'])
      ){ 
        
        $name = $_POST['First_Name'];
        $lastname = $_POST['Last_Name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['Phone_Number'];
        $heading = $_POST['inlineRadioOptions'];
        $message = $_POST['message'];        


        if($name!= "" && $lastname!= "" && $email!= "" && $phonenumber!= "" && $heading!= "" && $message!="")
        {

        $query = "INSERT INTO `users` (`First_Name`,`Last_Name`,`email`,`Phone_Number`,`heading`,`message`) VALUES ('$name', '$lastname', '$email', '$phonenumber ', '$heading', '$message') ";      
        $result = mysqli_query($conn,$query);      
        if($result){


          $_SESSION['status'] = "data inserted successfully";
          
          // echo "data inserted into database";
        }
        else{
          // echo "data failed to insert into database";
          $_SESSION['status'] = "data inserted successfully";
          
        }
      }
      else{
        echo "please fill form";
      }
       

     }



    ?>
</body>

</html>