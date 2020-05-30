<?php  if (count($errorsolduser) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorsolduser as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
