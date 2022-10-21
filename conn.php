<?php

$conn = mysqli_connect("localhost", "root", "", "ocrs_db");

if (!$conn) {
    echo "Connection failed".mysqli_connect_error();
}

?>