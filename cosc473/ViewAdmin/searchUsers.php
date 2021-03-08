<!DOCTYPE html>
<html>
<head>
  <title>Find Users</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>User Information</h2>
  </div>
	
  <form method="post" action="indexAdmin.php?flag=searchUsersmodel">
  	<div class="input-group">
  	  <label>Search By Username</label>
  	  <input type="text" name="user" value="" placeholder="Ex: Joe Smoe">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="search">Search</button>
  	</div>
  </form>
</body>
</html>