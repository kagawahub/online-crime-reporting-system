<?php
include("../../connection.php");
$msg=0;
session_start();

if (isset($_POST['submit'])) {
    $photo = $_POST['photo'];
    $_SESSION['photo'] = $photo;

    $email = $_SESSION['email'];

    if(empty($photo) || $photo==null){
         $msg = "Passport photo is required";
    }


    if ($msg <= 0) {
       // echo"insert";
        //call session data for users
        $fullname = $_SESSION['fullname'];
        $gender = $_SESSION['gender'];
        $nationality = $_SESSION['nationality'];
        $dob = $_SESSION['dob'];
        $region = $_SESSION['region'];
        $streetAddress = $_SESSION['streetAddress'];
        $phone = $_SESSION['phone'];
        $national_id = $_SESSION['national_id'];
        //$email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $photo = $_SESSION['photo'];


        //Save user data
        $insert = "INSERT INTO `user_data`(`fullname`, `gender`, `nationality`, `dob`, `region`, `streetAddress`, `phone`, `national_id`, `email`, `password`, `photo`) VALUES ('$fullname','$gender','$nationality','$dob','$region','$streetAddress','$phone','$national_id', '$email', '$password', '$photo' )";

            $results = $conn->exec($insert);
                if($results){
                    //$msg = $_SESSION['msg'] = "Your account has been registerd successfully";
                     header("location: ../login.php");
                }else{
                   // echo"Don't redirect";
                   // header("location:./register3.php");
                }
            //Redirect user to the next page

    }else{
        // echo"Dont insert";
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
    <title>Register Step3</title>
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
                    <!-- <a href=""></a> -->
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
                    <li>Emergency numbers</li>
                </a>
            </ul>
        </nav>
    </header>
    <div class="page_body">

        <div class="register_box">
            <div class="register_sidebar">
                <section class="steps_section">
                    <h2>Step 1</h2>
                    <h2>Step 2</h2>
                    <h2 class="active_step">Step 3</h2>
                </section>
                    <p class="reg_signup_link">Have an account already? <a href="">Login</p></a>
                
            </div>
            

            
            <form class="register1_form" method="POST" action=" ">
                <div class="heading_label">
                    <h2>SIGN UP</h2>
                     <small style="color: red;" ><?php if ($msg != null) {echo $msg;}?></small>
                </div>

                <div class="user_text">
                    <p>Upload a passport photo of yourself</p>
                </div>

                <div class="profilePic_container">
                    <!-- //img should not be more than 128px both Height and Weight -->
                    <img src="../../img/items/profile_icon2.png" alt="Profile picture">
                </div>

                <div class="insider">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" />
                </div>

                <div class="direct_container">
                    <a href="./register2.php"><div class="step2_button">Previous</div></a>

                    <input type="submit" value="Register" name="submit" class="step2_button"/>
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