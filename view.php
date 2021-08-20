<!DOCTYPE html>
<html lang="en">

<head>
    <title> Cinder | College </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" href="Pics/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .collapsible {
        background-color: white;
        color: black;
        cursor: pointer;
        padding: 20px;
        margin-top: 5px;
        margin-bottom: 5px;
        width: 100%;
        border: 1px solid black;
        text-align: left;
        outline: none;
        font-size: 20px;
    }
    
    .active,
    .collapsible:hover {
        background-color: rgb(0, 48, 138);
        color: white;
        font-weight: bold;
    }
    
    .collapsible:after {
        content: '\002B';
        color: white;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }
    
    .active:after {
        content: "\2212";
    }
    
    .content {
        padding: 0px 20px;
        max-height: 0;
        overflow: hidden;
        font-size: 18px;
        text-align: left;
        background-color: white;
        transition: max-height 0.2s ease-out;
        color: black;
    }
    
    .content p {
        text-align: center;
    }
        footer {
            margin: 0px;
        }
        
        .btn {
            border: none;
            padding: 30px 80px;
            border-radius: 8px;
            color: white;
            background-color: rgb(0, 48, 138);
            display: inline-block;
            margin: 4px 2px;
        }
        
        .btn a {
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }
        
        .btn:hover {
            background-color: #f4511e;
            color: white;
        }
        
        body {
            font: 400 15px Lato, sans-serif;
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
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            padding: 50px;
            width: 100%;
        }
        
        td,
        th {
            border: 2px solid black;
            text-align: left;
            padding: 8px;
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
                <a href="homepage.html"><img src="Pics/logo.png" width="100" height="100"></a>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" style="padding-top: 20px;">
                    <li><a href="profile.php"> PROFILE </a></li>
                    <li><a href="update.php"> UPDATE </a></li>
                    <li><a href="view.php"> VIEW </a></li>
                    <li><a href="com.php"> COMPANY </a></li>
                    <li><a href="queries.php"> QUERIES </a></li>
                    <li><a href="logout.php"> LOGOUT </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <br><br>
    <div class="container-fluid text-center bg-grey">
        <br><br>
        <h1> View College list</h1><br>
        <br>
        <button class="collapsible" id="sci"> ARTS AND HUMANITIES  <i class="fa fa-paint-brush"></i> </button>
        <div class="content">
            <p> List of Arts and Humanities colleges </p>
            <?php
include 'dbconn-comps.php';
$query = "SELECT * FROM comps_colleges"; 
$result = mysqli_query($conn, $query);

echo "<table>"; 
echo "<tr><td>" . "Name of the College" . "</td><td>" . "Location" ; 
while($row = mysqli_fetch_array($result)){   
echo "<tr><td>" . $row['ccname'] . "</td><td>" . $row['jee'];  
}

echo "</table>";
?>
        </div>
        <button class="collapsible" id="sci"> COMMERCE   <i class="fa fa-suitcase"></i> </button>
        <div class="content">
            <p> List of Business colleges </p>
            <?php
include 'dbconn-extc.php';
$query = "SELECT * FROM extc_colleges"; 
$result = mysqli_query($conn, $query);

echo "<table>"; 
echo "<tr><td>" . "Name of the College" . "</td><td>" . "Location" ; 
while($row = mysqli_fetch_array($result)){   
echo "<tr><td>" . $row['ecname'] . "</td><td>" . $row['jee'];  
}

echo "</table>";
?>
        </div>
        <button class="collapsible" id="sci"> ENGINEERING   <i class="fa fa-laptop"></i> </button>
        <div class="content">
            <p> List of Engineering colleges </p>
            <?php
include 'dbconn-it.php';
$query = "SELECT * FROM it_colleges"; 
$result = mysqli_query($conn, $query);

echo "<table>"; 
echo "<tr><td>" . "Name of the College" . "</td><td>" . "Location" ; 
while($row = mysqli_fetch_array($result)){   
echo "<tr><td>" . $row['itcname'] . "</td><td>" . $row['jee'];  
}

echo "</table>";
?>
        </div>
        <button class="collapsible" id="sci"> MEDICINE   <i class="fa fa-flask"></i> </button>
        <div class="content">
            <p> List of Medical colleges </p>
            <?php
                include 'dbconn-mech.php';
                $query = "SELECT * FROM mech_colleges"; 
                $result = mysqli_query($conn, $query);

                echo "<table>"; 
                echo "<tr><td>" . "Name of the College" . "</td><td>" . "Location" ; 
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>" . $row['mcname'] . "</td><td>" . $row['jee'];
                }
                echo "</table>";
            ?>
        </div>
        
    </div>
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
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
</body>
</html>