<?php
//session_start();
$db = mysqli_connect('localhost', 'root', '', 'cosc473');
if (isset($_POST['register_course'])) {
$courseCode = mysqli_real_escape_string($db, $_POST['courseCode']);
$class = mysqli_real_escape_string($db, $_POST['class']);
//$_SESSION['username'] = $username;
	if (empty($courseCode)){
	print "Course Code Required.";
	include "viewTutor/courseRegistration.php";
	exit;
		}
	$query = "SELECT * FROM courseverification WHERE courseCode='$courseCode' AND course='$class'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results) == 1){
		//$msg = ("Please verify '$username'");
		//mail("cloudlightfellow@gmail.com", "Course Verification",$msg);
		print ("Course registered, please wait for verification.");
		//header ("location: indexTutor.php");
	}
		else {
			print "Course Code is incorrect.";
			include "viewTutor/courseRegistration.php";
		}
}

?>