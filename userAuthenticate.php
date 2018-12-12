<?php 
if(isset($_SESSION['username']) || isset($_SESSION['success'])) {
    header('Location: home.php');
    exit();
  } 

  


?>