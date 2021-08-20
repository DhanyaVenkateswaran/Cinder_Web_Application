<?php
session_start();
include 'dbconn-dd.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cinder | Search by category </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" href="Pics/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        footer {
            margin: 0px;
        }
        
        .grid{
            display: flex;
            margin: 10px;
            justify-content: center;
        }
        .btn {
            border: none;
            padding: 20px 30px;
            margin: 10px;
            border-radius: 50px;
            color: white;
            display: inline-block;
            margin: 4px 2px;
            background-color: rgb(0, 48, 138);
        }
        
        .btn a {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }
        
        .btn:hover {
            background-color: #f4511e;
            color: white;
        }
        
        body {
            font: 400 18px Lato, sans-serif;
            line-height: 1.8;
            color: black;
        }
        
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        
        .navbar {
            margin-bottom: 0;
            padding: 10px;
            background-color: rgb(0, 48, 138);
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        
        .navbar li a,
        .navbar .navbar-brand {
            color: white !important;
        }
        
        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #f4511e !important;
            font-weight: bold;
            background-color: #fff !important;
        }
        
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: black !important;
        }
        
        .wrapper {
            border-radius: 25px;
            background-color: white;
            width: 400px;
            padding: 20px;
        }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="padding: 20px;">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>                        
  </button>
                <a href="#"><img src="Pics/logo.png" width="100" height="100"></a>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" style="padding-top: 20px;">
                    <li><a href="index.php"> PROFILE </a></li>
                    <li><a href="college.php"> COLLEGE </a></li>
                    <li><a href="search.php"> SEARCH </a></li>
                    <li><a href="account.php"> ADMISSIONS </a></li>
                    <li><a href="logout.php"> LOGOUT </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid text-center">
        <h1> Search by Category </h1>
        <br>
        <p> Cinder has a inbuilt search option for you to find the perfect college for your area of interest and your cutoff </p>
        <br>
        <img src="Pics/lo.jpg" width="300" height="200">
        <br>
        <BR>
        <H3> Choose a stream </H3>
        <br>
        <div class="grid">
            <button class="btn "><a href="disp_it.php" > ENGINEERING </a></button>
            <button class="btn "><a href="disp_extc.php"> COMMERCE</a></button>
            <button class="btn "><a href= "disp_mech.php" > MEDICINE </a></button>
            <button class="btn "><a href="disp_comps.php"> ARTS AND HUMANITIES </a></button>
        </div>
        <br>
        <br>
    </div>
    <footer>
        <ul class="social-links text-center">
            <li><a href="https://www.instagram.com/ipotat_03/" target="_blank"><i class="fa fa-instagram fa-fw"></i></a></li>
            <li><a href="https://twitter.com/Dhanya_313" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100068726438333" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
            <li><a href="https://www.linkedin.com/in/dhanya-venkateswaran-1559b5188/" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a></li>
        </ul>
        <p> Copyright &copy; Cinder 2021. All rights reserved.</p>
        <span>Made with<span class="heart"> ♥ </span> by Dhanya Venkateswaran</span>
    </footer>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>