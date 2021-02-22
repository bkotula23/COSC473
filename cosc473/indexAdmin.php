<?php
//landing home page for Admin


 include "ControllerAdmin/cntrlCalendar.php";

 $cal = new cntrCal();
 
 
 
 if(!isset($_REQUEST['flag'])){// first time landing page or Home button
	 
      $cal->viewMenu();//show header menu
 }else{
	 
	 $cal->actions($_REQUEST['flag']);
 }
 

?> 