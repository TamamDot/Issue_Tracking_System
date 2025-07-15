<?php 
//80% of back end operation goes on in this page

//for navigating between the dashboards i.e Facility issue,Issue Instance,manager users. From page : tracking-page.php,tracking-page2.php,tracking-page3.php
if (isset($_POST['pageNum'])) {
	require 'issue_page'.$_POST['pageNum'].'.php';
}
//filtering the facility based on the selected state from the registeration page
else if (isset($_POST['listName'])) {
	echo $_POST['listName'];	
}

//updating an issue status after the staff assigned have started working nd change the status from unsolved to processing From page : tracking-page.php
else if (isset($_POST['issueReg'])) {
	require 'Includes/database.php';
	$stats = $_POST['statText'];
	$issueReg = $_POST['issueReg'];
	$sql1 = "UPDATE issue_tracking SET Status = '$stats' WHERE Issue_No = $issueReg";
	mysqli_query($conn,$sql1);
	
	echo "tracking_page.php";
}
//Updating an issue assigned staff column when the state admin assign a new staff From page : tracking-page2.php
else if (isset($_POST['issue_reg'])) {
	require 'Includes/database.php';
	session_start();

	$staffAssign = $_POST['staffAssign'];
	$staffAssign_uname = $_POST['staff_uname'];
	$issueRow = $_POST['issue_reg'];


	$sql2 = "UPDATE issue_tracking SET Assigned_Staff = '$staffAssign', Assigned_staff_uname = '$staffAssign_uname' WHERE Issue_No = '$issueRow'";
	mysqli_query($conn,$sql2);
	echo "Email Sent";

}

//Registering new users From page : tracking-page2.php, tracking-page3.php
else if (isset($_POST['regBtn'])) {
	require 'Includes/database.php';
	session_start();

	$fname = $_POST['fname2'];
	$uname = $_POST['uname2'];
	$stringSet =  "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	$charSet = str_split($stringSet);
	$randomString = "";
	$_SESSION['randomString'] = "";
	for ($i = 1; $i <= 15; $i++) {

		$charNum = rand(0,61);	
		$randomString = $charSet[$charNum];
		$_SESSION['randomString'] = $_SESSION['randomString'].$randomString;
		//echo $randomString;
	}
	$pass = $_SESSION['randomString'];
	if ($_POST['pos2'] == "M&amp;E Staff") {
		$pos = "m&e staff";
	}
	else {
		$pos = $_POST['pos2'];
	}
	$facil = $_POST['facil2'];
	$info = $_POST['info2'];
	$pageNum = $_POST['pageNum2'];
	if (isset($_POST['stateVal'])) {
		$state = $_POST['stateVal'];
	}
	else {
		$state = NULL;
	}
	$sql1 = "SELECT * FROM facility WHERE Facility_Name = '$facil'";
	$query1 = mysqli_query($conn,$sql1);
	if ($query1->num_rows > 0) {
		$data = $query1->fetch_assoc();
		//echo "l";
	}
	$sql2 = "INSERT INTO users (Fullname,User_name,password,Facility_no,state,Position,contact_info) VALUES(?,?,?,?,?,?,?)";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt,$sql2)) {
		header("Location:tracking_page".$pageNum.".php?sqlerror");
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt,"sssssss",$fname,$uname,$pass,$data['Facility_No'],$state,$pos,$info);
		mysqli_stmt_execute($stmt);
		$_SESSION['errors2'] = "no error";
		$_SESSION['tempPass'] = $pass;
		$_SESSION['mail'] = $info;
		$_SESSION['uname'] = $fname;
		$_SESSION['new_pos'] = $pos;
		$_SESSION['stateVal'] = $state;
		if ($facil == "") {
			$_SESSION['facilValue'] = "{$state} Hospitals";
		}
		else {
			$_SESSION['facilValue'] = $facil;
		}
		
		header("Location:tracking_page".$pageNum.".php");
		exit();
	}
}

//switching between open and closed issue on the facility staff table From page : issue_history.php
else if (isset($_POST['type'])) {
	session_start();
	$type = $_POST['type'];
	$fname = $_SESSION['sessionfname1'];
	require 'Includes/database.php';
	
	$sql1 = "SELECT * FROM issue_tracking WHERE reporter = '$fname' AND second_stats = '$type' ORDER BY date_val DESC";
	$query1 = mysqli_query($conn,$sql1);

	echo '
		<tr>
			<th><i class="fad fa-hashtag"></i> Ticket ID</th>
			<th><i class="fad fa-bug"></i>Issue</th>
			<th><i class="fad fa-memo-circle-info"></i>Description</th>
			<th><i class="fad fa-list-check"></i>Status</th>
			<th><i class="fad fa-user-secret"></i>Assigned Staff</th>
			<th><i class="fad fa-calendar-days"></i>Reported Date</th>
			<th><i class="fad fa-ellipsis-vertical"></i>Issue Details</th>
		</tr>';

	$i = 0;
	$table = "";
	if ($query1->num_rows > 0) {

		while ($rowData1 = $query1->fetch_assoc()) {
			$i++;
			$table = $table.$table;
			$table = 
			"<tr id ='tRow$i'>
				<td id = 'Colm{$i}_1'>#$i</td>
				<td id = 'Colm{$i}_2'>{$rowData1['Issue']}</td>
				<td id = 'Colm{$i}_3'>{$rowData1['Description']}</td>
				<td id = 'Colm{$i}_4'>{$rowData1['Status']}</td>
				<td id = 'Colm{$i}_5'>{$rowData1['Assigned_Staff']}</td>
				<td id = 'Colm{$i}_6'>{$rowData1['date_val']}</td>
				<td id = 'Colm{$i}_7'>
					<button type = 'submit' name ='dets1' onclick ='issueDets({$rowData1['Issue_No']})'>See Details</button>
					<i class = 'fad fa-arrow-right hiddenArrow'></i>
				</td>
			</tr>
			";
			$_SESSION['rowNumbers'] = $i;


			echo $table;
		}
		echo "<input type='text' id ='rowNO' value = '{$_SESSION['rowNumbers']}' style ='display:none;'>"	;
	}
	else {
		echo "<p>You have not reported any issue yet. If any reported issue is not visible, check your archived or contact your state admin</p>";
	}		
}

// adding new pre define issue From page : tracking-page2.php, tracking-page3.php
else if (isset($_POST['addIssue'])) {
	require 'Includes/database.php';
	$issueName = $_POST['newIssue'];
	$dept = $_POST['selcDept'];
	$pageNumber = $_POST['pageNum2'];
	$sql = "INSERT INTO issueoption (issue_topic,dept_cat) VALUES ('$issueName','$dept')";
	mysqli_query($conn,$sql);
	header("Location:tracking_page".$pageNumber.".php");
	exit();
}
//removing the staff registered succes msg From page : tracking-page2.php, tracking-page3.php
else if (isset($_POST['delSess'])) {
	session_start();
	unset($_SESSION['errors2']);
	unset($_SESSION['tempPass']);
	unset($_SESSION['mail']);
	unset($_SESSION['uname']);
	unset($_SESSION['new_pos']);
	unset($_SESSION['stateVal']);
	unset($_SESSION['facilValue']);
	
}

//updating an issue data after reopening or closing an issue from the facility staff From page : issue_detail.php
else if (isset($_POST['secStats'])) {
	require 'Includes/database.php';
	session_start();
	$second_Stats = $_POST['secStats'];
	$issueNum = $_SESSION['ticketNum'];
	$dateVal = getdate(date('U'));

	$date = "$dateVal[year]-$dateVal[mon]-$dateVal[mday]";
	if ($second_Stats == "Reopen") {
		$stats = "Open";
		$sql1 = "UPDATE issue_tracking SET Status = 'unsolved',second_stats = '$stats', date_val = '$date' WHERE Issue_No = $issueNum";
		mysqli_query($conn,$sql1);

	}
	else if ($second_Stats == "Delete") {
		$sql = "DELETE FROM issue_tracking WHERE issue_No = $issueNum";
		mysqli_query($conn,$sql);
	}
	else {
		$stats = $second_Stats;
		$sql1 = "UPDATE issue_tracking SET second_stats = '$stats' WHERE Issue_No = $issueNum";
		mysqli_query($conn,$sql1);
		
	}
	
	unset($_SESSION['ticketNum']);
	echo "issue_history.php";
}

//Filtering for each state on the overhead admin dashbaord From page : tracking-page3.php
else if (isset($_POST['filterState'])) {
	require 'Includes/database.php';
	$state = $_POST['filterState'];
	$sql = "SELECT * FROM facility WHERE state = '$state'";
	$query1 = mysqli_query($conn,$sql);
	if ($query1->num_rows > 0) {
		$u = 0;
		$list = "";
		while ($rowData = $query1->fetch_assoc()) {
			$list = $list.$list;
			$list = "<span class = 'options2'>{$rowData['Facility_Name']}</span>";
			echo $list;
		}
	}
}

//Filtering for each department on the overhead admin dashbaord From page : tracking-page3.php
else if (isset($_POST['advFilterVal'])) {
	require 'Includes/database.php';
	session_start();
	echo 
	'<div class="table">
			<table border="1px">	
				<tr>
					<th><i class="fad fa-hashtag"></i></th>
					<th><i class="fad fa-bug"></i>Issues</th>
					<th><i class="fad fa-hospital"></i>Facility</th>
					<th><i class="fad fa-memo-circle-info"></i>Description</th>
					<th><i class="fad fa-list-check"></i>Status</th>
					<th><i class="fad fa-user-secret"></i>Assigned Staff</th>
					<th><i class="fad fa-user-nurse"></i>Complaint</th>
					<th><i class="fad fa-address-book"></i>Contact Information</th>
					<th><i class="fad fa-comments"></i>ChatBox</th>
					<th><i class="fad fa-calendar-days"></i>Date of Submission</th>
				</tr>
			';

	$sql1 = "SELECT * FROM users WHERE User_Name = '{$_SESSION['sessionuname4']}'";
	$query1 = mysqli_query($conn,$sql1);
	$data1 = $query1->fetch_assoc();
		
	$sql2 = "SELECT * FROM issue_tracking WHERE second_stats = 'Open' ORDER BY date_val DESC";
	$query2 = mysqli_query($conn,$sql2);
	$_SESSION['matched'] = 0;
	$selcState = $_POST['advFilterVal'];
	$selcDept = $_POST['advFilterVal2'];
	$selcDept = str_replace("M","M&E",$selcDept);
	$selcDept = $selcDept." Department";
	if ($query2->num_rows > 0) {
		$i = 0;
		$table = "";
		while ($data2 = $query2->fetch_assoc()) {
			$issueFacil = $data2['Facility'];
			$sql3 = "SELECT * FROM facility WHERE Facility_No = $issueFacil";
			$query3 = mysqli_query($conn,$sql3);
			$data3 = $query3->fetch_assoc();
			if ($selcState == $data3['state']) {
				if ($selcDept != "NULL Department") {
					$sql4 = "SELECT * FROM issueoption WHERE issue_topic = '{$data2['Issue']}'";
					$query4 = mysqli_query($conn,$sql4);
					$data4 = $query4->fetch_assoc();
					if ($data4['dept_cat'] == $selcDept) {
						
						$table = $table.$table;
						$i++;
						
						$table =  
						"<tr id = 'tRow$i' class = 'tRow'>
							<td id = 'tCol{$i}_1'>$i</td>
							<td id = 'tCol{$i}_2'>{$data2['Issue']}</td>
							<td>
								<span id = 'tCol{$i}_3'>{$data3['Facility_Name']}</span>
							</td>
							<td id = 'tCol{$i}_4'>{$data2['Description']}</td>
							<td>
								<span id = 'tCol{$i}_5'>{$data2['Status']}</span>
							</td>
							<td id = 'tCol{$i}_6'>{$data2['Assigned_Staff']}</td>
							<td id = 'tCol{$i}_7'>{$data2['reporter']}</td>
							<td id = 'tCol{$i}_8'>{$data2['contact_Info']}</td>
							<td> <button id = 'btnCol{$i}_1' value = '$i'>Open ChatBox <i class = 'fad fa-arrow-up-right-from-square'></i> </button> </td>
							<td id = 'tCol{$i}_9'>{$data2['date_val']}</td>
							<td id = 'tCol{$i}_10' style = 'display:none;'>{$data2['Facility']}</td>
							<td id = 'tCol{$i}_11' style = 'display:none;'>{$data2['Issue_No']}</td>
						</tr>";

						
						echo $table;	
					}
					else {
						//echo $data2['Issue'].",";
					}
				}
				else {
					$table = $table.$table;
					$i++;
					
					$table =  
					"<tr id = 'tRow$i' class = 'tRow'>
						<td id = 'tCol{$i}_1'>$i</td>
						<td id = 'tCol{$i}_2'>{$data2['Issue']}</td>
						<td>
							<span id = 'tCol{$i}_3'>{$data3['Facility_Name']}</span>
						</td>
						<td id = 'tCol{$i}_4'>{$data2['Description']}</td>
						<td>
							<span id = 'tCol{$i}_5'>{$data2['Status']}</span>
						</td>
						<td id = 'tCol{$i}_6'>{$data2['Assigned_Staff']}</td>
						<td id = 'tCol{$i}_7'>{$data2['reporter']}</td>
						<td id = 'tCol{$i}_8'>{$data2['contact_Info']}</td>
						<td> <button id = 'btnCol{$i}_1' value = '$i'>Open ChatBox <i class = 'fad fa-arrow-up-right-from-square'></i> </button> </td>
						<td id = 'tCol{$i}_9'>{$data2['date_val']}</td>
						<td id = 'tCol{$i}_10' style = 'display:none;'>{$data2['Facility']}</td>
						<td id = 'tCol{$i}_11' style = 'display:none;'>{$data2['Issue_No']}</td>
					</tr>";

					
					echo $table;
				}

			}
		}
		echo "</table>
		</div>";
	}		
}
//Checking Temp Password
else if (isset($_POST['TempPass'])) {
	require 'Includes/database.php';
	session_start();

	$pass = $_POST['TempPass'];
	$sql = "SELECT * FROM users WHERE password = '{$pass}'";
	$query1 = mysqli_query($conn,$sql);
	if ($query1->num_rows > 0) {
		$data1 = $query1->fetch_assoc();
		echo 
		"<div class = 'inputContainer'>
			<span class = 'label'>
				<i class = 'fad fa-user'></i>
				<p></p>
			</span>
			<span class = 'input'>
				<input type = 'text' name = 'username1' value ='{$data1['User_Name']}' style = 'padding-left:40px; width:80%;'>
			</span>
		</div>

		<div class = 'inputContainer'>
			<span class = 'label' onclick = 'inputFocus(1)' id = 'label1'>
				<i class = 'fad fa-lock-keyhole'></i>
				<p>Enter Your Password</p>
			</span>
			<span class = 'input'>
				<input type = 'password' name = 'pass3' id = 'input1' onfocus = 'inputFocus(1)'>
				<i class='fad fa-eye' onclick='showPass()'></i>
			</span>
		</div>

		<div class='buttonContainer'>
			<button type='submit' name='SignUp'>Login <i class='fad fa-right-to-bracket'></i></button>	
		</div>
		";

	}
}
//
else if (isset($_POST['SignUp'])) {
	require 'Includes/database.php';
	$passVal = $_POST['pass3'];
	$username = $_POST['username1'];
	$sql = "UPDATE users SET password = '{$passVal}' WHERE User_Name = '{$username}'";
	mysqli_query($conn,$sql);
	header("Location:index.php");
	exit();

}

//backEnd Chat
//Check for chat when loading page
else if (isset($_POST['msgKey'])) {
	require 'Includes/database.php';
	$msgKey = $_POST['msgKey'];
	loadingChats($msgKey);
}
//send new msg
else if (isset($_POST['msg_key'])) {
	require 'Includes/database.php';
	$msg_key = $_POST['msg_key'];
	$msg_length = $_POST['msg_length'];
	$msg = $_POST['msg'];
	$troubleshooter = $_POST['troubleshooter'];
	$reporter = $_POST['reporter'];
	$sender_id = $_POST['senderID'];
	$sql1 = "SELECT * FROM messages WHERE msg_key = '$msg_key'";
	$query1 = mysqli_query($conn,$sql1);
	$stmt = mysqli_stmt_init($conn);
	if ($query1->num_rows > 0) {
		$data1 = $query1->fetch_assoc();
		$storedMsg = $data1['message'];
		$oldMsgLength = substr_count($storedMsg,":");
		if ($msg_length < $oldMsgLength) {
			$msg_length = $oldMsgLength++;
		}
		$newMsg = $storedMsg.',"'.$sender_id.$msg_length.'" : "'.$msg.'"';
		$sql2 = "UPDATE messages SET message = ? WHERE msg_key = ?";
		
		if (!mysqli_stmt_prepare($stmt,$sql2)) {
			echo "mysqlerror2";
		}
		else{
			mysqli_stmt_bind_param($stmt,"ss",$newMsg,$msg_key);
			mysqli_stmt_execute($stmt);
			echo "Updated";
		}
	}
	else{
		$sql2 = "INSERT INTO messages (msg_key,message,issue_reporter,troubleshooter) VALUES (?,?,?,?)";
		
		if (!mysqli_stmt_prepare($stmt,$sql2)) {
			echo "sqlerror1";
		}
		else{
			$msg_obj = '{"'.$sender_id.$msg_length.'" : "'.$msg.'"';
			mysqli_stmt_bind_param($stmt,"ssss",$msg_key,$msg_obj,$reporter,$troubleshooter);
			mysqli_stmt_execute($stmt);
			echo "Inerted";
		}
	}
}
else if (isset($_POST['message_key'])) {
	require 'Includes/database.php';

	$key = $_POST['message_key'];
	$frontMsgLen = $_POST['message_length'];
	$sql0 = "SELECT * FROM messages WHERE msg_key = '$key'";
	$query0 = mysqli_query($conn,$sql0);
	if ($query0->num_rows > 0) {
		$data0 = $query0->fetch_assoc();
		$databaseLen = substr_count($data0['message'],":");
		if ($frontMsgLen < $databaseLen) {
			loadingChats($key);
		}
		else{
			echo "no new message";
		}
	}
	else{
		echo "no new message";
	}
	

}
else{
	echo "last output";	
}
function loadingChats($key) {
	require 'Includes/database.php';
	$sql1 = "SELECT * FROM messages WHERE msg_key = '$key'";
	$query1 = mysqli_query($conn,$sql1);
	if ($query1->num_rows > 0) {
		$data1 = $query1->fetch_assoc();
		echo $data1['message'];
	}
	else{
		echo "no message";
	}
}
?>