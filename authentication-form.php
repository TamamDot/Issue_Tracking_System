<?php 
	if (isset($_POST['signin'])) {
		require 'Includes/database.php';
		session_start();

		//checking if any input field is empty
		if ($_POST['uname1'] == '') {
			if (isset($errorList)) {
				array_push($errorList,1);
			}
			else {
				$errorList = array(1);
			}
		}
		else {
			$fname = $_POST['uname1'];
		}

		if ($_POST['pass1'] == '') {
			if (isset($errorList)) {
				array_push($errorList,2);
			}
			else {
				$errorList = array(2);
			}
		}
		else {
			$password = $_POST['pass1'];
		}		

		if (!empty($errorList)) {
			$_SESSION['errors'] = $errorList;
			header("Location:index.php");
			exit();
		}
		else {
			$_SESSION['errors'] = "";
		}

		//Username validation
		$sql1 = "SELECT * FROM users WHERE User_Name = ?";
		$stmt = mysqli_stmt_init($conn);
		
		if (!mysqli_stmt_prepare($stmt,$sql1)) {	
			header("Location:index.php?sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt,'s',$fname);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$rowNum1 = mysqli_stmt_num_rows($stmt);
		}

		if ($rowNum1 < 1) {
			if (isset($errorList)) {
				array_push($errorList,3);
			}
			else {
				$errorList = array(3);
			}
			$_SESSION['errors'] = $errorList;
			header("Location:index.php");
			exit();
		}
		else{
			//Password validation
			$sql2 = "SELECT * FROM users WHERE User_Name = ?";
			if (!mysqli_stmt_prepare($stmt,$sql2)) {
				header("Locatoin:index.php?sqlerror");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt,'s',$fname);
				mysqli_stmt_execute($stmt);
				$output1 = mysqli_stmt_get_result($stmt);
				$rowData1 = mysqli_fetch_assoc($output1);
				if ($rowData1['password'] == $password) {
					$_SESSION['errors'] = [];
					$_SESSION['user_pos'] = $rowData1['Department'];
					$_SESSION['sessionuname1'] = $fname;
					$_SESSION['sessionfname1'] = $rowData1['Fullname'];
					header("Location:complaint_form.php");
					exit();
					// posCheck($rowData1['Position'],$fname,$rowData1['Fullname']);
				
				}
				else if ($rowData1 != $password) {
					if (isset($errorList)) {
						array_push($errorList,4);
					}
					else {
						$errorList = array(4);
					}
					$_SESSION['errors'] = $errorList;
					header("Location:index.php");
					exit();
				}
			}
		}
	}
		
	//redirecting to different dashboards based on user position
	function posCheck($position,$user,$mainName){
		if ($position == 'Overhead Admin') {
			$_SESSION['sessionuname4'] = $user;
			$_SESSION['sessionfname4'] = $mainName;
			header("Location:tracking_page3.php");
			exit();
		}
		else if ($position == 'State Admin' || $position == "HR") {
			$_SESSION['sessionuname3'] = $user;
			$_SESSION['sessionfname3'] = $mainName;
			header("Location:tracking_page2.php");
			exit();
		}
		else if ($position == 'HI Staff' || $position == 'm&e staff' || $position == 'Logistic Staff' ||  $position == 'Operation Staff' || $position == 'Inventory Staff' ) {
			$_SESSION['sessionuname2'] = $user;
			$_SESSION['sessionfname2'] = $mainName;
			header("Location:tracking_page.php");
			exit();
		}
		else if ($position == 'Facility Staff') {
			$_SESSION['sessionuname1'] = $user;
			$_SESSION['sessionfname1'] = $mainName;
			header("Location:complaint_form.php");
			exit();
		}
		else {
			header("Location:index.php?invalidusers{$position}");
			exit();
		}
	}


?>