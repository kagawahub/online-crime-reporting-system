<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../scss/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../scss/initial_pages_scss/_login.scss">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Login</title>
</head>

<body>
    <header>
        <nav>
            <a href="../index.php">
                <section class="logo">
                    <img src="../img/Crop crop/police_barge-used.png" alt="police logo">
                    <h1>Ghana Police Service</h1>
                </section>
            </a>
            <ul>
                <a href="../index.php">
                    <li>Home</li>
                </a>
                <a href="#login">
                    <li>Login</li>
                </a>
                <a href="./register.php">
                    <li>Register</li>
                </a>
                <a href="./about.php">
                    <li>About</li>
                </a>
                <a href="./emergency.php">
                    <li>Emergency numbers</li>
                </a>
            </ul>
        </nav>
    </header>
    <div class="page_body">


        <form>
            <div class="img">
                <img src="../img/Crop crop/police_barge-used.png" alt="">
            </div>

            <div class="login_label">LOG IN</div>

            <div class="items">
                <label for="username">Username</label>
                <input type="text" placeholder="example: kagawahub121" />
            </div>

            <div class="items">
                <label for="password">Password</label>
                <input type="password" placeholder="***********" required />
            </div>

            <section class="control_container">
                <div class="checkbox">
                    <input type="checkbox">
                    <label>Remember me</label>
                </div>

                <div class="forgot">
                    <p><a href="#">Forgot Password?</a></p>
                </div>
            </section>

            <button class="btn">Login</button>

            <div class="signup_link">
                <p>New to the system? <a href="./register.php">Sign up</a></p>
            </div>
        </form>
    </div>
    <footer>
        <section class="sitemap">
            <h2>Site Map</h2>
            <ul>
                <a href="../index.php">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>Login</li>
                </a>
                <a href="./register.php">
                    <li>Register</li>
                </a>
                <a href="./about.php">
                    <li>About</li>
                </a>
                <a href="./emergency.php">
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