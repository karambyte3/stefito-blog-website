<?php 
// If user is logged redirect him to home.php
if(isset($_SESSION['username']) || isset($_SESSION['success'])) {
    header('Location: home.php');
    exit();
  }

// LOGIN USER
$errors = array();

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    // if (preg_match('/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/', $username) == false) { array_push($errors, "Invalid username"); }

  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            session_start();
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: home.php');
          
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
?>