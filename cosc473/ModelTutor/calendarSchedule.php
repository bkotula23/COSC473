<?php
session_start();
 
$db = mysqli_connect('localhost', 'root', '', 'cosc473');

if (isset($_POST['reg_user'])) {

  $description = mysqli_real_escape_string($db, $_POST['description']);}
  $day = mysqli_real_escape_string($db, $_POST['day']);
  $month = mysqli_real_escape_string($db, $_POST['month']);
  $year = mysqli_real_escape_string($db, $_POST['year']);
  $zoomUrl = mysqli_real_escape_string($db, $_POST['url']);

 /* $eventObj->description = $description;
  $eventObj->day = $day;
  $eventObj->month = $month;
  $eventObj->year = $year;
  
  $myJSON= json_encode($eventObj);
  */
  $username = $_SESSION["username"];
  
  $query = "INSERT INTO events (event, startday, startmonth, startyear, fk_tutorid, url) 
  			  VALUES('$description', '$day', '$month', '$year', '$username', '$zoomUrl')";
  $success = mysqli_query($db, $query);
  echo "Success!";
  include "ModelTutor/calendar.php";
?> 