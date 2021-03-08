<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="nav_bar">
	<nav>
		<?php 
			if(!isset($_COOKIE["login_info"])){
				echo "<a class='nav_icons' href='login.php'>Login</a>
					<a class='nav_icons' href='signup.php'>Sign Up</a>";
			}else{
				echo "<a class='nav_icons' href='home.php'>Home</a>
					<a class='nav_icons' href='create.php'>Post new Job</a>
					<a class='nav_icons' href='myposts.php'>My posts</a>
					<a class='nav_icons' href='includes/logout.php'>Logout</a>";
			}
		?>
	</nav>
</div>