<?php
$msg = 0;
//database connection
include("../../connection.php");

error_reporting(0);

?>


   <?php 
   session_start();
    if(isset($_POST['submit'])){
        //declare post variables of form
        $fullname=$_POST['fullname'];
        $gender=$_POST['gender'];
        $nationality=$_POST['nationality'];
        $dob=$_POST['dob'];
        $region=$_POST['region'];
        $streetAddress=$_POST['streetAddress'];
        $phone=$_POST['phone'];
        $national_id=$_POST['national_id'];

        //session data for userSs
        $_SESSION['fullname'] = $fullname;
        $_SESSION['gender'] = $gender;
        $_SESSION['nationality'] = $nationality;
        $_SESSION['dob'] = $dob;
        $_SESSION['region'] = $region;
        $_SESSION['streetAddress'] = $streetAddress;
        $_SESSION['phone'] = $phone;
        $_SESSION['national_id'] = $national_id;

        //submit button varables
        $submit = $_POST['submit'];

        if($fullname == "" || $gender == "" || $nationality == "" || $dob == "" || $region == "" || $streetAddress == "" || $phone == "" || $national_id == ""){
            $msg="All field is required";
        }

        if (!preg_match("/[a-zA-Z]/", $fullname) || !preg_match("/[a-zA-Z]/", $gender) || !preg_match("/[a-zA-Z]/", $nationality) || !preg_match("/[a-zA-Z]/", $region) ) {
            $msg = "Field support only text characters";
        }

        if (!preg_match("/[a-zA-Z]/", $gender)) {
            $msg = "Select either male or female";
        }

        if (!preg_match("/[A-Z0-9]/", $streetAddress) || !preg_match("/[A-Z0-9]/", $national_id) ) {
            $msg = "Some characters are not supported";
        }

        if (!is_numeric($phone) || strlen($phone) != 10) {
            $msg = "Incorrect phone number";
        }

        if ($msg <= 0) {
           
            header('location:register2.php');

        }else{
             $msg = "Check your details";
          
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
    <title>Register Step1</title>
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
                <a href="#" class="active_page">
                    <li>Register</li>
                </a>
                <a href="../about.php">
                    <li>About</li>
                </a>
                <a href="../emergency.php">
                    <li>Emergency numbers</li>
                </a>
            </ul>
        </nav>
    </header>
    <div class="page_body">

        <div class="register_box">
            <div class="register_sidebar">
                <section class="steps_section">
                    <h2 class="active_step">Step 1</h2>
                    <h2>Step 2</h2>
                    <h2>Step 3</h2>
                </section>
                    <p class="reg_signup_link">Have an account already? <a href="../login.php">Login</p></a>
                
            </div>

                <form class="register1_form" action="" method="POST">
                    <small style="color: red;" ><?php if ($msg != null) {echo $msg;}?></small>

                    <div class="heading_label">
                        <h2>SIGN UP</h2>
                    </div>

                    <div class="container_items">
                        <div class="insider"> <label for="first_name">Full Name</label>
                            <input type="text" name="fullname" value="<?php if(isset($submit)){echo $fullname;}?>" />
                        </div>

                        <div class="gender">
                            <label for="Gender">
                                <p>Gender</p>
                            </label>
                            <div class="radio_btn">
                                <input type="radio" value="Male" name="gender" /><label>Male</label>
                                 <input type="radio" value="Female" name="gender" /><label>Female</label>
                            </div>
                        </div>
                    </div>
                <div class="container_items">
                    <div class="insider"> <label for="nationality">Nationality</label>
                    

                        <input type="text" name="nationality" value="<?php if(isset($submit)){echo $nationality;}?>" />
                    </div>

                    <div class="insider"><label for="date_of birth">Date of Birth</label>
                        <input type="date" name="dob" value="<?php if(isset($submit)){echo $dob;}?>" />
                    </div>
                </div>
                <div class="container_items">
                    <div class="insider"> <label for="region">Region</label>
                    <select name="region" class="Rcombo_box">
                      <option value="select">Select</option>
                      <option value="accra">Greater Accra Region</option>
                      <option value="ahanti">Ashanti Region</option>
                      <option value="central">Central Region</option>
                      <option value="western">Western Region</option>
                      <option value="northern">Northern Region</option>
                      <option value="west">Upper West Region</option>
                      <option value="east">Upper East Region</option>
                      <option value="brong">Brong Ahafo Region</option>
                      <option value="east">Upper East Region</option>
                      <option value="oti">Oti Region</option>
                      <option value="ahafo">Ahafo Region</option>
                      <option value="volta">Volta Region</option>
                      <option value="bono">Bono East Region</option>
                      <option value="north">North East Region</option>
                      <option value="western_North">North East Region</option>
                      <option value="ahafo">Ahafo Region</option>
                    </select>

                        <!-- <input type="text" name="region" value="<?php if(isset($submit)){echo $region;}?>" /> -->
                    </div>

                    <div class="insider"><label for="street_address">Street Address</label>
                        <input type="text" name="streetAddress" value="<?php if(isset($submit)){echo $streetAddress;}?>" />
                    </div>
                </div>
                <div class="container_items">
                    <div class="insider"> <label for="phone_number">Phone Number</label>
                        <input type="tel" name="phone" value="<?php if(isset($submit)){echo $phone;}?>">
                    </div>

                    <div class="insider"><label for="national_id">Ghana Card ID</label>
                        <input type="text" name="national_id" value="<?php if(isset($submit)){echo $national_id;}?>" />
                    </div>
                </div>
                <!-- <div class="container_items">
                    <div class="insider"> <label for="Email_address">Email Address</label>
                        <input type="email" name="email" />
                    </div>

                    <div class="insider"><label for="national_id">National ID</label>
                        <input type="text" name="id" />
                    </div>
                </div> -->
            
                    <input type="submit"  value="Next" class="step1_button" name="submit">              
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
                <a href="#">
                    <li>Register</li>
                </a>
                <a href="../about.php">
                    <li>About</li>
                </a>
                <a href="../emergency.php">
                    <li>Emergency numbers</li>
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

</html>