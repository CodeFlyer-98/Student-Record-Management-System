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
        <title>Admin </title>
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
    <h1 align="center"> Admin Dashboard</h1>
</div>

</body>
</html>   



