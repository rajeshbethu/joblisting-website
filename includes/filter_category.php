<?php
include "jobs.php";
if(isset($_POST["filter_btn"])){
	$jobs_list = new Jobs();
	$category = $_POST["category_select"];
	if(isset($_POST["uid"])){
		$uid = $jobs_list->currentUid();
	}else{
		$uid = 0;
	}
	if(strcmp($category, "All") == 0){
		echo $jobs_list->get($uid);
	}else{
		echo $jobs_list->getFilteredJobs($category, $uid);
	}
}
?>