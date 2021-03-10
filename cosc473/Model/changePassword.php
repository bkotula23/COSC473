<?php
session_start();
// Change password
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cosc473');
if (isset($_POST['changePassword'])) {
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
  if (empty($password_1)) { array_push($errors,"Password is required, "); }
  if ($password_1 != $password_2) { array_push($errors,"The two passwords do not match, ");}
  
  
 //changing the password
 if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt

  	$query = "INSERT INTO users (password) 
  			  VALUES('$password')";
  	$success = mysqli_query($db, $query);
	echo ("Password change Successful!");
	include ("view/changePass.php");
  }
?>
