<?php
include("../conn.php");
// $query data from database
    $sql= ("SELECT * FROM `reports` ORDER BY `reports`.`reporting_time` DESC ");
    $query= mysqli_query($conn, $sql);   
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../scss/ADMIN_scss/admin_dashboard.css">
    <link rel="stylesheet" href="../scss/_admin_tableStyle.scss">
    <link rel="stylesheet" href="../awesome_font/font-awesome.min.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reports</title>
  </head>
  <body class="admin_body">
    <nav class="sidebar">
       <div class="admin_dashlabel_text">ONLINE CRIME REPORTING SYSTEM
        <div>
      <hr class="admin_hr">
      <div class="admin_profile_container">
        <div class="admin_pic">
          <div class="rounded_online"></div>
          <img class="admin_img1" src="../img/boss-about2.png" alt="">
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
          <a href="#" class="navi_a"
            ><h2>Reports</h2>
            <div class="admin_icon">
              <i class="fa fa-file-text"></i></div
          ></a>
        </div>

        <div class="navi_item">
          <a href="./admin_records.php" class="navi_a"
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
          <h3><span class="home_color">Home</span> / Reports</h3>
        </div>
          
      </div>
      <div class="dashboard_content records_container">
                <table>
                  <tr>
                    <th>Reporting Time</th>
                    <th>Crime Type</th>
                    <th>Crime Description</th>
                    <th>Date of Incidence</th>
                    <th>Time of Incidence</th>
                    <th>Region</th>
                    <th>Tools</th>
                  </tr>
                  <?php

                    foreach ($query as $row){
                      $id = $row['id'];
                    ?>
                      <tr>
                      <td><?php echo $row['reporting_time'] ?></td>
                      <td><?php echo $row['crime_type'] ?></td>
                      <td><?php echo $row['description'] ?></td>
                      <td><?php echo $row['date_of_incidence'] ?></td>
                      <td><?php echo $row['date_of_incidence'] ?></td>
                      <td><?php echo $row['region'] ?></td>
                      <td>
                        <div class="butContainer">
                          <form action="admin_reports.php?=<?php echo $row['id'] ?>" method="post">
                            <input type="submit" name="edit" class="editb"><i class="fa fa-edit"></i>
                          </form>
                          <form action="admin_reports.php?=<?php echo $id ?>" method="post">
                            <input type="submit" name="delete" class="deleteb"><i class="fa fa-trash"></i>
                          </form>

                          <!-- <a href="admin_reports.php?=<?php #echo $row['id'] ?>" class="deleteb"><i class="fa fa-trash"></i></a> -->
                        </div>
                      </td>
                    </tr>
                    
                    <?php
                    }
                    // if(isset($_POST['edit'])){
                      // $id = $_POST['edit'];
                      // $id = $row['id'];
                      // echo "<script>alert('$id')</script>";

                      // $query = $conn->query("SELECT * FROM reports WHERE id = '$id'") or die($conn->error);
                      // $row = $query->fetch_array();
                      // foreach($query as $row){
                      //   $id = $row['id'];
                      //   $reporting_time = $row['reporting_time'];
                      //   $crime_type = $row['crime_type'];
                      //   $description = $row['description'];
                      //   $date_of_incidence = $row['date_of_incidence'];
                      //   $time_of_incidence = $row['time_of_incidence'];
                      //   $region = $row['region'];

                      //   echo "<script>alert('$id')</script>";
                      // }
                    // }
                    // if(isset($_POST['delete'])){
                    //   // $id = $_GET['id'];
                    //   $sql = "DELETE FROM reports WHERE id = $id";
                    //   $query = mysqli_query($conn, $sql);
                    //   if($query){
                    //     echo "Deleted";
                    //   }else{
                    //     echo "Not Deleted";
                    //   }
                    // }
                  ?>                  
                </table>
        
      </div>
    </section>
  </body>
</html>
