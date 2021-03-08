<?php

include "ViewStudent/viewSitehome.php";

class cntrCal {

    public $ModelStudent, $ViewStudent;
	
	function __construct() {	
	}
	
	function viewMenu(){		
		
		$this->view = new siteMenu();
	}	
	
	function actions($flag) {	
	
	    $this->viewMenu();		
		
		if($flag=="viewCourses"){
		   include "ViewStudent/viewCourses.php";
		} 
		if($flag=="viewCalandar"){
		include "ViewStudent/viewCalandar.php";
		} 
		if($flag=="logout"){
		   include "ModelStudent/logout.php";
		}
		if($flag=="verifyRegisterCourse"){
		   include "ModelStudent/verifyCourseregistration.php";
		}
		if($flag=="viewCoursesmodel"){
		   include "ModelStudent/viewCourses.php";
		}
		/*test username session
		if($flag=="testUsername"){
		   include "ModelStudent/checkUser.php";
		}*/
		
	}
}
?>
