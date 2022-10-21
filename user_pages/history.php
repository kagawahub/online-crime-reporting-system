<?php
include("../connection.php");

$dbconn = mysqli_connect('localhost','root','','ocrs_db');
if (!$dbconn) {
  echo "not connected";
}else {
  // echo "connected";
}


// $query data from database
    $sql= ("SELECT * FROM `reports` ORDER BY `reports`.`reporting_time` DESC ");
    $query= mysqli_query($dbconn, $sql);    
?>




<html lang="en">
  <head>
    <link rel="stylesheet" href="../scss/_admin_tableStyle.scss">
    <link rel="stylesheet" href="../scss/style.css" />
    <link rel="stylesheet" href="../awesome_font/font-awesome.min.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>History</title>
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
          <a href="./newsFeed.php"
          ><div class="side_item">
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

        <a href="#">
            <div class="side_item active_page">
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
      <div class="page_title">HISTORY</div>
      <div class="main_content">
        <div class="dashboard_content records_container">
                <table>
                  <tr>
                    <th>Reporting Time</th>
                    <th>Crime Type</th>
                    <th>Crime Description</th>
                    <th>Date of Incidence</th>
                    <th>Time of Incidence</th>
                    <th>Region</th>
                  </tr>
                  <?php

                    foreach ($query as $row){
                      // echo $row['id'];
                    
                    ?>
                      <tr>
                      <td><?php echo $row['reporting_time'] ?></td>
                      <td><?php echo $row['crime_type'] ?></td>
                      <td><?php echo $row['description'] ?></td>
                      <td><?php echo $row['date_of_incidence'] ?></td>
                      <td><?php echo $row['date_of_incidence'] ?></td>
                      <td><?php echo $row['region'] ?></td>
                      
                    </tr>
                    
                    <?php
                    }
                  ?>   

      </div>
      </div>
  </body>
</html>
