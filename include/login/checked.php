<?php
require_once('../db.php');
require_once('login.php');
$user = new User();
$myuser = $user->cheched($_POST["user"],$_POST["pass"]);
if (count($myuser) == 1){
 $myuser = $user->signin($_POST["user"]);
 header( 'Location: ../../view/panel/index.php' ) ;
}
else
 header( 'Location: ../../view/login/index.php' ) ;
?>

