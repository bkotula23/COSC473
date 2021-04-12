<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset</title>
	  <link rel="stylesheet" type="text/css" href="View/style.css">
</head>
<body>
	<div class="login-form">
		<h2 class="form-title">Reset password</h2>
		<div class="form-group">
			<label>Your email address</label>
			<input type="email" id="email" name="email">
		</div>
		<div class="form-group">
			<input type="button" onclick="sendEmail()" value="Submit" name="reset-password" class="btn"></button>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var email = $("#email");

            if (isNotEmpty(email) ) {
                $.ajax({
                   url: 'View/sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       email: email.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>