<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="uncommon.css">
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<?php
		include "nav.php";
		include "includes/jobs.php";
	?>
	
	<div class="body_container">
		<div class="filter_form">
			<select class="filter" id="category_select">
				<option>All</option>
				<option>IT</option>
				<option>Logisticts</option>
				<option>HR jobs</option>
				<option>Testing</option>
			</select>
			<button class="filter_btn" id="filter_category">Search</button>
		</div>
		<h2 class="home_header">Latest Jobs</h2>
		<div class="posts_container" id="posts_container">
			<?php 
				$jobs = new Jobs();
				echo $jobs->get(0);
			?>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#filter_category").click(function(){
				var category_select = $("#category_select").val();
				var filter_btn = $("#filter_category").val();
				$("#posts_container").load("includes/filter_category.php",{
					category_select: category_select,
					filter_btn: filter_btn
				});
			});
		});
	</script>
</body>
</html>