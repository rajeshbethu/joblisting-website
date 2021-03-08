<?php
include "jobs.php";
$jid = $_POST["jid"];
$job_title = $_POST["job_title"];
$job_desc = $_POST["job_desc"];
$company_name = $_POST["company_name"];
$sal = $_POST["sal"];
$cate = $_POST["cate"];
$location = $_POST["location"];
$contact_email = $_POST["contact_email"];
$submit_btn = $_POST["submit_btn"];
$a1 = true;
$a2 = true;
$a3 = true;
$a4 = true;
$a5 = true;
$a6 = true;
$a7 = true;
$a8 = true;


if(!empty($submit_btn)){

	if(empty($job_title)){
		echo "<script>$('#title_empty_error').css('display','block'); </script>";
		$a1 = false;
	}
	if(empty($job_desc)){
		echo "<script>$('#desc_empty_error').css('display','block'); </script>";
		$a2 = false;
	}
	if(empty($company_name)){
		echo "<script>$('#company_empty_error').css('display','block');  </script>";
		$a3 = false;
	}
	if(empty($sal)){
		echo "<script>$('#sal_empty_error').css('display','block');  </script>";
		$a4 = false;
	}
	if(strcmp($cate, "Select Category") == 0){
		echo "<script>$('#cate_empty_error').css('display','block');  </script>";
		$a5 = false;
	}
	if(empty($location)){
		echo "<script>$('#location_empty_error').css('display','block');  </script>";
		$a6 = false;
	}
	if(empty($contact_email)){
		echo "<script> $('#email_empty_error').css('display','block'); </script>";
		$a7 = false;
	}elseif (!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
		echo "<script>$('#email_invalid_error').css('display','block');  </script>";
		$a8 = false;
	}
	if($a1 == true && $a2 == true && $a3 == true && $a4 == true && $a5 == true && $a6 == true && $a7 == true && $a8 == true){
		$update_job = new Jobs();
		$result = $update_job->update($jid, $job_title, $job_desc, $company_name, $sal, $cate, $location, $contact_email);
		if($result){
			echo $result;
		}else{
			die("You don't have permission to view this page");
		}
	}	
}
	
?>