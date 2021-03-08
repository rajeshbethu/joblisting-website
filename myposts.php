<?php
	if(!isset($_COOKIE["login_info"])) {
	    header("Location: http://localhost/job%20portal/login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="uncommon.css">
</head>
<body>
	<?php
		include "nav.php";
		include "includes/jobs.php";
	?>
	<div class="body_container">
		<div class="filter_form">
			<select class="filter" id="category_select_myposts">
				<option>All</option>
				<option>IT</option>
				<option>Logisticts</option>
				<option>HR jobs</option>
				<option>Testing</option>
			</select>
			<button class="filter_btn" id="my_filter_category">Search</button>
		</div>
		<h2 class="myposts_header">Your job posts</h2>
		<div class="post_container" id="my_posts_container">
			<?php
				$email = $_COOKIE["login_info"];
				$conn = new Jobs();
				$conn = $conn->connect();
				$result = $conn->query("select uid from users where email='$email'");
				$row = $result->fetch_assoc();
				$uid = $row["uid"];
				$jobs = new Jobs();
				echo $jobs->get($uid);
			?>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#my_filter_category").click(function(){
				var category_select_myposts = $("#category_select_myposts").val();
				var my_filter_btn = $("#my_filter_category").val();
				$("#my_posts_container").load("includes/filter_category.php",{
					category_select: category_select_myposts,
					uid: 1,
					filter_btn: my_filter_btn
				});
			});
		});
	</script>
</body>
</html>