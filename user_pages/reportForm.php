<?php
include("../connection.php");

// error_reporting(0);
$msg=0;

session_start();
    if(isset($_POST['submit'])){
        //declare post variables of form
        $date_of_incidence=$_POST['date_of_incidence'];
        $time_of_incidence=$_POST['time_of_incidence'];
        $region=$_POST['region'];
        $location=$_POST['location'];
        $crime_type = $_POST['crime_type'];
        $description_box=$_POST['description_box'];
        $attachment=$_POST['attachment'];
        $witness=$_POST['witness'];
        $witness_info_box=$_POST['witness_info_box'];

        //session data for report
        $_SESSION['date_of_incidence'] = $date_of_incidence;
        $_SESSION['time_of_incidence'] = $time_of_incidence;
        $_SESSION['region'] = $region;
        $_SESSION['location'] = $location;
        $_SESSION['crime_type'] = $crime_type;
        $_SESSION['description_box'] = $description_box;
        $_SESSION['attachment'] = $attachment;
        $_SESSION['witness'] = $witness;
        $_SESSION['witness_info_box'] = $witness_info_box;

        //submit button varables
        $submit = $_POST['submit'];

        if($date_of_incidence == "" || $time_of_incidence == "" || $region == "" || $location == "" || $crime_type == ""){
            $msg="All field is required";
        }

        if ($msg <= 0) {
          echo 'Report is submited successfully';
       // echo"insert";
        //call session data for report data
        $date_of_incidence=$_POST['date_of_incidence'];
        $time_of_incidence=$_POST['time_of_incidence'];
        $region=$_POST['region'];
        $location=$_POST['location'];
        $crime_type=$_POST['crime_type'];
        $description_box=$_POST['description_box'];
        $attachment=$_POST['attachment'];
        $witness=$_POST['witness'];
        $witness_info_box=$_POST['witness_info_box'];

        echo "<script>alert('Report submitted successfully!')</script>";

        //Save report data
        $insert = "INSERT INTO `reports`(`date_of_incidence`, `time_of_incidence`, `region`, `location`, `crime_type`, `description`, `attachment`, `witness`, `witness_details`) VALUES ('$date_of_incidence','$time_of_incidence','$region','$location','$crime_type','$description_box','$attachment','$witness','$witness_info_box')";

            $results = $conn->exec($insert);
                if($results){
                    $msg = $_SESSION['msg'] = "Report submitted successfully";
                     header('location:./reportForm.php');
                }else{
                   // echo"Don't redirect";
                   // header("location:./register3.php");
                }

    }else{
        // echo"Dont insert";
    }

    }
?>



<html lang="en">
  <head>
    <link rel="stylesheet" href="../scss/style.css" />
    <link rel="stylesheet" href="../awesome_font/font-awesome.min.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report Form</title>
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

        <a href="#"
          ><div class="side_item active_page">
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
      <div class="page_title">REPORT FORM</div>
      <div class="main_content">
         <div class="report_form">
        <form action="#report" method="POST">
          <div class="title">Incidence Report</div>
            <section class="section_part_grid">

              <div class="grid_item">
                <div class="label_position">
                  <label for="date">Date Of Incidence</label>
                  <input type="date" name="date_of_incidence">
                </div>
              </div>

              <div class="grid_item">
                <div class="label_position">
                  <label for="time">Time Of Incidence</label>
                  <input type="time" name="time_of_incidence">
                </div>
              </div>  
              
              <div class="grid_item"> 
                <div class="label_position">
                  <label for="region">region</label>
                  <input type="text" name="region">
                </div> 
              </div>
              <div class="grid_item"> 
                <div class="label_position">
                  <label for="location">Location</label>
                  <input type="text" name="location">
                </div> 
              </div>
            </section>

            <section class="crime_info_container">
              <div class="dropdown_list">
                <div class="label_position">
                  <label for="c.t">Crime Type</label>
                    <select name="crime_type" class="combo_box" onChange="display(this.value)">
                      <option value="select" name="crime_type">Select</option>
                      <option value="robbery" name="crime_type">Robbery</option>
                      <option value="theft" name="crime_type">Theft</option>
                      <option value="rape" name="crime_type">Rape</option>
                      <option value="arson" name="crime_type">Arson</option>
                      <option value="fraud" name="crime_type">Fraud</option>
                      <option value="burglary" name="crime_type">Burglary</option>
                      <option value="assault" name="crime_type">Assault</option>
                      <option value="assault" name="crime_type">Other</option>
                    </select>
                </div>  
              </div> 

              <div class="desc_box">
                <div class="label_position">
                  <label for="desc">Description</label>
                  <textarea name="description_box" id="description_box" cols="55" rows="10" placeholder="Description of incident (What happened, how it happened, factors leading to the event, etc.) Be specific as possible. You can also add any available picture, audio or video in the attachment box below"></textarea>
                  
                  <div class="attachment_box">
              <label for="Attachment"><span> Attachment:</span> Add a file</label>
              <input type="file" name="attachment">
            </div>
              </div>
            </section>
              <div class="title wit">Witnesses</div>
              <div class="witnesses">
                <p>Were there any witnesses to the incident?</p>
                <div class="checkb">
                <label for="yes">Yes</label><input type="radio" value="yes" name="witness">
                <label for="no" >No</label><input type="radio" value="no" name="witness">
                </div>

                <p>If yes, kindly provide the names, addresses and phone numbers below</p>
                <textarea name="witness_info_box" class="witness_info_box" id="witness_info_box" cols="55" rows="9"></textarea>
              </div>
            <button class="rbutton" value="submit" name="submit">SUBMIT REPORT</button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
