<?php
	$msg = 0;
session_start();
include("../conn.php");

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

    if($username == null || $password == null){
      $msg="Email or password is required";
    }else{
     // User authentication
		$stmt = "SELECT * FROM admin_login WHERE  username = '$username' AND password = '$password'";
        $query = mysqli_query($conn, $stmt);
        $column = mysqli_num_rows($query);
        
        if ($column > 0) {
            $msg="Login successful";
            $_SESSION['username'] = $username;
            header("Location: admin_dashboard.php");
        }else{
            $msg="Invalid username or password";
        }
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
    <title>Admin Login</title>
</head>
<body class="adminLogin_body">
    <div class="form_name">
        <h2>O C R S</h2>
    </div>
    <form action=" " method="POST">
        <div class="inner_top">
            <div class="icon_container">
                <i class="fa fa-user"></i>
            </div>
            <h1>Admin</h1>
        </div>
        <small style="color:red;"> <?php if($msg != null){echo $msg;} ?></small>

        <div class="inner_middle">
            <div class="wrap">
                <label for="email">Email</label>
                <input type="text" name="username" required>
            </div>

            <div class="wrap">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
        </div>
        
        <div class="inner_bottom">
            <button type="submit" value="submit" name="submit"> Login</button>
            <a href="./password/forgot_password.php">Forgot Password?</a>
        </div>
    </form>
</body>
</html>