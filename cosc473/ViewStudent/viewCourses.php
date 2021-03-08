<!DOCTYPE html>
<html>
<head>
  <title>Find Classes</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>View Courses</h2>
  </div>
	
  <form method="post" action="indexStudent.php?flag=viewCoursesmodel">
  	<div class="input-group">
  	  <label>Search By Course</label>
  	  <input type="text" name="course" value="" placeholder="Ex: COSC 300">
  	</div>
	<!--
  	<div class="input-group">
  	  <label>Search By Tutor</label>
  	  <input type="text" name="tutor" value="">
  	</div> -->
  	<div class="input-group">
  	  <button type="submit" class="btn" name="search">Search</button>
  	</div>
  </form>
</body>
</html>