<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset</title>
	  <link rel="stylesheet" type="text/css" href="View/style.css">
</head>
	<body>
		<div class="header">
			<h2 >Reset password</h2>
		</div>
		<form class="login-form" action="index.php?flag=forgotPass">
		
		<!-- form validation messages -->
			<div class="input-group">
				<label>Your email address</label>
				<input type="email" name="email">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" class="login-btn">Submit</button>
			</div>
		</form>
	</body>
</html>