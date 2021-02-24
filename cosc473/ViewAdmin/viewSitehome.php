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
							<h1>Tutor IUP - Admin Dashboard</h1>	  
							
							<p id=links> 
							
								<a href="indexAdmin.php"> Search Users</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="indexAdmin.php"> Home</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="indexAdmin.php?flag=changePassword"> Change Password</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="indexAdmin.php?flag=logout"> Logout</a>								
							</p>							
				</body>  

				
			</html>  
			
<?php
	   
	   }
  
  
  }

?>