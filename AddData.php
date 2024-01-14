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
    $id=
    $regno=$_POST['regno'];
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $sql="Insert into student(Registration_No,Name,DOB,Gender,Email,Phone_No,Course,Present_Address) values ('$regno','$name','$dob','$gender','$email','$phone','$course','$address')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['message']="Student Data has been added succesfully saved";
        header("location:add.php");

    }
}
?>