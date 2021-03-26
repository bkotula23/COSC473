<!--Student Home-->
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
							<h1>Tutor IUP - Student Dashboard</h1>	  
							
							<p id=links> 		
								<a href="indexStudent.php?flag=viewCourses"> View Courses</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="indexStudent.php?flag=calendar"> Calendar</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="indexStudent.php"> Home</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="indexStudent.php?flag=changePassword"> Change Password</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="indexStudent.php?flag=logout"> Logout</a>
						<!--	<a href="indexStudent.php?flag=testUsername"> Check user</a>	username test session-->						
							</p>							
				</body>  

				
			</html>  
			
<?php
	   
	   }
  
  
  }

?>
