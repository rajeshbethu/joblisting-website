<?php 
	if(isset($_GET["id"])){
		$jid = $_GET["id"];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="styles/common.css">
	<link rel="stylesheet" type="text/css" href="styles/uncommon.css">
	<link rel="stylesheet" type="text/css" href="styles/job.css">
</head>
<body>
	
	<?php
		include "nav.php";
		include "includes/jobs.php";
		$job = new Jobs();
		$job_info = $job->getJobProfile($jid);
		$job_uid = $job_info["uid"];
		$job_title = $job_info["job_title"];
		$job_desc = $job_info["job_desc"];
		$company = $job_info["company"];
		$salary = $job_info["salary"];
		$category = $job_info["category"];
		$location = $job_info["location"];
		$contact_email = $job_info["contact_email"];
		$date = $job_info["date"];
		$curr_uid = $job->currentUid();
	?>
	<div class="body_container">
		<div class="post_container">
			<div class="post">
				<div class="post_header">
					<h1><?php echo $job_title; ?></h1>
					<p class="posted_date">Posted on <span><?php echo $date; ?></span></p>
				</div>
				<div class="post_desc">
					<p><?php echo $job_desc; ?></p>
				</div>
				<div class="post_footer_container">
					<div class="post_footer">
						<div><span class="footer_title">Company </span><span class="footer_value"><?php echo $company; ?></span></div>
						<div><span class="footer_title">Category </span><span class="footer_value"><?php echo $category; ?></span></div>
						<div><span class="footer_title">Salary </span><span class="footer_value"><?php echo $salary; ?></span></div>
						<div><span class="footer_title">Location </span><span class="footer_value"><?php echo $location; ?></span></div>
						<div><span class="footer_title">Contact Email </span><span class="footer_value"><?php echo $contact_email; ?></span></div>
					</div>
				</div>
				<?php 
					if($curr_uid == $job_uid){
						echo "<div class='footer_btns'>
								<a href='edit.php?id=$jid' class='edit'>Edit</a>
								<input type='button' class='delete' id='delete_btn' value='Delete'>
							</div>";
					}
				?>
			</div>
		</div>
	</div>
	<div id="delete_info">
		
	</div>
	<script>
		$(document).ready(function(){
			$("#delete_btn").click(function(){
				var jid = <?php echo $jid; ?>;
				var submit_btn = $("#delete_btn").val();
				$("#delete_info").load("includes/delete.php",{
					jid: jid,
					submit_btn: submit_btn
				});
			});
		});
	</script>
</body>