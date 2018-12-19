<?php 
// Load page head
$title = "Members area" ;
include("templates/head.php");
include("functions.php");

// If user is not logged redirect him to login.php
auth();

// if($_SESSION['username'] == null) {
//     header('Location: login.php');
//     exit();
//   } 
?>



<h1>MEMBERS AREA</h1>
<h4>Welcome <b><?php echo($_SESSION['username']); ?></b></h4>

<?php 
include("templates/footer.php");
?>
