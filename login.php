<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="mystylesheet.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head> 
<body background="login.jpg" class="body_des">
    <center>
        <div class="login_des">
            <center class="first_des">
                Login
                <h4>
                    <?php
                    error_reporting(0);
                     session_start();
                     session_destroy();
                    echo $_SESSION['loginMessage'];
                    ?>
</h4>
</center>
        <form action="authentication.php" method="POST"class="login_frm">
            <div>
                <label class="label_des"> Email ID</label>
                <input type="text" name="email">
            </div>
            <div>
                <label class="label_des"> Password</label>
                <input type="Password" name="password">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" name="submit" value="Sign In">
            </div>
</form>
</div>
</center>
</body>
</html>