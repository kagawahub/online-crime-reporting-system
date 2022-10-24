<?php
include("../connection.php");

// error_reporting(0);
$msg=0;

session_start();
    if(isset($_POST['submit'])){
        //declare post variables of form
        $username=$_POST['username'];
        $fullname=$_POST['fullname'];
        $password=$_POST['password'];
        $photo=$_POST['photo'];
    

        //session data for report
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['password'] = $password;
        $_SESSION['location'] = $location;
        $_SESSION['photo'] = $photo;
        

        //submit button varables
        $submit = $_POST['submit'];

        if($username == "" || $fullname == "" || $password == ""){
            $msg="All field is required";
        }

        if ($msg <= 0) {
          echo 'Admin created successfully';
       // echo"insert";
        //call session data for report data
        $username=$_POST['username'];
        $fullname=$_POST['fullname'];
        $password=$_POST['password'];
        $photo=$_POST['photo'];
        

        echo "<script>alert('Post created successfully!')</script>";

        //Save report data
        $insert = "INSERT INTO `admin_login`(`username`, `fullname`, `password`, `photo`) VALUES ('$username','$fullname','$password','$photo')";

            $results = $conn->exec($insert);
                if($results){
                    $msg = $_SESSION['msg'] = "Admin profile created successfully";
                     header('location:../admin/admin_dashboard.php');
                }else{
                   // echo"Don't redirect";
                   // header("location:./register3.php");
                }

    }else{
        // echo"Dont insert";
    }

    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../scss/style.css">
    <link rel="stylesheet" href="../awesome_font/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup page</title>
</head>
<body class="adminSignUp_body">
    <div class="form_name">
        <h2>O C R S</h2>
    </div>
    <form action="" method="POST">
        <h2>Create Admin</h2>
        <div class="create_container">
        <label for="username">Username</label>
        <input class="createInput" type="text" name="username">

        <label for="fullname">Fullname</label>
        <input class="createInput" type="text" name="fullname">

        <label for="password">Password</label>
        <input class="createInput" type="password" name="password">
        </div>
        
        <button class="createButton" name="submit" value="submit">Create</button>
    </form>
</body>
</html>