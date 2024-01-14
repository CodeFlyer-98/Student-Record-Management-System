<?php
error_reporting(0);
session_start();
//get values from login.php
$email=$_POST['email'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","student_record");

//prevent sql injection
$email=stripcslashes($email);
$password=stripcslashes($password);
$email=mysqli_real_escape_string($conn,$email);
$password=mysqli_real_escape_string($conn,$password);


$result=mysqli_query($conn,"select * from user where email = '$email' and password ='$password'") or die("Failed to connect with database".mysqli_error());
$row=mysqli_fetch_array($result);
if ($row['email']==$email && $row['password']==$password) {
    header("location:admindashboard.php");
}
else{
    session_start();
    $message="Invalid Email ID or Password";
    $_SESSION['loginMessage']=$message;
    header("location:login.php");
}

?>
