<?php
	session_start();
	session_destroy();
	header("location:../initial_pages/login.php");

  ?>