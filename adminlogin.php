<?php
include 'dbconn-dd.php';
$username = $_POST['admin_username'];
$password = $_POST['admin_password'];

$sql = "SELECT * FROM admins WHERE admin_username='$username' AND admin_password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
die('Invalid Username or Password!<br><br>');
#echo "Invalid Username or Password!<br>";
}
else{
    header("Location: profile.php");
}
?>
