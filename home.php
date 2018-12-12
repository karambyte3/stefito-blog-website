<?php 
// Load page head
$title = "Members area" ;
include("templates/head.php");


// If user is not logged redirect him to login.php
if($_SESSION['username'] == null) {
    header('Location: login.php');
    exit();
  } 
  

?>



<h1>MEMBERS AREA</h1>
<h4>Welcome <b><?php echo($_SESSION['username']); ?></b></h4>