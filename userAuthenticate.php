<?php 
if(isset($_SESSION['username']) || isset($_SESSION['success'])) {
    header('location:home.php');
  } else {
    header('location:login.php');
  }
?>