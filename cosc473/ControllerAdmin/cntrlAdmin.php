<?php

include "ViewAdmin/viewSitehome.php";

class cntrCal {

    public $ModelAdmin, $ViewAdmin;
	
	function __construct() {	
	}
	
	function viewMenu(){		
		
		$this->view = new siteMenu();
	}	
	
	function actions($flag) {	
	
	    $this->viewMenu();		
		
		if($flag=="viewUsers"){
		   include "ViewAdmin/viewUsers.php";
		} 
		if($flag=="logout"){
		   include "ModelAdmin/logout.php";
		}
		if($flag=="verifyRegisterCourse"){
		   include "ModelAdmin/verifyCourseregistration.php";
		}		
		
	}
}
?>