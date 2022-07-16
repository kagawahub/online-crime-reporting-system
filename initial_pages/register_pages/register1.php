<?php

if (isset($_POST['submit'])) {


//declare form vaiables
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$dob = $_POST['dob'];
$region = $_POST['region'];
$streetAddress = $_POST['streetAddress'];
$phone = $_POST['phone'];
$occupation = $_POST['occupation'];
$email = $_POST['email'];
$nationality = $_POST['nationality'];

if ($fullname == null || empty(fullname)) {
    echo $msg = "Fullname is required";
    
}





}








?>





<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../scss/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
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
            

                 <!-- <form class="register_form" action="../processor.php" method="POST"> -->
                <form class="register1_form" action="register1_form.php" method="POST">
                    <small><?php if ($msg != null) {echo $msg;}?></small>

                    <div class="heading_label">
                        <h2>SIGN UP</h2>
                    </div>

                    <div class="container_items">
                        <div class="insider"> <label for="first_name">Full Name</label>
                            <input type="text" name="fullname" />
                        </div>

                        <div class="gender">
                            <label for="Gender">
                                <p>Gender</p>
                            </label>
                            <div class="radio_btn">
                                <label for="gender">Male</label>
                                <input type="radio" value="male" name="gender" />
                                <label for="gender" value="Female" name="gender">Female</label>
                                <input type="radio" />
                            </div>
                        </div>
                    </div>
                <div class="container_items">
                    <div class="insider"> <label for="nationality">Nationality</label>
                        <input type="text" name="nationality" />
                    </div>

                    <div class="insider"><label for="date_of birth">Date of Birth</label>
                        <input type="date" name="dob" />
                    </div>
                </div>
                <div class="container_items">
                    <div class="insider"> <label for="region">Region</label>
                        <input type="text" name="rigion" />
                    </div>

                    <div class="insider"><label for="street_address">Street Address</label>
                        <input type="text" name="streetAddress" />
                    </div>
                </div>
                <div class="container_items">
                    <div class="insider"> <label for="phone_number">Phone Number</label>
                        <input typee="tel" / name="phone">
                    </div>

                    <div class="insider"><label for="occupation">Occupation</label>
                        <input type="text" name="occupation" />
                    </div>
                </div>
                <div class="container_items">
                    <div class="insider"> <label for="Email_address">Email Address</label>
                        <input type="email" name="email" />
                    </div>

                    <div class="insider"><label for="national_id">National ID</label>
                        <input type="text" name="id" />
                    </div>
                </div>
            
                    <a href="./register2.php"><div class="step1_button">Next</div></a>              
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