<?php 
$title = "Write article";
include("templates/head.php");
include("functions.php");

// If user is not logged redirect him to login.php
auth();
?>

<div class="container" style="text-align: center; margin:15px auto;">
        <h1>Write article</h1>
    </div>

<div class="container row justify-content-md-center" style="margin:20px 0;">
<div class="col-1"></div>

<form class="col-5" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Article title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="textArea" rows="10">
        <?php 
            echo '<h1>'. $_POST["textArea"] .'</h1>'
        ?>
    </textarea>
  </div>
</form>

<?php 
    // $articleTitle = $_POST["title"];
    // $textArea = $_POST["textArea"];
?>

<div class="col-6">
    <div class="container" style="text-align: center; border-bottom:5px solid rgb(40, 167, 69); margin:15px;">
        <h1>Choose component</h1>
    </div>

    <div class="container" style="border-bottom:1px solid rgb(40, 167, 69); margin:15px;">
        <button type="button" class="btn btn-outline-success">Main title</button>
        <h1>Lorem ipsum dolor</h1>
    </div>

    <div class="container" style="border-bottom:1px solid rgb(40, 167, 69); margin:15px;">
        <button type="button" class="btn btn-outline-success">Sub title</button>
        <h3>Lorem ipsum dolor</h3>
    </div>

    <div class="container" style="border-bottom:1px solid rgb(40, 167, 69); margin:15px;">
        <button type="button" class="btn btn-outline-success">Paragraph</button>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate facilis, delectus suscipit error assumenda ipsum quam culpa nam facere accusantium dolores, possimus aut blanditiis consequuntur ea non perferendis. Excepturi, provident!</p>
    </div>

    <div class="container" style="border-bottom:1px solid rgb(40, 167, 69); margin:15px;">
        <form class="md-form" action="#">
            <div class="file-field">
                <label class="btn btn-outline-success">
                    Upload Image&hellip; <input type="file" style="display: none;">
                </label>
            </div>
        </form>
        <img src="media/example.jpg" class="img-fluid" alt="Responsive image" style="margin: 15px auto;">
    </div>
    
</div>







<?php include("templates/footer.php");?>