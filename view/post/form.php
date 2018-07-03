
title: <input type="text" name="title" value="<?php if(isset($post)) echo $post['title']?>"><br>
body: <input type="text" name="body" value="<?php if(isset($post)) echo $post['body']?>"><br>
tags: <input type="text" name="tags" value="<?php if(isset($post)) echo $post['tags']?>"><br>
category: <input type="text" name="category" value="<?php if(isset($post)) echo $post['category']?>"><br>
<input type="submit">
