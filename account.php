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
    <title> Cinder | Admissions </title>
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
    <div class="container-fluid text-center bg-white">
        <br>
        <div class="row">
            <div class="col-sm-4" style=" padding-top: 20px; padding-left: 20px;">
                <img src="Pics/37.jpg" width=320px height=195px>
            </div>
            <div class="col-sm-8">
                <h1> Admission Process</h1>
                <br>
                <p>Irrespective of the Course, The Skeleton of the Admission Process remains the same. They can sometime vary due to the College as well. For exmaple, In the Application form, Certain Colleges may ask questions like Why they chose this College or
            a Specific Course. <br>The Major Steps involved are </p><br>
            </div>
        </div>
    </div>
    <div class="container-fluid text-left bg-grey">
    <br>
        <div class="row">
            <div class="col-sm-8">
                <br>
                <p>The first and foremost step is to Apply to the College. At this point, Important files like your Marksheet, Birth certificate will be asked to upload. It is hence necessary for the students to be ready with these beforehand. Due to
                        the pandemic, Students will be applying Online so all the documents must be neatly scanned and submitted in the Right Format. <br> Here is a list of the important documents you may be asked to submit :
                        <ul >
                            <li> 10th and 12th Marksheet</li>
                            <li>Transfer Certificate</li>
                            <li> Conduct Certificate</li>
                            <li> Birth Certificate </li>
                            <li> Aadhar Card </li>
                            <li> Community Certificate </li>
                            <li> Passport ( if you are a NRI or Foreign National )</li>
                            <li> Passport and Stamp size Photo of the Student</li>
                            <li> Scanned copy of the Sign of the Student </li>
                        </ul>
                        <br> Please check all the details you have entered in the application before submitting to prevent any problem as any false information will automatically lead to disqualification. </p><br>
            </div>
            <div class="col-sm-4" style="padding-top:150px;">
                <img src="Pics/39.jpg" width=280px height=400px>
            </div>
    </div>
        </div> 
        <div class="container-fluid text-left">
        <br>
        <div class="row" style="margin: 20px;">
                <h1> Entrance Exams </h1>
                <br>
                    <p> Once the Application is processed by the University, The Students will receive a test date and time during they'll have to attend the test and give it their best. The Entrance test should not be taken lightly as most colleges give
                        equal weightage to both your cutoff and your entrance test score.<br><br>For Students who are interested in CA (Chartered Accountacy) :: <a href="CA.pdf"> Click here to Know More </a><br><br> There are some important Entrance Exams
                        which is conducted by the NTA (National Testing Agency). NTA conducts the two Major exams of JEE ( Joint Entrance Exam ) and NEET ( National Eligibility cum Entrance Test ). JEE and NEET are located high up in the list of the hardest
                        exams to crack in the World but still most students try to crack it as it is the route of joining the prestigious institutions in India.
                        <ul>
                            <li> <strong>JEE :</strong><br>
                                <br>The Joint Entrance Examination (JEE) is an engineering entrance assessment conducted for admission to various engineering colleges in India. It is constituted by two different examinations: the JEE Main and the JEE
                                Advanced. The Joint Seat Allocation Authority (JoSAA) conducts the joint admission process for a total of 23 Indian Institute of Technology campuses, 31 National Institute of Technology campuses, 25 Indian Institute of
                                Information Technology campuses and 19 other Government Funded Technical Institutes (GFTIs) based on the rank obtained by a student in JEE Mains and JEE Advanced. There are some institutes, such as the Indian Institutes
                                of Science Education and Research (IISERs), the Indian Institute of Petroleum and Energy (IIPE), the Rajiv Gandhi Institute of Petroleum Technology (RGIPT), the Indian Institute of Space Science and Technology (IIST), and
                                the Indian Institute of Science (IISc), which use the score obtained in the JEE Advanced examination as the basis for admission. These institutes do not participate in the post-examination counselling session (JoSAA).<br><br>

                            </li>
                            <li> <strong> NEET :</strong> <br><br> The National Eligibility cum Entrance Test (Undergraduate) (or NEET (UG)), formerly the All India Pre-Medical Test (AIPMT), is an all India pre-medical entrance test for students who wish to
                                pursue undergraduate medical (MBBS), dental (BDS) and equivalent AYUSH (BAMS, BUMS, BHMS, etc.) courses in government and private institutions in India and also, for those intending to pursue primary medical qualification
                                abroad.
                            </li>
                        </ul>
                        <br> Certain Colleges may have an Interview in addition to the Entrance test so it is necessary to check your Registered Email daily to not miss out on anything.<br>
                    </p>
                </li>
        </div>
    </div>
    <div class="container-fluid text-center bg-grey">
        <div class="row" style="margin: 20px;">
                    <h1> The Result </h1>
                    <br>
                    <img src="Pics/8.jpg" width=490px height=380px>
                    <br>
                    <br>
                    <p> Most Colleges will have a Relative grading system where each student's profile and grades will be compared with other students of the admission pool. The students will be notified of the result within a week or two. If the student
                        gets selected, He/She will be asked to submit the original documents and pay the fees to reserve their seat. <br> It is important for Students who get rejected to not get dejected as some colleges give preference to certain people
                        because of their special skills or even due to their seat allocation structure. So, Chin Up Hunter!
                    </p>
        </div>
    </div>
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