<?php

include "ViewTutor/viewSitehome.php";

class cntrCal {

    public $ModelTutor, $ViewTutor;
	
	function __construct() {	
	}
	
	function viewMenu(){		
		
		$this->view = new siteMenu();
	}	
	
	function actions($flag) {	
	
	    $this->viewMenu();		
		
		if($flag=="registerCourse"){
		   include "ViewTutor/courseRegistration.php";
		} 
		if($flag=="logout"){
		   include "ModelTutor/logout.php";
		}
		if($flag=="verifyRegisterCourse"){
		   include "ModelTutor/verifyCourseregistration.php";
		}
		if($flag=="calendar"){
		   include "ModelTutor/calendar.html";
		}		
		
	}
}
?>
