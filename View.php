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
$sql="Select * From student";
$result=mysqli_query($conn,$sql);
?>
<html>
    <head>
        <title>View</title>
        <meta charset="utf-8">
        <?php
        include 'enquiry_css.php';
        ?>
        <style>
            table,
            th,
            td,
            tr{
                border: 1px solid black;
            }
            </style>
</head>
<body>
<?php
    include 'enquiry_sidebar.php';
?>
<div class="content">
    <center>
        <h1>Student Details</h1>
        <br><br>
        <table style="width: 90%;">
        <tr>
        <th style="padding: 20px; font-size: 15px;" >Registration Number</th>
        <th style="padding: 20px; font-size: 15px;">Name</th>
        <th style="padding: 20px; font-size: 15px;">Date Of Birth</th>
        <th style="padding: 20px; font-size: 15px;">Gender</th>
        <th style="padding: 20px; font-size: 15px;" >Email </th>
        <th style="padding: 20px; font-size: 15px;">Phone No</th>
        <th style="padding: 20px; font-size: 15px;">Course</th>
        <th style="padding: 20px; font-size: 15px;">Present Address</th>
        <th style="padding: 20px; font-size: 15px;">Update </th>
        <th style="padding: 20px; font-size: 15px;">Delete</th>
        </tr>   
        <?php
        while($info=$result->fetch_assoc())
        {
            ?>
            <tr>
    <td style="padding: 20px;"><?php echo "{$info['Registration_No']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Name']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['DOB']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Gender']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Email']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Phone_No']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Course']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Present_Address']}"?></td>
    <td style="padding: 20px;"><a href="Update.php?id=<?php echo "{$info['Registration_No']}"?>" class="btn btn-success">Update</a></td>
    <td style="padding: 20px;"><a href="Delete.php?id=<?php echo "{$info['Registration_No']}"?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php
        }
        ?>
        </table>
</center>
</div>
</body>
</html>   
