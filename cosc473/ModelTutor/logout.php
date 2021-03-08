<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
print "You have successfully logged out!";
header("location:index.php?flag=home");
?>