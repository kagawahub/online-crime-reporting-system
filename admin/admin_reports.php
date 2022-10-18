<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../scss/ADMIN_scss/admin_dashboard.css">
    <link rel="stylesheet" href="../scss/ADMIN_scss/_admin_records.scss" />
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
      <a href="../index.php" class="logout_a"><div class="admin_signout">LOG OUT</div<div class="icon">
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
                    <th>Email</th>
                    <th>Tools</th>
                  </tr>
                  <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>g</td>
                    <td>
                      <button class="editb"><i class="fa fa-edit"></i></button>
                      <button class="deleteb"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>                  
                  <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>g</td>
                    <td>
                      <button name="submit" class="editb"><i class="fa fa-edit"></i></button>
                      <button name="submit" class="deleteb"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>                  
                  <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>g</td>
                    <td>
                      <button name="submit" class="editb"><i class="fa fa-edit"></i></button>
                      <button name="submit" class="deleteb"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>                  
                  <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>g</td>
                    <td>
                      <button class="editb"><i class="fa fa-edit"></i></button>
                      <button class="deleteb"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>                  
                  <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>g</td>
                    <td>
                      <button class="editb"><i class="fa fa-edit"></i></button>
                      <button class="deleteb"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>                  
                  <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>g</td>
                    <td>
                      <button class="editb"><i class="fa fa-edit"></i></button>
                      <button class="deleteb"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>                  
                </table>
        
      </div>
    </section>
  </body>
</html>
