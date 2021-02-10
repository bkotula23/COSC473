<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="View/style.css">
</head>
<body>
	<p style="text-align: center">
		Are you a <button type="submit" class="btn" name="reg_user"><a style="color: white" href="index.php?flag=register">Student</a></button> or
		<button type="submit" class="btn" name="reg_user"><a style="color: white" href="index.php?flag=tutor_register">Tutor</a></button>?
	</p>
  <div class="header">
  	<h2> Tutor Register</h2>
  </div>
	
  <form method="post" action="index.php?flag=registerUser">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
    <div class="input-group">
  	  <label>Tutor Code</label>
  	  <input type="code" name="code" value="">
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
  		Already a member? <a href="index.php?flag=loginUser">Sign in</a>
  	</p>
  </form>
</body>
</html>
