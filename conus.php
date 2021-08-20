<?php
include 'dbconn-dd.php';

$fname = $_POST['fname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$sql = "INSERT INTO contact (fname, email, comments)
VALUES ('$fname', '$email', '$comments')";
$result = mysqli_query($conn , $sql);
header("Location: homepage.html");
?>