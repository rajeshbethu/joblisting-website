<?php
	$login_btn = $_POST["login_btn"];
	if(!empty($login_btn)){
		include "users.php";
		$email = $_POST["email"];
		$pwd = $_POST["pwd"];
		if(empty($email)){
			echo "<script> $('#email_empty_error').css('display','block'); </script>";
		}
		if(empty($pwd)){
			echo "<script> $('#pwd_empty_error').css('display','block'); </script>";
		}
		if(!empty($email) && !empty($pwd)){
			$login_details = new Users();
			if($login_details->verifyUser($email, $pwd)){
				setcookie("login_info", $email, time() + (86400 * 30), "/");
				echo "<script>window.location.href = 'http://localhost/job%20portal/home.php';</script>";
			}else{
				echo "<script> $('#validation_error').css('display','block'); </script>";
			}
		}
	}
	
	
	

?>