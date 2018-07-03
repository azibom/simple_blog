<?php
if(!isset($_COOKIE['logged'])) {
  header( 'Location: /view/login/index.php' ) ;
} 
?> 
<form action="../../include/post/create.php" method="post">
    <?php include('form.php') ?>
</form>
