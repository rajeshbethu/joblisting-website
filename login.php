<?php
if(isset($_COOKIE["login_info"])) {
    header("Location: http://localhost/job%20portal/home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="form_styles.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="nav_bar">
		<nav>
			
		</nav>
	</div>
	<div class="main_container">
		<div class="form_container">
			<div class="form">
				<h3 class="login_text">Please Login</h3>
				<input type="email" name="email" class="form_item" placeholder="Email" id="login_email">
				<p class="error_text" id="email_empty_error">Please enter email address</p>
				<input type="password" name="pwd" class="form_item" placeholder="Password" id="login_pwd">
				<p class="error_text" id="pwd_empty_error">Please enter password</p>
				<p class="error_text" id="validation_error">Email or Password incorrect</p>
				<input type="button" name="submit" value="submit" class="submit_btn form_item" id="login_submit">
				<a href="signup.php" class="link_on_form">Create new Account</a>
			</div>
		</div>
	</div>
	<div id="login_info">
		
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#login_submit").click(function(){
				$(".error_text").css("display","none");
				var email = $("#login_email").val();
				var pwd = $("#login_pwd").val();
				var login_btn = $("#login_submit").val();
				$("#login_info").load("includes/verify_login.php",{
					email: email,
					pwd: pwd,
					login_btn: login_btn
				});
			});
		});
	</script>
</body>
</html>