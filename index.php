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
        <meta charset="utf-8">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="mystylesheet.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo_txt">Elite Computech Private Limited</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Enquiry</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
</ul>
</nav>
<div class="sectionA">
    <img class="first_img" src="first_img.jpg" alt="">
    <h4 class="tag_line">Grow Your Career With Technology</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="institute_class" src="institute1.jpg" >
</div>
<div class="col-md-8">
    <h3>Welcome to Elite Computech Private Limited</h3>
    <p>We are a computer training institute established in 2007. The company started with a vison to provide computer training to people from various
        industrial backgrounds so that they can grow in their career with technology. We have providing training on latest technologies for the last 16 years.  </p>
    <p> Today we are a globally recognized brand in the field of training and development. We have a our branches in more than 20 countries which includes US, UK, France, 
        Germany etc. We have trained more than one lakh candidates all over the globe and today they are working in portfolio's of Software Development Engineer, Full Stack Developer
        , AI/ ML engineer etc. in reputed firm's like Google, Microsoft, Oracle and Amazon and are doing wonders in their career. Our sole motive is to achieve excellence in the
         field of training and development. </p>
</div>
</div>
</div>
<center>
    <h3 >Courses We Offer</h3>
</center>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="Courses" src="Cloud Computing.jpg">
            <h4>Cloud Computing</h4>
</div>
<div class="col-md-4">
            <img class="Courses" src="Machine_Learning.jpeg">
            <h4>Machine Learning</h4>
</div>
<div class="col-md-4">
            <img class="Courses" src="big-data.jpg">
            <h4>Big Data</h4>
</div>
</div>
</div>
<center>
    <h3>Enquiry Form</h3>
</center>
<div align="center"class="enquiry_form">
    <form action="enquiry.php" method="POST">
        <div class="enq">
            <label class="label_txt">Name</label>
            <input class="input_des" type="text" name="name">
</div>
<div  class="enq">
            <label  class="label_txt">Email ID</label>
            <input  class="input_des" type="text" name="email">
</div>
<div  class="enq">
            <label  class="label_txt">Phone No</label>
            <input class="input_des" type="text" name="phone">
</div>
<div  class="enq">
            <label  class="label_txt">Query</label>
            <textarea class="input_txt" name="query"></textarea>
</div>
<div  class="enq">
    <input class="btn btn-primary" id="submit" type="submit" value="Submit" name="submit">
</div>
</div>
</form>
</body>
</html>
