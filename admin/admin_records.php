<?php
include("../connection.php");

$dbconn = mysqli_connect('localhost','root','','ocrs_db');
if (!$dbconn) {
  echo "not connected";
}else {
  // echo "connected";
}


// $query data from database
    $sql= ("SELECT * FROM reports ORDER BY reporting_time desc");
    $query= mysqli_query($dbconn, $sql);    
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../scss/style.scss">
    <link rel="stylesheet" href="../scss/_admin_tableStyle.scss">
    <link rel="stylesheet" href="../scss/ADMIN_scss/admin_dashboard.css">
    <link rel="stylesheet" href="../awesome_font/font-awesome.min.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Records</title>
  </head>
  <body class="admin_body">
    <nav class="sidebar">
       <div class="admin_dashlabel_text">ONLINE CRIME REPORTING SYSTEM
        <div>
      <hr class="admin_hr">
      <div class="admin_profile_container">
        <div class="admin_pic">
          <div class="rounded_online"></div>
          <img class="admin_img1" src="../img/items/profile_icon2.png" alt="">
        </div>
        <div class="admin_profiletext_container">
          <h3>Bossman Owusu</h3>
          <p style="color: white; font-size:16px; text-align: left;">Admin</p>
        </div>
        <a href="#"><i class="fa fa-caret-down"></i></a>
      </div>
      <div class="dropdown_menu">
        <ul>
          <li><a href="#">Notifications</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Add an admin</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
      
      <section class="navi-container">
        <div class="navi_item">
          <a href="./admin_dashboard.php" class="navi_a"
            ><h2 style="margin-top: 0.28rem">Dashboard</h2>
            <div class="admin_icon">
              <i class="fa fa-dashboard"></i></div
          ></a>
        </div>

        <div class="navi_item">
          <a href="./admin_reports.php" class="navi_a"
            ><h2>Reports</h2>
            <div class="admin_icon">
              <i class="fa fa-file-text"></i></div
          ></a>
        </div>

        <div class="navi_item">
          <a href="#" class="navi_a"
            ><h2>Records</h2>
            <div class="admin_icon">
              <i class="fa fa-server"></i></div
          ></a>
        </div>

        <div class="navi_item">
          <a href="./admin_newsPost.php" class="navi_a"
            ><h2>News Post</h2>
            <div class="admin_icon">
              <i class="fa fa-pencil-square-o"></i></div
          ></a>
        </div>

        <div class="navi_item">
          <a href="./admin_users.php" class="navi_a"
            ><h2>Users</h2>
            <div class="admin_icon">
              <i class="fa fa-users"></i></div
          ></a>
        </div>
      </section>
      <a href="../logout/logout_admin.php" class="logout_a"><div class="admin_signout">LOG OUT</div<div class="icon">
              <i class="fa fa-sign-out"></i>
            </div></a>
    </nav>
    <section class="main">
      <div class="dashboard_header">
        <div class="label_dash">
          <div class="admin_icon_dash">
              <i class="fa fa-calendar"></i>
          </div>
          <h2>DASHBOARD</h2>
        </div>
        <div class="home_details">
          <h3><span class="home_color">Home</span> / Records</h3>
        </div>
          
      </div>

      <div class="dashboard_content records_container">
                <table>
                  <tr>
                    <th>Action</th>
                    <th>Status</th>
                    <th>DateTime Reported</th>
                    <th>Type of Incidence</th>
                    <th>Date of Incidence</th>
                    <th>Time of Incidence</th>
                    <th>Region</th>
                    <th>Location</th>
                    <th>Tools</th>
                  </tr>
                  <?php

                    foreach ($query as $row){
                      // echo $row['id'];
                    
                    ?>
                      <tr>
                      <td><input type="checkbox" id="action_check"></td>
                      <td id="change_Name">Pending</td>
                      <td><?php echo $row['reporting_time'] ?></td>
                      <td><?php echo $row['crime_type'] ?></td>
                      <td><?php echo $row['date_of_incidence'] ?></td>
                      <td><?php echo $row['time_of_incidence'] ?></td>
                      <td><?php echo $row['region'] ?></td>
                      <td><?php echo $row['location'] ?></td>
                      <td>
                        <div class="butContainer">
                          <button class="editb"><i class="fa fa-edit"></i></button>
                          <button class="deleteb"><i class="fa fa-trash"></i></button>
                        </div>
                        
                      </td>
                    </tr>
                    
                    <?php
                    }
                  ?>
                  
                </table>
        
      </div>
    </section>
  </body>
  <script>

    //Action code(Not working)
    const checkbox = document.getElementById("action_check");
    // console.log(checkbox);
    const action = document.getElementById("action_name");
    // console.log(action);

    checkbox.addEventListener('click', () => {
      if(checkbox.checked === true){
        action.innerHTML = 'Confirmed';
      }else {
        action.innerHTML = 'Pending';
      }
    })
  </script>
</html>
