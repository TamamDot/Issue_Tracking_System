<?php 
require 'includes/database.php';
session_start();
//Taking data from the complain form and adding it to our database
if (isset($_POST['uname'])) {
	$stmt = mysqli_stmt_init($conn);
	$uname = $_POST['uname'];
	$sql1 = "SELECT * FROM users WHERE User_Name = ?";
	if (!mysqli_stmt_prepare($stmt,$sql1)) {
		header("Location:complaint_form.php?sqlerror1");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,'s',$uname);
		mysqli_stmt_execute($stmt);
		$output1 = mysqli_stmt_get_result($stmt);
		$rowData1 = mysqli_fetch_assoc($output1);
		$fname = $rowData1['Fullname'];
		$issue = $_POST['issue_name1'];
		$sql1_2 = "SELECT * FROM issueoption WHERE issue_topic = '$issue'";
		$query1_2 = mysqli_query($conn,$sql1_2);
		$data1_2 = $query1_2->fetch_assoc();
		$department = $data1_2['dept_cat'];
		$contactInfo = $rowData1['contact_info'];
		$reporter_state = $rowData1['state'];
		$stats = "unsolved";
		$staff = "not assigned";
		$secondStats = "Open";
		$desc = $_POST['description1'];
		$dateParam = getdate(date("U"));
		$month = "$dateParam[mon]";
		$day = "$dateParam[mday]";
		if ($month < 10) {
			$month = "0".$month;
		}
		else {
			$month = $month;
		}

		if ($day < 10) {
			$day = "0".$day;
		}
		else{
			$day = $day;
		}
		$date = "$dateParam[year]-$month-$day";
		$sql2 = "INSERT INTO issue_tracking (Issue,Department,Description,Status,second_stats,Assigned_staff,reporter,contact_info,reporter_state,date_val) VALUES(?,?,?,?,?,?,?,?,?,?)";
		if (!mysqli_stmt_prepare($stmt,$sql2)) {
			header("Location:complaint_form?sqlerror2");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt,'ssssssssss',$issue,$department,$desc,$stats,$secondStats,$staff,$fname,$contactInfo,$reporter_state,$date);
			mysqli_stmt_execute($stmt);
			//header("Location:issue_history.php");
			//exit();
			echo "issue_history.php";
		}
	}

}
//showing details for each issue 
else if (isset($_POST['dets1'])) {
	$_SESSION['ticketNum'] = $_POST['issueRow'];
	header("Location:issue_detail.php");
	exit();
}
else {
	echo "b";
}



?>