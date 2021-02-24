<?php

include "View/viewSitehome.php";

class cntrCal {

    public $model, $view;
	
	function __construct() {	
	}
	
	function viewMenu(){		
		
		$this->view = new siteMenu();
	}	
	
	function actions($flag) {	
	
	    $this->viewMenu();		
		
		if($flag=="registerStudent"){
		   include "View/studentRegister.php";
		} 
		
		if($flag=="registerStudentmethod"){
		   //include "View/errors.php";
		   include "Model/studentRegister.php";
		}
		if($flag=="registerTutor"){
		   include "View/tutorRegister.php";
		}
		if($flag=="registerTutormethod"){
		   //include "View/errors.php";
		   include "Model/registerTutor.php";
		}		
		if($flag=="loginUser"){
		   include "View/login.php";
		}
		if($flag=="forgotPass"){
		   include "View/changePass.php";
		}
		if($flag=="login"){
		   include "Model/login.php";
		}
		if($flag=="logout"){
		   include "Model/logout.php";
		}
		if($flag=="changePassword"){
		   include "view/changePass.php";
		}
		if($flag=="changePass"){
		   include "Model/changePassword.php";
		}
			//admin register
		/*if($flag=="registerAdminmethod"){
		   include "Model/registerAdmin.php";
		}
		if($flag=="registerAdmin"){
		   include "View/adminRegister.php";
		}*/
		
		
		/*
		include "Model/server.php";
		$this->model = new modelBook();
		
		if($flag=="insertBook"){		  		  
		  		  
		  $this->model->insertBook ($_REQUEST['title'], $_REQUEST['author'], $_REQUEST['desc'], $_REQUEST['price']);		  
		}
		
		if($flag=="view"){ // model communicating with view		 
			$this->model->viewBookInfo();
		}
	*/	
	}
}	
?>
