<?php
session_start();
include 'dbconn-dd.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
  echo('<script> alert ("Invalid username or password. Please check again. ")</script>');
  die("");
}

else{
  echo"Login Successful!<br><br>";

}

$userhsc = $row["hsc"];
$_SESSION['userhsc'] = $userhsc;
header ("Location: index.php");
?>
