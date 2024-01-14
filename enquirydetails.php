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
$sql="Select * From enquiry";
$result=mysqli_query($conn,$sql);
?>
<html>
    <head>
        <title>Admin </title>
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
    <h1 > Enquiry Details</h1>
    <br><br>
<table style="width: 90%;">
    <tr>
        <th style="padding: 20px; font-size: 15px;" >Name</th>
        <th style="padding: 20px; font-size: 15px;">Email ID</th>
        <th style="padding: 20px; font-size: 15px;">Phone No</th>
        <th style="padding: 20px; font-size: 15px;">Query </th>
</tr>
<?php
while($info=$result->fetch_assoc())
{

?>
<tr>
    <td style="padding: 20px;"><?php echo "{$info['Name']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Email_ID']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Phone_No']}"?></td>
    <td style="padding: 20px;"><?php echo "{$info['Query']}"?></td>

        </tr>
<?php
}
?>
</table>
</center>
</div>
</body>
</html>   



