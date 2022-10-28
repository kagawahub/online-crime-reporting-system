<?php
//database connection
include("../../connection.php");
?>


<?php
session_start();
$msg = 0;
    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

         //session data for login
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
 
        if (empty($email) || empty($password)) {
            $msg = "All field is required";
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
             $sql = "SELECT * FROM user_data WHERE email = '$email'";
            $search = $conn->query($sql);
            $find_email = $search->fetchColumn();

             if ($find_email) {
                 $msg = "Email is already registered";
            }else{
                  if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
            $msg = "The password does not meet the requirements!";
            }

            if ($msg == 0) {
            //Redirect user to the next page
            header('location:register3.php');

             }else{
            $msg = "Check your detailes";
            }

        }
    }

     

    }



 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../scss/style.css">
   <link rel="stylesheet" href="../../awesome_font/font-awesome.min.css">
    <link rel="stylesheet" href="../../scss/initial_pages_scss/_login.scss">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Step2</title>
    <link rel="icon" href=".././img/CropCrop/police_barge-used.png" type="image/icon type">
</head>

<body>
    <header>
        <nav>
            <a href="../../index.php">
                <section class="logo">
                    <img src="../../img/CropCrop/police_barge-used.png" alt="police logo">
                    <h1>Ghana Police Service</h1>
                </section>
            </a>
            <ul>
                <a href="../../index.php">
                    <li>Home</li>
                </a>
                <a href="../login.php">
                    <li>Login</li>
                </a>
                <a href="./register1.php" class="active_page">
                    <li>Register</li>
                </a>
                <a href="../about.php">
                    <li>About</li>
                </a>
                <a href="../emergency.php">
                    <li>Emergency</li>
                </a>
            </ul>
        </nav>
    </header>
    <div class="page_body">

        <div class="register_box">
            <div class="register_sidebar">
                <section class="steps_section">
                    <h2>Step 1</h2>
                    <h2 class="active_step">Step 2</h2>
                    <h2>Step 3</h2>
                </section>
                    <p class="reg_signup_link">Have an account already? <a href="">Login</p></a>
                
            </div>
            

                 <!-- <form class="register_form" action="../processor.php" method="POST"> -->
                <form class="register1_form" method="POST" action="#" novalidate="yes">
                    <div class="heading_label">
                        <h2>SIGN UP</h2>
                    </div>

                    <div class="user_text">
                        <p>Now enter a username and set a passoword for your account on the system</p>
                    </div>

                     <small style="color: red;" ><?php if ($msg != null) {echo $msg;}?></small>

                <div class="user_container">
                    <div class="insider">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php if(isset($submit)){echo $email;}?>" />
                    </div>

                    <div class="insider">
                        <label for="password_js">Password</label>
                        <input type="password" name="password" id="password_js" />
                    </div>
                        
                    <div class="checkbox0">
                        <input type="checkbox" id="checkbox_js" /><label for="checkbox_js">Show password</label>
                    </div>
                </div>

            <div class="direct_container">
                <a href="./register1.php"><div class="step2_button">Previous</div></a>

                <button name="submit" class="step2_button">Next</div></button>
            </div>      
        </form>

        </div>
    </div>
    <footer>
        <section class="sitemap">
            <h2>Site Map</h2>
            <ul>
                <a href="../../index.php">
                    <li>Home</li>
                </a>
                <a href="../login.php">
                    <li>Login</li>
                </a>
                <a href="./register1.php">
                    <li>Register</li>
                </a>
                <a href="../about.php">
                    <li>About</li>
                </a>
                <a href="../emergency.php">
                    <li>Emergency</li>
                </a>
            </ul>
        </section>
        <section class="social">
            <h2>Follow Us On:</h2>

            <a href="https://www.facebook.com/GhPoliceService/">
                <div class="link_item"><i class="fa fa-facebook" aria-hidden="true"></i>
                    <p> : facebook</p>
                </div>
            </a>
            <a href="https://twitter.com/GhPoliceService/">
                <div class="link_item"><i class="fa fa-twitter" aria-hidden="true"></i>
                    <p>: twitter</p>
                </div>
            </a>
            <a href="https://www.instagram.com/ghpoliceservice/">
                <div class="link_item"><i class="fa fa-instagram" aria-hidden="true"></i>
                    <p> : instagram</p>
                </div>
            </a>
            <a href="https://www.youtube.com/channel/UCy3jXFdDPuYmW2jy1bJAKfA">
                <div class="link_item"><i class="fa fa-youtube" aria-hidden="true"></i>
                    <p> : youtube</p>
                </div>
            </a>
        </section>
        <section class="footer_map">
            <h2>Locate Us</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9735558734865!2d-0.1888890857310853!3d5.570927595960935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a7d588b5833%3A0xb1138c9b28557412!2sGhana%20Police%20Headquarters!5e0!3m2!1sen!2sgh!4v1654725275138!5m2!1sen!2sgh" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </footer>
</body>
<script>
    const checkbox = document.getElementById("checkbox_js");
    const password = document.getElementById("password_js");

    checkbox.addEventListener("click" , changePasswordInputType)
    function changePasswordInputType(){
        if(checkbox.checked === true){
        password.type='text';
    }
    else{
        password.type='password';
    }
    }
    

</script>

</html>