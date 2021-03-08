<?php
	setcookie("login_info", "", time()-36100, "/");
	header("location:../home.php");
?>