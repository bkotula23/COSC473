<!DOCTYPE html>
<html>
<head>
  <title>Password Change system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="View/style.css">
</head>
<body>
  <div class="header">
  	<h2>Forgot Password</h2>
  </div>
  <form method="post" action="index.php?flag=forgotPass">
  	<div class="input-group">
  	  <label>New password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm new password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="chng_pass">Change Password</button>
  	</div>
  </form>
</body>
</html>