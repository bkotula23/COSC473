
<!DOCTYPE html>
<html>
<head>
  <title>Register course</title>
  <link rel="stylesheet" type="text/css" href="ViewTutor/styleTutor.css">
</head>
<body>
  <div class="header">
  	<h1>Course Registration</h1>
  </div>
	 
  <form method="post" action="indexTutor.php?flag=verifyRegisterCourse">
  	<div class="input-group">
  		<label for="class">Choose A Class To Tutor:</label>
  		<select name="class" id="class">
			<option value="Cosc 473">Cosc 473</option>
			<option value="COSC 365">COSC 365</option>
			<option value="COSC 465">COSC 465</option>
			<option value="COSC 300">COSC 300</option>
		</select>
  	</div>
  	<div class="input-group">
  		<label>Course Code</label>
  		<input type="password" name="courseCode">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="register_course">Submit</button>
  	</div>
  	<p>
  	</p>
  </form>
</body>
</html>
