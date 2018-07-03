<?php
require_once('../db.php');
require_once('post.php');
$post = new Post();
$mypost = $post->removePost($_GET["id"]);
echo "<h2>sucssusfuly removed</h2>";
?>

