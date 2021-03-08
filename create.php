<?php
if(!isset($_COOKIE["login_info"])) {
    header("Location: http://localhost/job%20portal/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create a new Job Post</title>
	<link rel="stylesheet" type="text/css" href="styles/common.css">
	<link rel="stylesheet" type="text/css" href="styles/form_styles.css">
</head>
<body>
	
	<?php include "nav.php"?>
	
	<div class="main_container">
		<div class="form_container">
			<div class="form">
				<h3 class="post_job_text">Create a new Job Post</h3>
				<input type="text" name="title" class="form_item" id="job_title" placeholder="Job title">
				<p class="error_text" id="title_empty_error">Please enter Job Title</p>
				<textarea type="text" name="desc" class="form_item desc" id="job_desc" placeholder="Description"></textarea>
				<p class="error_text" id="desc_empty_error">Please enter Job Description</p>
				<input type="text" name="company" class="form_item" id="company_name" placeholder="Company name">
				<p class="error_text" id="company_empty_error">Please enter Company Name</p>
				<input type="number" name="salary" class="form_item" id="sal" placeholder="Salary in rupees per month">
				<p class="error_text" id="sal_empty_error">Please enter Salary</p>
				<select class="form_item" id="cate">
					<option>Select Category</option>
					<option>IT</option>
					<option>Logisticts</option>
					<option>HR jobs</option>
					<option>Testing</option>
				</select>
				<p class="error_text" id="cate_empty_error">Please select category</p>
				<input type="text" name="location" class="form_item" id="location" placeholder="Location">
				<p class="error_text" id="location_empty_error">Please enter Location</p>
				<input type="email" name="email" class="form_item" id="contact_email" placeholder="Contact Email">
				<p class="error_text" id="email_empty_error">Please enter email address</p>
				<p class="error_text" id="email_invalid_error">Please enter valid email address</p>
				<input type="button" name="submit" value="submit" class="submit_btn form_item" id="submit_btn">
			</div>
		</div>
	</div>
	<div id="create_post_info">
		
	</div>
	<script>
		$(document).ready(function(){
			$("#submit_btn").click(function(){
				$(".error_text").css("display","none");
				var job_title = $("#job_title").val();
				var job_desc = $("#job_desc").val();
				var company_name = $("#company_name").val();
				var sal = $("#sal").val();
				var cate = $("#cate").val();
				var location = $("#location").val();
				var contact_email = $("#contact_email").val();
				var submit_btn = $("#submit_btn").val();
				$("#create_post_info").load("includes/create_job.php",{
					job_title: job_title,
					job_desc: job_desc,
					company_name: company_name,
					sal: sal,
					cate: cate,
					location: location,
					contact_email: contact_email,
					submit_btn: submit_btn
				});
			});
		});
	</script>
</body>
</html>