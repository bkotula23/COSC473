<!DOCTYPE html>
<html>
<head>
  <title>Registration system</title>
  <link rel="stylesheet" type="text/css" href="view/style.css">
</head>
<body>
  <div class="header">
  	<h2>Student Registration</h2>
  </div>
	
  <form method="post" action="index.php?flag=registerStudentmethod">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Tutors and professors register here! <a href="index.php?flag=registerTutor">Tutor Registration</a><br />
		Already a member? <a href="index.php?flag=loginUser">Sign in</a>
  	</p>
  </form>
</body>
</html>