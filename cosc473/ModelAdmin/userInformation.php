<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cosc473";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['search'])) {
  $user = mysqli_real_escape_string($conn, $_POST['user']);

  if (empty($user)) {
  	echo("Value Required In Search Box.");
	include "ViewAdmin/searchUsers.php"; 
  }
  elseif (isset($user)){
	  $query = "SELECT * FROM users WHERE username LIKE '$user%'";   
	  $results = $conn->query($query);
	  if($results->num_rows > 0){
	  While($row = mysqli_fetch_assoc($results)){
		  echo "ID: ";
		  echo $row['id'];
		  echo "<br>Username: ";
		  echo $row['username'];
		  echo "<br>Email: ";
		  echo $row['email'];
		  echo "<br>User Type: ";
		  echo $row['userType'];
		  echo "<br><br>";
		}
	  }
	  include "ViewAdmin/searchUsers.php"; 
  }
  else{
	  echo "No Results Found.";
	  include "ViewAdmin/searchUsers.php";
  }
}
?>