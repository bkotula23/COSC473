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
  $course = mysqli_real_escape_string($conn, $_POST['course']);

  if (empty($course)) {
  	echo("Value Required In Search Box.");
	include "ViewStudent/viewcourses.php"; 
	//header("location:indexStudent.php?flag=viewCourses");
  }
  elseif (isset($course)){
	  $query = "SELECT * FROM tutors WHERE course LIKE '%$course%'"; //OR WHERE course='$course';  
	  $results = $conn->query($query);
	  if($results->num_rows > 0){
	  While($row = mysqli_fetch_assoc($results)){
		  echo "Course(s): ";
		  echo $row['course'];
		  echo "<br>First Name: ";
		  echo $row['first'];
		  echo "<br>Last Name: ";
		  echo $row['last'];
		  echo "<br><br>";
		}
	  }
	  include "ViewStudent/viewcourses.php";
	  //header("location:indexStudent.php?flag=viewCourses"); 
  }
  else{
	  echo "No Results Found.";
	  include "ViewStudent/viewcourses.php";
  }
}
?>