<?php 
function auth(){
    if($_SESSION['username'] == null) {
        header('Location: login.php');
        exit();
      } 
}
?>