<?php
$servername = "localhost";
$username = "root";
$password = "";

  $conn = new PDO("mysql:host=$servername;dbname=ocrs_db", $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($conn) {
  // echo "datababe is Connected successfully";

  }else{
  echo "Connection failed";
  }

?>