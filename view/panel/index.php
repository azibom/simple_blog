<?php
if(!isset($_COOKIE['logged'])) {
  header( 'Location: ../login/index.php' ) ;
} 
?> 
<center>
<h1>admin panel</h1>
<h2><a href="../../../include/login/signout.php">signout</a><h2><br>
<a href="../post/create.php">create post</a><br>
<a href="../post/update/update_view.php">update post</a><br>
<a href="../post/remove.php">remove post</a><hr>
<a href="../../index.php">blog post</a>
</center>
