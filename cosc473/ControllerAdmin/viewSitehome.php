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
							<h1>Admin IUP</h1>	  
							
							<p id=links> 
							    <a href="index.php?flag=registerStudent"> Logout </a> 
							    &nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="index.php?flag=loginUser"> Log In </a> 
							    &nbsp;&nbsp;&nbsp;&nbsp;	
							    <a href="index.php"> Home</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="index.php?flag=changePassword"> Change Password</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="index.php?flag=logout"> Logout</a>								
							</p>							
				</body>  

				
			</html>  
			
<?php
	   
	   }
  
  
  }

?>