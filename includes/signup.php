<?php
	$email = $_POST["email"];
	$name = $_POST["name"];
	$pwd = $_POST["pwd"];
	$signup_btn = $_POST["signup_btn"];
	$a1 = true;
	$a2 = true;
	$a3 = true;
	$a4 = true;
	$a5 = true;
	$a6 = true;
	if(!empty($signup_btn)){
		include "users.php";
		if(empty($email)){
			echo "<script> $('#email_empty_error').css('display','block'); </script>";
			$a1 = false;
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<script>$('#email_invalid_error').css('display','block');  </script>";
			$a2 = false;
		}else{
			$newemail = new Users();
			$emailfound = $newemail->isEmailExists($email);
			if($emailfound){
				echo $emailfound;
				$a6 = false;
			}else{
				$a6 = true;
			}
		}
		if(empty($name)){
			echo "<script>$('#name_empty_error').css('display','block'); </script>";
			$a3 = false;
		}
		if(empty($pwd)){
			echo "<script>$('#pwd_empty_error').css('display','block'); </script>";
			$a4 = false;
		}elseif (strlen($pwd)<8) {
			echo "<script> $('#pwd_length_error').css('display','block');  </script>";
			$a5 = false;
		}
		if($a1 == true && $a2 == true && $a3 == true && $a4 == true && $a5 == true && $a6 == true){
			$user = new Users();
			echo $user->set($email,$name,$pwd);
		}
	}
?>