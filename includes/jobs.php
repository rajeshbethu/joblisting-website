<?php 
	class Jobs{
		function connect() {
			$servername = "localhost";
			$username = "root";
			$password = "qadbpwd";
			$dbname = "jobportal";
			$conn = new mysqli($servername, $username, $password, $dbname);
			return $conn;
		}
		function currentUid(){
			if(isset($_COOKIE["login_info"])){
				$email = $_COOKIE["login_info"];
				$conn = $this->connect();
				$result = $conn->query("select uid from users where email='$email'");
				$row = $result->fetch_assoc();
				$uid =  $row["uid"];
				return $uid;
			}				
		}
		function set($job_title, $job_desc, $company_name, $sal, $cate, $location, $contact_email){
			$conn = $this->connect();
			$uid = $this->currentUid();
			$date = date("j, F Y");
			$sql = "INSERT INTO `jobs` (`uid`, `job_title`, `job_desc`, `company`, `salary`, `category`, `location`, `contact_email`, `date`) VALUES ('$uid', '$job_title', '$job_desc', '$company_name', '$sal', '$cate', '$location', '$contact_email', '$date')";
			if ($conn->query($sql) === TRUE){
				$last_id = $conn->insert_id;
				$conn->close();
				return "<script>window.location.href = 'http://localhost/job%20portal/job.php?id=$last_id';</script>";
			}
		}
		function get($uid){
			$conn = $this->connect();
			if($uid == 0){
				$sql = "select jid, job_title, job_desc, category from jobs order by jid desc";
			}else{
				$sql = "select jid, job_title, job_desc, category from jobs where uid=$uid order by jid desc";
			}
			$result = $conn->query($sql);
			$return_content = "";
			while($row = $result->fetch_assoc()){
				$jid = $row["jid"];
				$title = $row["job_title"];
				$desc = $row["job_desc"];
				$category = $row["category"];
				$return_content .= "<div class='job_posts'>
				<h3><a href='job.php?id=$jid'>$title</a></h3>
				<p>$desc</p>
				<div class='post_footer'>
					<a href='job.php?id=$jid' class='view_job'>View details</a>
					<span class = 'home_list_category'>$category</span>
				</div>
			</div>";
			}
			return $return_content;
		}
		function getFilteredJobs($category, $uid){
			$conn = $this->connect();
			if($uid == 0){
				$sql = "select jid, job_title, job_desc, category from jobs where category='$category' order by jid desc";
			}else{
				$sql = "select jid, job_title, job_desc, category from jobs where uid=$uid AND category='$category' order by jid desc";
			}
			$result = $conn->query($sql);
			$return_content = "";
			while($row = $result->fetch_assoc()){
				$jid = $row["jid"];
				$title = $row["job_title"];
				$desc = $row["job_desc"];
				$category = $row["category"];
				$return_content .= "<div class='job_posts'>
				<h3><a href='job.php?id=$jid'>$title</a></h3>
				<p>$desc</p>
				<div class='post_footer'>
					<a href='job.php?id=$jid' class='view_job'>View details</a>
					<span class = 'home_list_category'>$category</span>
				</div>
			</div>";
			}
			return $return_content;

		}
		function getJobProfile($jid){
			$conn = $this->connect();
			$sql = "select * from jobs where jid=$jid;";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			return $row;
		}
		function update($jid, $job_title, $job_desc, $company_name, $sal, $cate, $location, $contact_email){
			$conn = $this->connect();

			$curr_uid = $this->currentUid();
			$sql2 = "select uid from jobs where jid=$jid";
			$result = $conn->query($sql2);
			$row = $result->fetch_assoc();
			$job_uid = $row["uid"];
			
			if($job_uid != $curr_uid){
				return false;
			}
			$date = date("j, F Y");
			$sql = "update jobs set job_title='$job_title', job_desc='$job_desc', company='$company_name', salary='$sal', category='$cate', location='$location', contact_email='$contact_email', date='$date' where jid= $jid";
			if ($conn->query($sql) === TRUE){
				$conn->close();
				return "<script>window.location.href = 'http://localhost/job%20portal/job.php?id=$jid';</script>";
			}
		}
		function delete($jid){
			$conn = $this->connect();
			$curr_uid = $this->currentUid();
			$sql = "select uid from jobs where jid=$jid";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$job_uid = $row["uid"];
			if($job_uid != $curr_uid){
				return false;
			}
			$sql_delete = "delete from jobs where jid=$jid;";
			if($conn->query($sql_delete) === TRUE){
				return "<script>window.location.href = 'http://localhost/job%20portal/myposts.php';</script>";
			}
		}
	}
?>