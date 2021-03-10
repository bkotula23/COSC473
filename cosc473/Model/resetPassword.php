<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'cosc473');
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM users WHERE email='$email'";
  $results = mysqli_query($db, $query);

 if (empty($email)) { array_push($errors,"Email is required, "); }
 else if(mysqli_num_rows($results) <= 0) {array_push($errors, "Sorry, no user exists on our system with that email");}
  // generate a unique random token
  
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password reset database
    $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);

    // Send
    $to = $email;
    $subject = "Reset your password on cosc473@webhost.com";
    $msg = "Hi there, click on this <a href=\"changePass.php?token=" . $token . "\">link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    $headers = "From: admin@webhost.com";
    mail($to, $subject, $msg);
  }
}?>