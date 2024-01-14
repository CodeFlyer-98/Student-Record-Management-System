<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="student_record";
$id=$_GET['id'];
$conn=mysqli_connect($host,$user,$password,$db);
$sql="Delete from student where Registration_No='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    $_SESSION['message']="Student Data has been deleted succesfully saved";
    header("location:admindashboard.php");

}
?>