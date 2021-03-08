<?php 
if(isset($_POST["submit_btn"])){
	include "jobs.php";
	$jid = $_POST["jid"];
	$delete_job = new Jobs();
	echo $delete_job->delete($jid);
}


?>