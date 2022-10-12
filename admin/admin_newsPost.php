<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../scss/style.css">
    <link rel="stylesheet" href="../awesome_font/font-awesome.min.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News</title>
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
          <a href="#" class="navi_a"
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
          <h3><span class="home_color">Home</span> / News</h3>
        </div>
          
      </div>
      <div class="dashboard_content">
        <div class="adminpost_box">
          <h2>INFORMATION SHARING CENTER</h2>

          <h3>Make a new post <hr></h3>
          <section class="newPost_container">
            <form action="">
              <div class="binder">
              <h3>Title</h3>
              <input type="text">
            </div>

              <div class="binder">
                <h3>Body</h3>
                <textarea name="post_body" id="postBody" cols="30" rows="10">
                </textarea>
            </div>
            <div class="attachment">
              <h4>
                <span>Attachment:</span> Add a file
              </h4>
              <input type="file">
            </div>
            <button name="submit">Post</button>
            </form>
          </section>

          <section class="posts_container">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore unde animi vitae iure reiciendis tenetur, nostrum quisquam totam numquam ad voluptas adipisci. Suscipit illum officia aliquid excepturi consequuntur, fugit vitae.
          </section>
        </div>
        
      </div>
    </section>
  </body>
</html>
