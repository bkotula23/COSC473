<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
print "You have successfully logged out!";
include "view/login.php";
?>