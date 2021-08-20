<?php
session_start();
include 'dbconn-extc.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cinder | Search </title>
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
        .gridinend {
        background-color: burlywood;
        text-align: left;
        color: black;
        padding-top: 20px;
        padding-right: 40px;
        padding-left: 40px;
        padding-bottom: 20px;
        font-size: 18px;
    }
    
    .gridinend button {
        margin-right: 10px;
        margin-left: 10px;
    }
    
    .gridout {
        display: grid;
        grid-template-columns: auto;
        grid-gap: 30px;
        padding: 0px;
        background-color: white;
    }
    
    .gridin {
        background-color: lightblue;
        text-align: left;
        color: black;
        margin: 10px 90px ;
        padding-top: 20px;
        padding-right: 40px;
        padding-left: 40px;
        padding-bottom: 20px;
        font-size: 18px;
    }
    
    .gridin h3 {
        margin-left: 70px;
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
    <div class="gridout bg-grey text-center">
    <h1>Here you go! These are the best suited business colleges for you. </h1>
    <img src="Pics/3.jpg" style="border-radius: 25px; width: 490px; height: 330px; margin:auto;">
    <?php

      echo "<h3>"." Your Cutoff is : " . $_SESSION['userhsc']."/200"."</h3>";
      echo " YOU ARE ELIGIBLE TO APPLY FOR ADMISSIONS IN THE FOLLOWING INSTITUTES:<BR><BR> ";
      $sql = "SELECT * FROM extc_colleges";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        if($_SESSION['userhsc'] >= $row["hsc"] ){
          echo "<div class='gridin'>";
          echo "<h2>".$row["ecname"]."</h2>";
          echo "<p>"."Minimum Cutoff :".$row["hsc"]."</p>";
          echo "<p>"."Location :".$row["jee"]."</p>";
          if ($_SESSION['userhsc'] - $row["hsc"] > 5) {
              echo "<p>"." You can obtain admission in " . $row["ecname"] . " easily";
          }
          echo"</div>";
        }
      echo"</div>";
      }
 ?>
    </div>
    <br>
    <footer>
        <p> Copyright &copy; Cinder 2021. All rights reserved.</p>
        <span>Made with<span class="heart"> ♥ </span> by Dhanya Venkateswaran</span>
    </footer>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>