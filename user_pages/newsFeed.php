<?php
include("../connection.php");

$dbconn = mysqli_connect('localhost','root','','ocrs_db');
if (!$dbconn) {
  echo "not connected";
}else {
  // echo "connected";
}

// $query data from database
    $sql= ("SELECT * FROM post");
    $query= mysqli_query($dbconn, $sql);    
?>




<html lang="en">
  <head>
    <link rel="stylesheet" href="../scss/style.css" />
    <link rel="stylesheet" href="../awesome_font/font-awesome.min.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News Feed</title>
    <link
      rel="icon"
      href=".././img/CropCrop/police_barge-used.png"
      type="image/icon type"
    />
  </head>

  <body class="user_body">
      <div class="left-content">
        <section class="user_sidebar">
        <h2 class="User_dashLabel">User Dashboard</h2>
        <hr />
        <div class="sidebar_inner">
          <a href="#"
          ><div class="side_item active_page">
              <h2>News Feed</h2>
              <div class="icon"><i class="fa fa-rss"></i></div></div
        ></a>

        <a href="./reportForm.php"
          ><div class="side_item">
            <h2>Report Form</h2>
            <div class="icon">
              <i class="fa fa-file-text"></i>
            </div></div
        ></a>

        <a href="./feedBack.php"
          ><div class="side_item">
            <h2>Feed Back</h2>
            <div class="icon">
              <i class="fa fa-comments"></i>
            </div></div
        ></a>

        <a href="./history.php">
            <div class="side_item">
                <h2>History</h2>
                <div class="icon"><i class="fa fa-history"></i></div>
            </div
        ></a>

        <a href="./userProfile.php"
          ><div class="side_item">
            <h2>User Profile</h2>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div></div
        ></a>

        <a href="./help.php"
          ><div class="side_item">
            <h2>Help</h2>
            <div class="icon">
              <i class="fa fa-info-circle"></i>
            </div></div
        ></a>
        </div>
        <a class="logout_item" href="../index.php">
          <div>LOG OUT</div>
          <div class="icon"><i class="fa fa-sign-out"></i></div>
        </a>
      </section>
    </div>

    <div class="main_container">
      <h1 class="welcome-msg">ONLINE CRIME REPORTING SYSTEM</h1>
      <div class="page_title">NEWS FEED</div>
      <div class="main_content">
        <div class="news_container">
          <div class="news_item">
            <div class="news_title"><?php echo `title`?></div>
            <div class="news_body">
              <?php echo 'post_body'?>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ducimus delectus sint, culpa quibusdam debitis tempora atque ipsam impedit veritatis, recusandae esse quos adipisci a doloribus. Tenetur eum provident molestiae!
            </div>
          </div>
        </div>
      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit veritatis similique pariatur eius quas reiciendis illo quis vitae veniam ab aliquam odio libero quo laborum fugiat ad, placeat totam assumenda facere neque natus repudiandae? Provident minima expedita cum repellendus deleniti sapiente modi corporis rerum voluptate. Provident porro numquam aliquam voluptatem, suscipit sint dolorem. Provident debitis dicta perspiciatis sapiente, aut iusto adipisci assumenda nemo labore. At beatae doloremque iste, quasi error facere quod et quisquam modi repudiandae voluptates ad. Fuga pariatur consectetur quod corporis. Dicta rerum architecto, corrupti eveniet quis tempora. Porro temporibus in repellat culpa! Repellendus laudantium voluptatibus accusantium, voluptatum rem sequi ab quas vitae, quam voluptas eaque quis quidem illum rerum officia, accusamus architecto sed aspernatur ipsam tenetur! Deleniti placeat dicta dolore cupiditate, et est obcaecati accusantium voluptate eius, aut ratione quae dignissimos odit corrupti, nisi eligendi quaerat fuga. In laboriosam expedita distinctio dolorem hic ea ipsam dolore quod, deleniti libero. Impedit aut distinctio debitis porro quibusdam enim minus perspiciatis. Neque omnis possimus incidunt optio corporis, velit, earum eum numquam reprehenderit dolorum impedit eos id nihil voluptate repellendus. Officia temporibus nostrum porro sunt libero nulla consectetur eveniet atque aspernatur quam aliquid quod numquam asperiores at praesentium dignissimos, veritatis nobis eum! Nesciunt deserunt vel dignissimos, natus labore debitis eaque? Nulla nemo corporis, placeat quam recusandae deserunt voluptatibus nihil qui voluptates distinctio, nesciunt a veritatis cupiditate. Eveniet quibusdam exercitationem cupiditate blanditiis fugiat saepe mollitia. Totam dolorem eum dolore, modi ut ipsa repudiandae nam, deleniti, adipisci expedita beatae? Excepturi, sit facilis asperiores voluptate amet quam veniam dolorem reiciendis quos fugit expedita hic obcaecati possimus consequatur molestias ex. Asperiores dicta quae omnis laudantium nostrum maiores, fuga a illo expedita id, enim mollitia aliquam, iusto excepturi voluptatibus qui natus vel. Soluta repellendus cupiditate quo exercitationem maxime illo sint possimus ex, consectetur reiciendis, similique est.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit veritatis similique pariatur eius quas reiciendis illo quis vitae veniam ab aliquam odio libero quo laborum fugiat ad, placeat totam assumenda facere neque natus repudiandae? Provident minima expedita cum repellendus deleniti sapiente modi corporis rerum voluptate. Provident porro numquam aliquam voluptatem, suscipit sint dolorem. Provident debitis dicta perspiciatis sapiente, aut iusto adipisci assumenda nemo labore. At beatae doloremque iste, quasi error facere quod et quisquam modi repudiandae voluptates ad. Fuga pariatur consectetur quod corporis. Dicta rerum architecto, corrupti eveniet quis tempora. Porro temporibus in repellat culpa! Repellendus laudantium voluptatibus accusantium, voluptatum rem sequi ab quas vitae, quam voluptas eaque quis quidem illum rerum officia, accusamus architecto sed aspernatur ipsam tenetur! Deleniti placeat dicta dolore cupiditate, et est obcaecati accusantium voluptate eius, aut ratione quae dignissimos odit corrupti, nisi eligendi quaerat fuga. In laboriosam expedita distinctio dolorem hic ea ipsam dolore quod, deleniti libero. Impedit aut distinctio debitis porro quibusdam enim minus perspiciatis. Neque omnis possimus incidunt optio corporis, velit, earum eum numquam reprehenderit dolorum impedit eos id nihil voluptate repellendus. Officia temporibus nostrum porro sunt libero nulla consectetur eveniet atque aspernatur quam aliquid quod numquam asperiores at praesentium dignissimos, veritatis nobis eum! Nesciunt deserunt vel dignissimos, natus labore debitis eaque? Nulla nemo corporis, placeat quam recusandae deserunt voluptatibus nihil qui voluptates distinctio, nesciunt a veritatis cupiditate. Eveniet quibusdam exercitationem cupiditate blanditiis fugiat saepe mollitia. Totam dolorem eum dolore, modi ut ipsa repudiandae nam, deleniti, adipisci expedita beatae? Excepturi, sit facilis asperiores voluptate amet quam veniam dolorem reiciendis quos fugit expedita hic obcaecati possimus consequatur molestias ex. Asperiores dicta quae omnis laudantium nostrum maiores, fuga a illo expedita id, enim mollitia aliquam, iusto excepturi voluptatibus qui natus vel. Soluta repellendus cupiditate quo exercitationem maxime illo sint possimus ex, consectetur reiciendis, similique est.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit veritatis similique pariatur eius quas reiciendis illo quis vitae veniam ab aliquam odio libero quo laborum fugiat ad, placeat totam assumenda facere neque natus repudiandae? Provident minima expedita cum repellendus deleniti sapiente modi corporis rerum voluptate. Provident porro numquam aliquam voluptatem, suscipit sint dolorem. Provident debitis dicta perspiciatis sapiente, aut iusto adipisci assumenda nemo labore. At beatae doloremque iste, quasi error facere quod et quisquam modi repudiandae voluptates ad. Fuga pariatur consectetur quod corporis. Dicta rerum architecto, corrupti eveniet quis tempora. Porro temporibus in repellat culpa! Repellendus laudantium voluptatibus accusantium, voluptatum rem sequi ab quas vitae, quam voluptas eaque quis quidem illum rerum officia, accusamus architecto sed aspernatur ipsam tenetur! Deleniti placeat dicta dolore cupiditate, et est obcaecati accusantium voluptate eius, aut ratione quae dignissimos odit corrupti, nisi eligendi quaerat fuga. In laboriosam expedita distinctio dolorem hic ea ipsam dolore quod, deleniti libero. Impedit aut distinctio debitis porro quibusdam enim minus perspiciatis. Neque omnis possimus incidunt optio corporis, velit, earum eum numquam reprehenderit dolorum impedit eos id nihil voluptate repellendus. Officia temporibus nostrum porro sunt libero nulla consectetur eveniet atque aspernatur quam aliquid quod numquam asperiores at praesentium dignissimos, veritatis nobis eum! Nesciunt deserunt vel dignissimos, natus labore debitis eaque? Nulla nemo corporis, placeat quam recusandae deserunt voluptatibus nihil qui voluptates distinctio, nesciunt a veritatis cupiditate. Eveniet quibusdam exercitationem cupiditate blanditiis fugiat saepe mollitia. Totam dolorem eum dolore, modi ut ipsa repudiandae nam, deleniti, adipisci expedita beatae? Excepturi, sit facilis asperiores voluptate amet quam veniam dolorem reiciendis quos fugit expedita hic obcaecati possimus consequatur molestias ex. Asperiores dicta quae omnis laudantium nostrum maiores, fuga a illo expedita id, enim mollitia aliquam, iusto excepturi voluptatibus qui natus vel. Soluta repellendus cupiditate quo exercitationem maxime illo sint possimus ex, consectetur reiciendis, similique est.</p> -->
      </div>
      </div>
  </body>
</html>
