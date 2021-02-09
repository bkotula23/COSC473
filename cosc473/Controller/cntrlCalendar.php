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
		
		if($flag=="register"){
		   include "View/register.php";
		} 
		
		if($flag=="registerUser"){
		   //include "View/errors.php";
		   include "Model/server.php";
		}
		if($flag=="loginUser"){
		   include "View/login.php";
		}
		if($flag=="forgotPass"){
		   include "View/changePass.php";
		}
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
