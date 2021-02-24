<?php
session_start();
//include "errors.php";
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cosc473');
// REGISTER student
if (isset($_POST['reg_user'])) {
  // receive input 
  $username = mysqli_real_escape_string($db, $_POST['username']);}
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  //$courseCode = mysqli_real_escape_string($db, $_POST['courseCode']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required, "); }
  if (empty($email)) { array_push($errors,"Email is required, "); }
  if (empty($password_1)) { array_push($errors,"Password is required, "); }
  if ($password_1 != $password_2) { array_push($errors,"The two passwords do not match, ");}
  // check database
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
	if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors,"Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  
  // register user 
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt

  	$query = "INSERT INTO users (username, email, password,userType) 
  			  VALUES('$username', '$email', '$password', 2)";
  	$success = mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
	echo ("Welcome $username!");
	include ("view/login.php");
  }
	else {
		foreach($errors as $errors){
    echo $errors . "\n";
}
	include "View/tutorRegister.php";
	}	
?> 