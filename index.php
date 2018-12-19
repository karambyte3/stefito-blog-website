<?php 
$title = "index";
include("templates/head.php");
?>
    
<h1>Welcome!</h1>
<?php if (!isset($_SESSION["username"])) {echo '<h2>Click <a href="login.php">here</a> to Sign In</h2>';} ?>


<div class="content">
</div>

<?php include("templates/footer.php");?>