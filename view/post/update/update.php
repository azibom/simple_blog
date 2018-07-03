<?php
require_once('../../../include/db.php');
require_once('../../../include/post/post.php');
$post = new Post();
$post = $post->showPost($_GET["id"]);
?>
<form action="../../../include/post/update.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
    <?php include('../form.php') ?>
</form>
