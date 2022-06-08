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
                <a href="#register">
                    <li>Register</li>
                </a>
                <a href="#about">
                    <li>About</li>
                </a>
                <a href="#emergency">
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

            <div class="login-label">LOG IN</div>

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
                <p>New to the system? <a href="#">Sign up</a></p>
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
                <a href="#login">
                    <li>Login</li>
                </a>
                <a href="#register">
                    <li>Register</li>
                </a>
                <a href="#about">
                    <li>About</li>
                </a>
                <a href="#emergency">
                    <li>Emergency numbers</li>
                </a>
            </ul>
        </section>
        <section class="social">
            <h2>Follow Us On</h2>
            <div class="links">
                <a href="https://www.facebook.com/kagawabossman"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/Spratagious"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://github.com/kagawahub"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/owusu-bossman-415330212/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>

        </section>
    </footer>
</body>

</html>