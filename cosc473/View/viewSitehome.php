<?php

  class siteMenu{
  
       function __construct(){
	   
?>
			<html>  
			<head>  
				<title>Tutor IUP</title>
				<link rel="stylesheet" type="text/css" href="View/style.css">  
			</head> 

				
				<body>  
							<h1>Welcome to Tutor IUP!</h1>	  
							
							<p id="iup"> 
								<img src="images/iup.jpg" alt="IUP" width=100/>
								<br/>
	  						</p>
							<p>
								<button type="submit" class="btn" name="reg_user"><a style="color: white" href="index.php?flag=register"> Register </a> </button>
							    &nbsp;&nbsp;&nbsp;&nbsp;
							    <button type="submit" class="btn" name="reg_user"><a style="color: white" href="index.php?flag=view"> View Book </a> </button>
							    &nbsp;&nbsp;&nbsp;&nbsp;	
							    <button type="submit" class="btn" name="reg_user"><a style="color: white" href="index.php"> Home</a> </button>
							</p>							
				</body>  

				
			</html>  
			
<?php
	   
	   }
  
  
  }

?>