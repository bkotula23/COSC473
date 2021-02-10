<?php
// LOGIN USER
$db = mysqli_connect('localhost', 'root', '', 'cosc473');
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username) || empty($password)) {
  	echo("Username and Password is required");
	include "View/login.php";
  }
  else {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
	  echo ("Welcome $username!");
  	}else {
  		echo ("Wrong username/password combination");
		include "View/login.php";
  	}
  }
}
?> 
