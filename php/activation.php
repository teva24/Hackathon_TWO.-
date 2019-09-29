<?php
include 'db.php';
$msg='';
 if(!empty($_GET['code']) && isset($_GET['code']))
 {
 $code=mysql_real_escape_string($_GET['code']);
 $c=mysqli_query($connection,"SELECT user_id FROM _user WHERE activation='$code'");
 if(mysqli_num_rows($c) > 0)
 {
 $count=mysqli_query($connection,"SELECT user_id FROM _user WHERE activation='$code' and verification='0'");

 if(mysqli_num_rows($count) == 1)
 {
mysqli_query($connection,"UPDATE _user SET verification='1' WHERE activation='$code'");
 $msg="Ваш аккаунт активирован"; 
 }
 else
 {
 $msg ="Ваш аккаунт уже активирован, нет необходимости активировать его снова.";
 }
 }
 else
 {
 $msg ="Неверный код активации.";
 }
 }
?>