
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="student_record";
$id=$_GET['id'];
$conn=mysqli_connect($host,$user,$password,$db);
if($conn==false)
{
    die("Connection Failure");
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['Course'];
    $address=$_POST['address'];
    $sql="Update student set Name='$name',DOB='$dob',Gender='$gender',Email='$email',Phone_No='$phone',Course='$course',Present_Address='$address' where Registration_No='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['message']="Student Data has been updated succesfully saved";
        header("location:admindashboard.php");

    }
}
?>