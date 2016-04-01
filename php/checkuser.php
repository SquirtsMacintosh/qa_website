<?php

if (!session_id()) {
  session_start();
}

define('DB_HOST','localhost');
define('DB_NAME','userinfo');
define('DB_USER','root');
define('DB_PASSWORD','root');
$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed Connecting to database!");

//$user = $_POST['myUsername'];

//grabs the hash from the db to verify against the password
$sql = "SELECT password FROM info WHERE username='$_POST[myUsername]'";
$result = mysqli_query($link, $sql);
$col = mysqli_fetch_object($result);
$hash = $col->password;

if (password_verify($_POST['myPassword'], $hash)) {
  //success
  $_SESSION["active"] = 'true';
  header("location:../mainPage.php");
  die();
} else {
  // will need to comment out and let js worry about this
  echo "Your username or password were incorrect!";
}

//mysqli_close($link) or die("Failed to close the database connection!");
?>
