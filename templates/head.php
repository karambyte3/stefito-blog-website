<?php
// Begin the PHP session
if(!isset($_SESSION)){ 
  session_start(); 
}

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'firstproject');

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
      <?php 
      if(!isset($_SESSION['username'])){ 
        echo '<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>';
      } else {
        echo '<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>';
      }
      
      ?>
        
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
  <li class="profile-btn">
    <?php 
    if(isset($_SESSION['username'])){ 
      // echo '<a class="nav-link" href="profile.php" name="profile" style="float: right; color: rgba(255, 255, 255, 0.8); a:hover{color: rgba(255, 255, 255, 1)}">Profile</a>';
      echo '<div class="dropdown">
  <a class="btn dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      '.$_SESSION['username'].' 
  </a>

  <div class="dropdown-menu a" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="profile.php">My Profile</a>
    <a class="dropdown-item" href="createArticle.php">Write article</a>';
    if($_SESSION["username"] == "admin"){ echo '<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Approve Articles</a>';}
    echo '<div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php" name="logout" style="float: right;">Logout</a>
  </div>
</div>';    
    } ?>
  </li>

</nav>

</div>