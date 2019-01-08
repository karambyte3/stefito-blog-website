<?php 
// If user is logged redirect him to home.php
if(isset($_SESSION['username']) || isset($_SESSION['success'])) {
  header('Location: home.php');
  exit();
}

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (preg_match('/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/', $username) == false) { array_push($errors, "Invalid username"); }

  if (empty($email)) { array_push($errors, "Email is required"); }
  if (preg_match('/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+/', $email) == false) { array_push($errors, "Invalid email"); }

  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (strlen($password_1) < 5) { array_push($errors, "Invalid password"); }
  if ($password_1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    session_start();
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}

// ... 

  ?>
   