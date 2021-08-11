<?php
session_start();
 
$db = mysqli_connect('localhost', 'root', '', 'cosc473');

  $username = $_SESSION["username"];
  
  $query = "SELECT * FROM events WHERE fk_tutorid = '$username'";
  $result = mysqli_query($db, $query);
  $events = array();
  $startday = array();
  $startmonth = array();
  $startyear = array();
  $url = array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  array_push($events, $row["event"]);
      array_push($startday, $row["startday"]);
	  array_push($startmonth, $row["startmonth"]);
	  array_push($startyear, $row["startyear"]);
	  array_push($url, $row["url"]);
    echo "event: " . $row["event"]. " - Start day: " . $row["startday"]. "start month = " . $row["startmonth"]. 
	"start year = ". $row["startyear"]. "Zoom URL = ". $row['url']. "<br>";
  }
} else {
  echo "0 results";
}
for($x = 0; $x < count($events); $x++){
	
	echo $events[$x];
	echo "<br>";
}
  $jsonEvents= json_encode($events);
  $jsonStartday= json_encode($startday);
  $jsonStartmonth= json_encode($startmonth);
  $jsonStartyear= json_encode($startyear);
  $jsonUrl= json_encode($url);
 print_r($jsonEvents);
 $decodeEvents = json_decode($jsonEvents);
  print_r ($decodeEvents);
  ?>

<?php
mysqli_close($db);
?>