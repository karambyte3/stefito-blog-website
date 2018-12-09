<?php 
include("userAuthenticate.php");
$title = "Login"; 
include("templates/head.php");
include("validateLogin.php");
?>
    


    <div class="container">
      <form class="form-signin" method="post" action="login.php">
        <h2>Please Log in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me 
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user">Sign in</button>
      </form>
    </div>


    <?php 
    include("errors.php");
    include("templates/footer.php");
    ?>