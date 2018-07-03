<?php
require_once('include/db.php');
require_once('include/post/post.php');
?>
<h1>This is my blog</h1>
<?php
$post = new Post();
$posts = $post->getPosts();
foreach($posts as $mypost){
?>
<a href="view/post/index.php?id=<?php  echo $mypost['id']; ?>">
<?php
echo $mypost['id'];
echo "<br>";
echo $mypost['title'];
echo "<br><hr></a>";
}
?>