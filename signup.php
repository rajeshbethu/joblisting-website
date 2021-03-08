<?php
	if(isset($_COOKIE["login_info"])) {
	    header("Location: http://localhost/job portal/home.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="styles/common.css">
	<link rel="stylesheet" type="text/css" href="styles/form_styles.css">
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
				<h3 class="signup_text">Please Signup</h3>
				<input type="email" name="email" class="form_item" placeholder="Email" id="email">
				<p class="error_text" id="email_exists_error">A user already exists with this email</p>
				<p class="error_text" id="email_empty_error">Please enter email address</p>
				<p class="error_text" id="email_invalid_error">Please enter valid email address</p>
				<input type="text" name="name" class="form_item" placeholder="Your Name" id="name">
				<p class="error_text" id="name_empty_error">Please enter your name</p>
				<input type="password" name="pwd" class="form_item" placeholder="Password" id="pwd">
				<p class="error_text" id="pwd_empty_error">Please enter password</p>
				<p class="error_text" id="pwd_length_error">Password should be 8 characters minimum.</p>
				<input type="submit" name="submit" value="submit" class="submit_btn form_item" id="signup_btn">
				<a href="login.php" class="link_on_form">I have an Account</a>
			</div>
		</div>
	</div>
	<div id="signup_info">
		
	</div>
	<script>
		$(document).ready(function(){
			$("#signup_btn").click(function(){
				$(".error_text").css("display","none");
				var email = $("#email").val();
				var name = $("#name").val();
				var pwd = $("#pwd").val();
				var signup_btn = $("#signup_btn").val();
				$("#signup_info").load("includes/signup.php",{
					email: email,
					name: name,
					pwd: pwd,
					signup_btn: signup_btn
				});
			});
		});
	</script>
</body>
</html>