
<html>
    <head>
        <title>Update Student </title>
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
    <h1 align="left"> Update Student Data</h1>
    <?php
    $host="localhost";
    $user="root";
    $password="";
    $db="student_record";
    $conn=mysqli_connect($host,$user,$password,$db);
    $id=$_GET['id'];
    $query="Select * from student where Registration_No='$id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);


    ?>
    <div ><br>
        <form  action="UpdateData.php?id=<?php echo $id;?>" method="POST">
            <div>
                <label>Name</label>&nbsp;&nbsp;
                <input type="text" name="name" size="50" value="<?php echo $row['Name']?>">
            </div><br>
            <div>
                <label>Date Of Birth</label>&nbsp;&nbsp;
                <input type="date" name="dob"value="<?php echo $row['DOB']?>">
</div><br>
<div>
    <label>Gender</label>&nbsp;&nbsp;
    <div>
        <input type="radio" id="choice1" name="gender" value="male" <?php if($row['Gender']=="Male") echo "Checked";?>/>
        <label for="choice1">Male</label>
        <input type="radio" id="choice2" name="gender" value="female" <?php if($row['Gender']=="Female") echo "Checked";?>/>
        <label for="choice2">Female</label>
        <input type="radio" id="choice3" name="gender" value="others"<?php if($row['Gender']=="Others") echo "Checked";?> />
        <label for="choice3">Others</label>
</div><br><br>
</div>
            <div>
            <label>Email</label>&nbsp;&nbsp;
            <input type="text" name="email" size="50" value="<?php echo $row['Email']?>">
</div><br>
<div>
<label>Phone No</label>&nbsp;&nbsp;
<input type="text" name="phone" size="50" value="<?php echo $row['Phone_No']?>">
</div><br>
            <div>
                <label for="course1"> Course</label>&nbsp;&nbsp;
                <select name="Course" id="course1" >
                    <option value="<?=$row['Course']?>" selected="selected"><?=$row['Course']?></option>
                    <?php
                    if($row['Course']==' ')
                    {
                        echo '<option value="Machine Learning">Machine Learning</option>';
                        echo '<option value="Big Data">Big Data</option>';
                        echo '<option value="Cloud Computing">Cloud Computing</option>';
                        echo '<option value="Internet Of Things">Internet Of Things</option>';
                        echo '<option value="Data Science">Data Science</option>';
                    }    
                    elseif($row['Course']=='Machine Learning')
                    {
                        echo '<option value="Big Data">Big Data</option>';
                        echo '<option value="Cloud Computing">Cloud Computing</option>';
                        echo '<option value="Internet Of Things">Internet Of Things</option>';
                        echo '<option value="Data Science">Data Science</option>';
                    }
                    elseif($row['Course']=='Big Data')
                    {
                        echo '<option value="Machine Learning">Machine Learning</option>';
                        echo '<option value="Cloud Computing">Cloud Computing</option>';
                        echo '<option value="Internet Of Things">Internet Of Things</option>';
                        echo '<option value="Data Science">Data Science</option>';
                    }
                    elseif($row['Course']=='Cloud Computing')
                    {
                        echo '<option value="Machine Learning">Machine Learning</option>';
                        echo '<option value="Big Data">Big Data</option>';
                        echo '<option value="Internet Of Things">Internet Of Things</option>';
                        echo '<option value="Data Science">Data Science</option>';
                    }    
                    elseif($row['Course']=='Internet Of Things')
                    {
                        echo '<option value="Machine Learning">Machine Learning</option>';
                        echo '<option value="Big Data">Big Data</option>';
                        echo '<option value="Cloud Computing">Cloud Computing</option>';
                        echo '<option value="Data Science">Data Science</option>';
                    }
                    else
                    {
                        echo '<option value="Machine Learning">Machine Learning</option>';
                        echo '<option value="Big Data">Big Data</option>';
                        echo '<option value="Cloud Computing">Cloud Computing</option>';
                        echo '<option value="Internet Of Things">Internet Of Things</option>';
                    }
                    ?> 
</select>
</div><br>
<div>
<label>Present Address</label>
<br>
<textarea cols="80" rows="5" name="address">
    <?php echo $row['Present_Address']?>
</textarea>
</div>
<br><br>
<div>
<input class="btn btn-primary" id="submit" type="submit" name="submit" value="Update">
</div>
</form>
</div>
</div>
</body>
</html>   
