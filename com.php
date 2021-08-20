<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cinder | Company </title>
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
        
        .btn {
            border: none;
            padding: 12px 28px;
            border-radius: 8px;
            color: white;
            background-color: rgb(0, 48, 138);
            display: inline-block;
            margin: 4px 2px;
        }
        
        .btn a {
            color: white;
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
        background-color: lightgrey;
        text-align: left;
        color: black;
        margin: 10px 60px ;
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
                    <li><a href="profile.php"> PROFILE </a></li>
                    <li><a href="update.php"> UPDATE </a></li>
                    <li><a href="com.php"> COMPANY </a></li>
                    <li><a href="view.php"> VIEW </a></li>
                    <li><a href="queries.php"> QUERIES </a></li>
                    <li><a href="logout.php"> LOGOUT </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <div class="gridout bg-white text-center">
        <br>
        <br>
        <h1> Company </h1>
        <h3> Employee Details </h3>
<?php
include 'dbconn-dd.php';
$query = "SELECT * FROM admins"; 
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){   
echo "<div class='gridin'>"; 
echo "<h3>" . "ID : " . $row['aid'] ; 
echo "<h3>" . "Name of the Employee : " . $row['adminname'] ; 
echo "<h3>" . "Position : " . $row['pos'] ; 
echo "<h3>" . "Phone number : " . $row['phoneno'] ; 
echo "<h3>" . "Email ID : " . $row['email'] ; 
echo "</div>";
}
echo "</div>";
?>
    </div>
<br>
<br>
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