<h1>This is my singlePage</h1>
<?php
if(!isset($_GET["id"])){
    echo 'not found';
    die();
}
require_once('../../include/db.php');
require_once('../../include/post/post.php');
$post = new Post();
$mypost = $post->showPost($_GET["id"]);
echo $mypost['title'];
echo "<br>";
echo $mypost['body'];
?>
