<?php 
	session_start();
	require '../Includes/database.php';
	$sql1 = "SELECT * FROM tool_list";
	$query1 = mysqli_query($conn,$sql1);
	$a = 1;
	if ($query1->num_rows > 0) {
		while ($data1 = $query1->fetch_assoc()) {
			$tempDate = $data1['entry_date'];
			$dateArray = explode("-",$tempDate);
			$day = $dateArray[2];
			$month = $dateArray[1];
			$month = intval($month);
			$year = $dateArray[0];

			$monthArray = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
			$textDate = $day." ".$monthArray[$month-1]." ".$year;
			echo 
			"<script>
				sessionStorage.setItem('tool_Name$a','{$data1['Tool_Name']}');
				sessionStorage.setItem('orgAmt$a','{$data1['Original_Amount']}');
				sessionStorage.setItem('distAmt$a','{$data1['Amount_Distributed']}');
				sessionStorage.setItem('dateVal$a','{$textDate}');
				sessionStorage.setItem('toolNumber','$a');
			</script>";
			$a++;
		}
	}
?>