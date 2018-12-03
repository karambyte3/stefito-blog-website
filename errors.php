<?php  if (count($errors) > 0) : ?>
  	<?php foreach ($errors as $error) : ?>
      <p class="alert alert-danger" role="alert" style="margin: 10px auto;"><?php echo $error ?></p>
  	<?php endforeach ?>
<?php  endif ?>