<?php
session_start();
if (!$_SESSION['active']) {
  header("location:loginPage.php");
  die();
}
?>
