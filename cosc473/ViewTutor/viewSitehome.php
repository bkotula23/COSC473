<!--Tutor Home-->
<?php

  class siteMenu{
  
       function __construct(){
	   
?>
			<html>  
			<head>  
				<link rel="stylesheet" type="text/css" href="view/style.css">
				<title>Tutor IUP</title>  
			</head> 

				
				<body>  
							<h1>Tutor IUP</h1>	  
							
							<p id=links> 		
								<a href="indexTutor.php?flag=registerCourse"> Register Course</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="indexTutor.php"> Home</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="indexTutor.php?flag=changePassword"> Change Password</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="indexTutor.php?flag=logout"> Logout</a>								
							</p>							
				</body>  

				
			</html>  
			
<?php
	   
	   }
  
  
  }

?>