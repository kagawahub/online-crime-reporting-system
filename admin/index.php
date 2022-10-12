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
    <form action="./admin_dashboard.php">
        <div class="inner_top">
            <div class="icon_container">
                <i class="fa fa-user"></i>
            </div>
            <h1>Admin</h1>
        </div>

        <div class="inner_middle">
            <div class="wrap">
                <label for="email">Email</label>
                <input type="email" name="email">
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