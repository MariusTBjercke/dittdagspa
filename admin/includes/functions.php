<?php
session_start();

$con = mysqli_connect('home.bjerckemedia.no', 'root', '20C71900a920C', 'dittdagspa');
if (!$con) {
  echo mysqli_connect_error();
  exit;
}

// Check if user is logged in
function isLoggedIn() {
  if ($_SESSION['d_logged_n'] == true) {
  } else {
    $current_url = $_SERVER['REQUEST_URI'];
    $a = 'pages';
	if (strpos($current_url, $a) !== false) {
	  echo '<script>window.location="login.php";</script>';
	} else {
	  echo '<script>window.location="pages/login.php";</script>';
	}
  }
}

?>