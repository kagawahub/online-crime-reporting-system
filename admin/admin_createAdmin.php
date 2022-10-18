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
    <form action="./admin_dashboard.php">
        <h2>Create Admin</h2>
        <div class="create_container">
        <label for="username">Username</label>
        <input class="createInput" type="text" name="username">

        <label for="password">Password</label>
        <input class="createInput" type="password" name="password">
        </div>
        
        <button class="createButton">Create</button>
    </form>
</body>
</html>