<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}
?>
<html>
    <head>
        <title>Add Student </title>
        <meta charset="utf-8">
        <?php
        include 'enquiry_css.php';
        ?>
</head>
<body >
<?php
    include 'enquiry_sidebar.php';
    ?>
<div class="content">
    <h1 align="left"> Add Student</h1>
    <div ><br>
        <form action="AddData.php" method="POST">
            <div>
                <label>Registration No</label>&nbsp;&nbsp;
                <input type="text" name="regno" size="50">
</div><br>
            <div>
                <label>Name</label>&nbsp;&nbsp;
                <input type="text" name="name" size="50">
            </div><br>
            <div>
                <label>Date Of Birth</label>&nbsp;&nbsp;
                <input type="date" name="dob">
</div><br>
<div>
    <label>Gender</label>&nbsp;&nbsp;
    <div>
        <input type="radio" id="choice1" name="gender" value="male"/>
        <label for="choice1">Male</label>
        <input type="radio" id="choice2" name="gender" value="female"/>
        <label for="choice2">Female</label>
        <input type="radio" id="choice3" name="gender" value="others"/>
        <label for="choice3">Others</label>
</div>
</div><br><br>
            <div>
            <label>Email</label>&nbsp;&nbsp;
            <input type="text" name="email" size="50">
</div><br>
<div>
<label>Phone No</label>&nbsp;&nbsp;
<input type="text" name="phone" size="50">
</div><br>
            <div>
                <label for="course1"> Course</label>&nbsp;&nbsp;
                <select name="course" id="course1">
                    <option value=" "> Select Course</option>
                    <option value="Machine Learning" >Machine Learning</option>
                    <option value="Big Data" >Big Data</option>
                    <option value="Cloud Computing" >Cloud Computing</option>
                    <option value="Internet Of Things" >Internet Of Things</option>
                    <option value="Data Science" >Data Science</option>
</select>
</div><br>
<div>
<label>Present Address</label>
<br>
<textarea cols="80" rows="5" name="address">
</textarea>
</div>
<br><br>
<div>
<input class="btn btn-primary" id="submit" type="submit" name="submit" value="Add">
</div>
</form>
</div>
</div>
</body>
</html>   