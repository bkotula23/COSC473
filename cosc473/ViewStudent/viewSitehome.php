<!--Student Home-->
<?php

  class siteMenu{
  
       function __construct(){
	   
?>
			<html>  
			<head>  
				<link rel="stylesheet" type="text/css" href="ViewStudent/style.css">
				<title>Tutor IUP</title> 
				
			</head> 

				
				<body>  
							<h1>Tutor IUP - Student Dashboard</h1>	  
							
							<p> 		
								<a href="indexStudent.php?flag=registerCourse"> View Courses</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="indexStudent.php"> Home</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="indexStudent.php?flag=changePassword"> Change Password</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="indexStudent.php?flag=logout"> Logout</a>								
							</p>							
				</body>  

				
			</html>  
			
<?php
	   
	   }
  
  
  }

?>