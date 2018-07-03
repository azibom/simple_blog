<?php
require_once('../db.php');
require_once('login.php');
$user = new User();
$myuser = $user->signout();
echo "<h1>signout</h1>";
?>