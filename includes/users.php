<?php 
	class Users{
		function connect() {
			$servername = "localhost";
			$username = "root";
			$password = "qadbpwd";
			$dbname = "jobportal";
			$conn = new mysqli($servername, $username, $password, $dbname);
			return $conn;
		}
		function set($email, $name, $pwd){
			$conn = $this->connect();
			$sql = "INSERT INTO `users` (`email`, `name`, `password`) VALUES ('$email', '$name', '$pwd');";
			if ($conn->query($sql) === TRUE){
				setcookie("login_info", $email, time() + (86400 * 30), "/");
				$conn->close();
				return "<script>window.location.href = 'http://localhost/job%20portal/home.php';</script>";
			}else{
				$conn->close();
				return "<script>alert('signup failed');</script>";
			}
			$conn->close();
		}
		function isEmailExists($email){
			$sql = "select email from users";
			$conn = $this->connect();
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				$db_email = $row['email'];
				if(strcmp($db_email,$email)==0){
					$conn->close();
					return "<script> $('#email_exists_error').css('display','block'); </script>";
				}
			}
			$conn->close();
		}
		function verifyUser($email, $pwd){
			$conn = $this->connect();
			$sql = "select email,password from users";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				$db_email = $row['email'];
				$db_pwd = $row['password'];
				if(strcmp($db_email,$email)==0 && strcmp($db_pwd,$pwd)==0){
					$conn->close();
					return true;					
				}
			}
			$conn->close();
			return false;
		}
		function get(){

		}
	}
?>