<<<<<<< HEAD
<?php
include("../connection.php");

// error_reporting(0);
$msg=0;

// $dbconn = mysqli_connect('localhost','root','','ocrs_db');
// if (!$dbconn) {
//   echo "not connected";
// }else {
//   // echo "connected";
// }

session_start();
    if(isset($_POST['submit'])){
        //declare post variables of form
        $title=$_POST['title'];
        $post_body=$_POST['post_body'];
        $photo=$_POST['photo'];

        //session data for report
        $_SESSION['title'] = $title;
        $_SESSION['post_body'] = $post_body;
        $_SESSION['photo'] = $photo;

        //submit button varables
        $submit = $_POST['submit'];

        if($title == "" || $post_body == ""){
            $msg="All field is required";
        }

        if ($msg <= 0) {
          echo 'Report is submited successfully';
       // echo"insert";
        //call session data for report data
        $title=$_POST['title'];
        $post_body=$_POST['post_body'];
        $photo=$_POST['photo'];

        //Save report data
        $insert = "INSERT INTO `post`(`title`, `post_body`, `photo`,) VALUES ('$title','$post_body','$photo')";

            $results = $conn->exec($insert);
                if($results){
                    $msg = $_SESSION['msg'] = "Your news has been posted successfully";
                     header('location:./admin_dashboard.php');
                }else{
                   echo"Don't redirect";
                   // header("location:./register3.php");
                }

    }else{
        echo"Don't insert";
    }

    }
?>


=======
<?php 
include ("../conn.php");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['post_body'];
    $file_name = $_FILES['uploadfile']['name'];
    $temp_name = $_FILES['uploadfile']['tmp_name'];
    $folder = "uploads/".$file_name;

    $date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO post (title, post_body, photo, DateTime) VALUES ('$title', '$body', '$file_name', '$date')";
    $result = mysqli_query($conn, $sql);
    if($result){
        move_uploaded_file($temp_name, $folder);
        echo "<script>alert('Post created successfully!')</script>";
    }else{
        echo "<script>alert('Post creation failed!')</script>";
    }
}
?>

>>>>>>> 12231e5e63ea38f590bd3102c3669e35e8649947
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
          <a href="./admin_reports.php" class="navi_a"
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
          <h3><span class="home_color">Home</span> / News</h3>
        </div>
          
      </div>
      <div class="dashboard_content">
        <div class="adminpost_box">
          <h2>INFORMATION SHARING CENTER</h2>

          <h3>Make a new post <hr></h3>
          <section class="newPost_container">
<<<<<<< HEAD
            <form action="" method="POST">
              <div class="binder">
              <h3>Title</h3>
              <input type="text" name="title">
            </div>

              <div class="binder">
                <h3>Body</h3>
                <textarea name="post_body" id="postBody" cols="30" rows="10">
                </textarea>
            </div>
            <div class="attachment">
              <h4>
                <span>Attachment:</span> Upload file
              </h4>
              <input type="file" name="photo">
            </div>
            <button type="submit" name="submit">Post</button>
=======
            <form action="admin_newsPost.php" enctype="multipart/form-data" method="post">
                  <div class="binder">
                  <h3>Title</h3>
                  <input type="text" name="title">
                </div>

                  <div class="binder">
                    <h3>Body</h3>
                    <textarea name="post_body" id="postBody" cols="30" rows="10">
                    </textarea>
                </div>
                <div class="attachment">
                  <h4>
                    <span>Attachment:</span> Upload file
                  </h4>
                  <input type="file" name="uploadfile">
                </div>
                <button name="submit">Post</button>
>>>>>>> 12231e5e63ea38f590bd3102c3669e35e8649947
            </form>
          </section>
          <h3 class="postsLabel">POST HISTORY</h3>
          <section class="posts_container">
            
            <section class="post_item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit porro dolorum facilis at. Voluptatibus architecto, quia laborum tempore, facere sapiente veniam nesciunt nam obcaecati soluta odio ratione, atque voluptas corporis! Enim vitae tempora beatae porro recusandae iusto debitis ipsum vel veniam veritatis consequuntur rerum, accusamus aliquam provident quae aspernatur ullam perferendis? Distinctio officiis nulla sed, itaque dolorem quidem earum quo iste eos exercitationem modi quod temporibus quos quis culpa minima incidunt fugit delectus placeat et, iure similique aspernatur laborum. Labore, hic itaque omnis ipsum, repellendus consequuntur unde rem placeat, rerum ipsam voluptatibus tempore deleniti perferendis mollitia! Ut voluptatem quas nulla, veniam id veritatis tenetur mollitia hic ratione dignissimos autem, dolorum suscipit dicta illo eos? Quod earum adipisci soluta ut porro quis consequatur voluptates veniam itaque sed! Asperiores atque voluptatum sunt qui itaque, corrupti aperiam cum, suscipit adipisci illum magnam quo perspiciatis ut culpa! Magnam inventore unde quibusdam commodi, laudantium libero! Sint deleniti dolor corporis placeat soluta, aperiam odit, aliquid repudiandae iste iusto dolores accusamus ut ab eveniet quas quam numquam et id quos modi omnis delectus? Rem blanditiis obcaecati, enim eius, iure voluptatum neque adipisci earum sequi corporis assumenda sed vero quia similique eligendi illo aut fuga. Nesciunt omnis, eligendi enim libero est, ipsam architecto mollitia, expedita quibusdam earum saepe fugit eos molestiae aliquam esse odit officiis provident assumenda illum autem quisquam nobis! At veniam doloribus necessitatibus asperiores cupiditate vitae aliquid ipsa nam ipsam voluptas accusamus quo aspernatur explicabo hic, labore ex, velit qui. Nihil perspiciatis ipsa laborum quo delectus iusto, non fuga qui quaerat, porro quam quae et libero sapiente commodi earum? Ea temporibus non at et amet, culpa provident? Maiores asperiores atque cupiditate labore, deserunt eos aperiam maxime numquam delectus. Consequatur molestias debitis molestiae dolorem odit? Quo aperiam dolor sequi earum, voluptates animi praesentium ducimus excepturi eius tempore.</section>

            <section class="post_item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit porro dolorum facilis at. Voluptatibus architecto, quia laborum tempore, facere sapiente veniam nesciunt nam obcaecati soluta odio ratione, atque voluptas corporis! Enim vitae tempora beatae porro recusandae iusto debitis ipsum vel veniam veritatis consequuntur rerum, accusamus aliquam provident quae aspernatur ullam perferendis? Distinctio officiis nulla sed, itaque dolorem quidem earum quo iste eos exercitationem modi quod temporibus quos quis culpa minima incidunt fugit delectus placeat et, iure similique aspernatur laborum. Labore, hic itaque omnis ipsum, repellendus consequuntur unde rem placeat, rerum ipsam voluptatibus tempore deleniti perferendis mollitia! Ut voluptatem quas nulla, veniam id veritatis tenetur mollitia hic ratione dignissimos autem, dolorum suscipit dicta illo eos? Quod earum adipisci soluta ut porro quis consequatur voluptates veniam itaque sed! Asperiores atque voluptatum sunt qui itaque, corrupti aperiam cum, suscipit adipisci illum magnam quo perspiciatis ut culpa! Magnam inventore unde quibusdam commodi, laudantium libero! Sint deleniti dolor corporis placeat soluta, aperiam odit, aliquid repudiandae iste iusto dolores accusamus ut ab eveniet quas quam numquam et id quos modi omnis delectus? Rem blanditiis obcaecati, enim eius, iure voluptatum neque adipisci earum sequi corporis assumenda sed vero quia similique eligendi illo aut fuga. Nesciunt omnis, eligendi enim libero est, ipsam architecto mollitia, expedita quibusdam earum saepe fugit eos molestiae aliquam esse odit officiis provident assumenda illum autem quisquam nobis! At veniam doloribus necessitatibus asperiores cupiditate vitae aliquid ipsa nam ipsam voluptas accusamus quo aspernatur explicabo hic, labore ex, velit qui. Nihil perspiciatis ipsa laborum quo delectus iusto, non fuga qui quaerat, porro quam quae et libero sapiente commodi earum? Ea temporibus non at et amet, culpa provident? Maiores asperiores atque cupiditate labore, deserunt eos aperiam maxime numquam delectus. Consequatur molestias debitis molestiae dolorem odit? Quo aperiam dolor sequi earum, voluptates animi praesentium ducimus excepturi eius tempore.</section>
          </section>
            
          </section>
        </div>
        
      </div>
    </section>
  </body>
</html>
