<?php
require_once('../../include/db.php');
require_once('../../include/post/post.php');
?>
<h1>This is remove page</h1>
<?php
$post = new Post();
$post = $post->getPosts();
foreach($post as $mypost){
?>
<a href="../../include/post/remove.php?id=<?php  echo $mypost['id']; ?>">
<?php
echo $mypost['id'];
echo "<br>";
echo $mypost['title'];
echo "<br><hr></a>";
}
?>