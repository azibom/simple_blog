<?php
require_once('../db.php');
require_once('post.php');
$post = new Post();
$mypost = $post->insertPost($_POST["title"],$_POST["body"],$_POST["tags"],$_POST["category"]);
echo "<h2>sucssusfuly added</h2>";
?>

