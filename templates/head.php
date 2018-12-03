<?php
// Begin the PHP session so we have a place to store the username
session_start();
include("userAuthenticate.php");

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'firstproject');

if(http_response_code('404') === true) {
include('404.php'); // provide your own HTML for the error page
die();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/main.css">


</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #226F54; color: white; list-style-type: none;">
  <a class="navbar-brand" href="index.php">MyauthWebsite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <?php 
      if(!isset($_SESSION['username'])){ 
        echo '<a class="nav-link" href="login.php">Login</a>';
      }?>
        
      </li>
      <li class="nav-item">
      <?php 
      if(!isset($_SESSION['username'])){ 
        echo '<a class="nav-link" href="register.php">Register</a>';
      }?>
        
      </li>
    </ul>
  </div>
  <li>
    <?php 
    if(isset($_SESSION['username'])){ 
      echo '<a class="nav-link" href="logout.php" name="logout" style="float: right; color: rgba(255, 255, 255, 0.5);">Logout</a>';
    }?>
  </li>
</nav>

</div>