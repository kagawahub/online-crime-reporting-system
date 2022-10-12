<?php
   session_start();
//Database connection
	include("../connection.php");;
	
	//error_reporting(0);
	$msg = null;

	if (isset($_POST['submit'])) {

		$email = $_POST['email'];
		
		// Grab seession email to another page
		//$_SESSION['email'] = $email;

		//Check for existing email in database
			$stmt = "SELECT email FROM user_data2 WHERE  email = '$email' ";
 			$query = $conn->query($stmt);
			$resultCount = $query->fetchColumn();
 
			if ($resultCount >= 1) {
				//$msg = "Email is found";
				//Generate a verification to the user
				$code = rand(987645,123456,);

				//PHPMAILER IS USED TO SEND A VERIFICATION CODE TO USER EMAIL
				include("mail.php");


			}else{
				$msg = "You are not a member";

			}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../scss/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body class="fpPage_body">
    <form action="#" method="POST">
        <p>Enter the registered email address for a verification code to reset your password</p><br>
        <section>
            <label for="email">Email</label>
            <input type="email">
        <button class="fpbutton">Submit</button>
        <small style="color: red;" ><?php if ($msg != null) {echo $msg;}?></small>

        </section>
        <div class="dir"><a href="../initial_pages/login.php">Go back to login page</a></div>
        
    </form>
</body>
</html>