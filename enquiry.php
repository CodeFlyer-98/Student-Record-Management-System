<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="student_record";
$conn=mysqli_connect($host,$user,$password,$db);
if($conn==false)
{
    die("Connection Failure");
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $query=$_POST['query'];
    $sql="Insert into enquiry(Name,Email_ID,Phone_No,Query) values ('$name','$email','$phone','$query')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['message']="Your Query has been saved successfully , we will get back to you soon.";
        header("location:index.php");

    }
}
?>
