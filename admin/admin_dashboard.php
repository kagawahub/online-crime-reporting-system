<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../scss/ADMIN_scss/admin_dashboard.css">
    <link rel="stylesheet" href="../awesome_font/font-awesome.min.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator Dashboard</title>
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
          <a href="./admin_records.php" class="navi_a"
            ><h2>Records</h2>
            <div class="admin_icon">
              <i class="fa fa-server"></i></div
          ></a>
        </div>

        <div class="navi_item">
          <a href="./admin_officers.php" class="navi_a"
            ><h2>Officers</h2>
            <div class="admin_icon">
              <i class="fa fa-user-secret"></i></div
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
          <h3><span class="home_color">Home</span> / Dashboard</h3>
        </div>
          
      </div>
      <div class="dashboard_content">
        <div class="grid-container"> 
          
          <!-- Grid1 -->
          <div class="grid-item">
            <div class="show_info_container">
              <div class="show_content">
              <div class="show_inside_number">24</div>
              <div class="show_inside_text">Today's Cases</div>
              </div>
              <div class="show_icon">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
              </div>
            </div>
            
            <a href="./statistics_pages/today's_cases.php" class="more_a"><div >
              More Info
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div></a>
          </div>

          <!-- Grid2 -->
          <div class="grid-item">
            <div class="show_info_container">
              <div class="show_content">
              <div class="show_inside_number">3</div>
              <div class="show_inside_text">Today's Confirmed Cases</div>
              </div>
              <div class="show_icon">
                <i class="fa fa-pie-chart" aria-hidden="true"></i>
              </div>
            </div>
            
            <a href="./statistics_pages/today's_confirmed_cases.php" class="more_a"><div >
              More Info
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div></a>
          </div>

          <!-- Grid3 -->
          <div class="grid-item">
            <div class="show_info_container">
              <div class="show_content">
              <div class="show_inside_number">105</div>
              <div class="show_inside_text">Total Users</div>
              </div>
              <div class="show_icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
            </div>
            
            <a href="./statistics_pages/total_users.php" class="more_a"><div >
              More Info
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div></a>
          </div>

          <!-- Grid4 -->
          <div class="grid-item">
            <div class="show_info_container">
              <div class="show_content">
              <div class="show_inside_number">82</div>
              <div class="show_inside_text">Total Complaints</div>
              </div>
              <div class="show_icon">
                <i class="fa fa-file-text" aria-hidden="true"></i>
              </div>
            </div>
            
            <a href="./statistics_pages/total_complaints.php" class="more_a"><div >
              More Info
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div></a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
