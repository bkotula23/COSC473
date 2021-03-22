
<style>
<?php include 'calendar.css'; ?>
</style>

<?php
function draw_calendar($month,$year){

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$servername = "localhost";  
			$dbname = "cosc473"; 
			$username = "root"; 
			$password = ""; 

// Create connection 
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
	if ($conn->connect_error) 
	{     
	die("Connection failed: " . $conn->connect_error); 
}
			$query = "SELECT * FROM events WHERE startmonth=$month AND startyear=$year AND startday = $list_day";
			$results = mysqli_query($conn,$query) or die (mysqli_error($conn));
			if (mysqli_num_rows($results) > '0') {
              while($row = mysqli_fetch_array($results)){ 
              extract($row);
    
    $calendar.= '<a href="viewevent?id='.$id.'" rel="nofollow">'.$event.'</a>';

     //end while  
     }
     //end num_row if  
     } else { $calendar.= ' ';}
			$calendar.= str_repeat('<p> </p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}

/* sample usages */
?>
<html>
<head>
	<script type="text/javascript">
	//window.location.href=”http://localhost/cosc473/ViewTutor/calendar.php?capcum=0";
var capnum = 0;
function add(){
	if (capnum >= 0 && capnum <=10){
     capnum++;
     //document.getElementById('display').innerHTML = capnum;
	 document.cookie = "capnum = " + capnum;
	}
}	
function sub(){
     if (capnum >= 2 && capnum <=12){
	 capnum--;
     //document.getElementById('display').innerHTML = capnum;
	 document.cookie = "capnum = " + capnum;

	 }
}
</script>
<div class="next">
  	  <button onclick="add()" class="next" name="next">Next Month</button>
  	</div>
<div id="display"><script type="text/javascript">/*document.write(capnum)*/;</script></div>
</head>
	<div class="previous">
  	  <button onclick="sub()" class="previous" name="previous">Previous Month</button>
</html>
<?php
//$worksplz = isset($_GET["uid"]);
//$jscount= $_COOKIE['capnum'];
$curmonth = date('n');
//$dateed = $curmonth+=$jscount;
$curyear = date('Y');
$months = array('holder','January','Febuarary','March','April','May','June','July','August','September','October','November','December');
        echo "<h2>$months[$curmonth], $curyear</h2>";
		echo draw_calendar($curmonth,$curyear);
		//echo $worksplz;
		//echo "<h2>$months[$dateed], $curyear</h2>";
		//echo draw_calendar($dateed,$curyear);
?>