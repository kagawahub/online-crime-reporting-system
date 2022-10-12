<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../scss/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body class="fpPage_body">
    <form action="../initial_pages/login.php">
        <p>Reset your password</p>
        <section>
            <label id="newPassword_label" for="password">New password</label>
            <input type="text">
            <div class="check_container">
                <input type="checkbox">
                <p>Show password</p>
            </div>
            <button class="fpbutton">Reset</button>
        </section>
            <div class="dir"><a href="./forgot_password.php">Previous page</a>
            <div class="dir"><a href="../initial_pages/login.php">Go back to login page</a>
        </div>
        
    </form>
</body>
</html>