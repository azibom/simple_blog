<?php
if(!isset($_COOKIE['logged'])) {
  header( 'Location: /view/login/index.php' ) ;
} 
?> 
<?php
require_once('../../../include/db.php');
require_once('../../../include/post/post.php');
?>
<h1>This is update page</h1>
<?php
$post = new Post();
$post = $post->getPosts();
foreach($post as $mypost){
?>
<a href="update.php?id=<?php  echo $mypost['id']; ?>">
<?php
echo $mypost['id'];
echo "<br>";
echo $mypost['title'];
echo "<br><hr></a>";
}
?>