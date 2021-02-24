<?php
// LOGIN USER
session_start();
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
	
	$record	= mysqli_fetch_assoc($results);
  	if (mysqli_num_rows($results) == 1) {
					
  	  $_SESSION["loggedin"] = true;
      $_SESSION["username"] = $username;
	  //$_SESSION["email"] = $email;
	  
	  
	  if($record['userType'] == 1){// redirect to student Dashboard page
		//header("location: view/studentDashboard.php");
		header("location:indexStudent.php?flag=home");
		exit;	
	}else if($record['userType'] == 2){// redirect to tutor Dashboard page
		echo "it made it here";
		header("location:indexTutor.php?flag=home");
		exit;
	}else if($record['userType'] == 3){// redirect to admin Dashboard page
		header("location:indexAdmin.php?flag=home");
		exit;
	}
	
	  //echo ("Welcome $username!");
	  
	  
	    /*
		$checkCoursecode = "SELECT userType FROM users WHERE username='$username'";
		$usertypeQuery = mysqli_query($db, $checkCoursecode);
		$usertype = mysqli_fetch_assoc($usertypeQuery);
	  if ($usertype[0] === 2){
			include "view/tutorPage.php";
	  }
	  if ($usertype[0] === 1){
		    include "view/studentPage.php";
	  }
	  if ($usertype[0] === 3){
		    include "view/adminPage.php";
	  }
	  */
  	}else {
  		echo ("Wrong username/password combination");
		include "View/login.php";
		//header("location: View/login.php");//?err=1 for error reporting in view/login.php
		//include "View/login.php";
  	}
  }
}
?> 
