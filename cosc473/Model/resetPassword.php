<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'cosc473');
if (isset($_POST['reset-password'])) {
	include "View/enter_email.php";
    // Send
    $to = "spaghetticoderstest@gmail.com;
    $subject = "Reset your password on cosc473@webhost.com";
    $msg = "Hi there, click on this <a href=\"changePass.php?<\a>
    $msg = wordwrap($msg,70);
    $headers = "From: admin@webhost.com";
	mail($to, $subject, $msg);
  }
}?>