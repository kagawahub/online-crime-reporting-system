<?php
include("../connection.php");

// error_reporting(0);
$msg=0;

session_start();
    if(isset($_POST['submit'])){
        //declare post variables of form
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $crime_type = $_POST['crime_type'];
        $location=$_POST['location'];
        $description=$_POST['description'];

        //session data for report
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        $_SESSION['crime_type'] = $crime_type;
        $_SESSION['location'] = $location;
        $_SESSION['description'] = $description;

        //submit button varables
        $submit = $_POST['submit'];

        if($name == "" || $phone == "" || $crime_type == "" || $location == ""){
            $msg="All field is required";
        }

        if ($msg <= 0) {
          echo 'Report is submited successfully';
       // echo"insert";
        //call session data for report data
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $crime_type = $_POST['crime_type'];
        $location=$_POST['location'];
        $description=$_POST['description'];

        echo "<script>alert('Report submitted successfully!')</script>";

        //Save report data
        $insert = "INSERT INTO `emergency_report`(`name`, `phone`, `crime_type`, `location`, `description`) VALUES ('$name','$phone','$crime_type','$location','$description')";

            $results = $conn->exec($insert);
                if($results){
                    $msg = $_SESSION['msg'] = "Your report has been submited successfully";
                     header('location:./emergency.php');
                     $msg = $_SESSION['msg'] = "Your report has been submited successfully";
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
  <link rel="stylesheet" href="../awesome_font/font-awesome.min.css" />
    <link rel="stylesheet" href="../scss/initial_pages_scss/_emergency.scss">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Numbers</title>
</head>

<body>
    <header>
        <nav>
            <a href="../index.php">
                <section class="logo">
                    <img src="../img/Cropcrop/police_barge-used.png" alt="police logo">
                    <h1>Ghana Police Service</h1>
                </section>
            </a>
            <ul>
                <a href="../index.php">
                    <li>Home</li>
                </a>
                <a href="./login.php">
                    <li>Login</li>
                </a>
                <a href="./register_pages/register1.php">
                    <li>Register</li>
                </a>
                <a href="./about.php">
                    <li>About</li>
                </a>
                <a href="#emergency" class="active_page">
                    <li>Emergency</li>
                </a>
            </ul>
        </nav>
    </header>
    <div class="emergency_body">
        <div class="emergency_heading">
            EMERGENCY REPORTING
        </div>
        <form class="emer_report" action="" method="POST">
            <h2>REPORT AN EMERGENCY</h2>
            <div class="grid_container">
            <section class="grid_item">
                <div class="r_content">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text">
                </div>
            </section>
                <section class="grid_item">
                <div class="r_content">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" type="tel">
                </div>
            </section>
                <section class="grid_item">
                <div class="r_content">
                    <label for="crime_type">Crime Type</label>
                    <input id="crime_type" name="crime_type" type="text">
                </div>
            </section>
            <section class="grid_item">
                <div class="r_content">
                    <label for="location">Location</label>
                    <input id="location" name="location" type="text">
                </div>
            </section>
            </div>
            <section class="des_container">
                <div class="r_content">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="12"></textarea>
                </div>
            </section>
            <button class="emer_button" name="submit" value="submit">SUBMIT</button>
        </form>


        <div class="emergency_next">
            EMERGENCY NUMBERS
        </div>
        <section class="emergency_text">
            <img src="../img/Cropcrop/emergency_numbers.jpeg" alt="">
            Emergency numbers are the hotlines of the various emergency services in Ghana. Ghana's main emergency stations include the Police Service, the Fire Sevice and the Ambulance Service. These are considered as first responders to critical situations such as crime scenes.

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem suscipit omnis perspiciatis architecto exercitationem. Minus nesciunt porro est temporibus asperiores quia consequuntur commodi consectetur? Fuga magnam maxime necessitatibus explicabo placeat.

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem suscipit omnis perspiciatis architecto exercitationem. Minus nesciunt porro est temporibus asperiores quia consequuntur commodi consectetur? Fuga magnam maxime necessitatibus explicabo placeat.
        </section>
        <section class="emer_container">
            <div class="emer1_items">
                <div class="inside_box">
                    <div class="service_name">
                        <div>
                            <img src="../img/CropCrop/police_barge-used.png" alt="">
                        </div>
                        <div>
                            <h2>Ghana Police Service</h2>
                        </div>
                    </div>
                    <div>
                        <h1>191</h1>
                    </div>
                </div>
            </div>

            <div class="emer2_items">
                <div class="inside_box">
                    <div class="service_name">
                        <div>
                            <img src="../img/CropCrop/fire_service_logo-used.png" alt="">
                        </div>
                        <div>
                            <h2>Ghana Fire Service</h2>
                        </div>
                    </div>
                    <div>
                        <h1>192</h1>
                    </div>
                </div>
            </div>
            <div class="emer3_items">
                 <div class="inside_box">
                    <div class="service_name">
                        <div>
                            <img src="../img/CropCrop/ambulance_logo-used.png" alt="">
                        </div>
                        <div>
                            <h2>Ghana Ambulance Service</h2>
                        </div>
                    </div>
                    <div>
                        <h1>193</h1>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <footer>
        <section class="sitemap">
            <h2>Site Map</h2>
            <ul>
                <a href="../index.php">
                    <li>Home</li>
                </a>
                <a href="./login.php">
                    <li>Login</li>
                </a>
                <a href="./register_pages/register1.php">
                    <li>Register</li>
                </a>
                <a href="./about.php">
                    <li>About</li>
                </a>
                <a href="#emergency">
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

</html>