<?php 
require'../Includes/database.php';
session_start();
function htmlContent($tools,$monthName){
	echo 
	'
		<div class="middleSect1">
			<div class="left">
				<div class="banner">
					<div class="top">
						<p id = "toolView">Overview</p>
						<div class="dropDown">
							<div class="selcBtn">
								<p>'.$_SESSION['selcTool'].'</p>
								<i class="fas fa-chevron-down"></i>
							</div>
							<div class="list">
								'.$tools.'
							</div>
						</div>
					</div>
					<div class="middleCont1">
						<i class="fad fa-toolbox"></i>
						<p>'.$_SESSION['selcTool'].'</p>
					</div>
					<div class="middleCont2">
						<div class="statsElem">
							<p> 
								<i class="fad fa-hashtag"></i>
								Initial Quantity
							</p>
							<p>'.$_SESSION['selcOrgAmt'].'</p>
							<p>Recorded Date: '.$monthName.'</p>
						</div>

						<div class="statsElem">
							<p> 
								<i class="fad fa-hashtag"></i>
								Distributed Quantity
							</p>
							<p>'.$_SESSION['selcDistAmt'].'</p>
							<p>Recorded Date: '.$monthName.'</p>
						</div>

						<div class="statsElem">
							<p> 
								<i class="fad fa-hashtag"></i>
								Current Inventory
							</p>
							<p>'.$_SESSION['crtAmt'].'</p>
							<p>Recorded Date: '.$monthName.'</p>
						</div>
					</div>
				</div>
			</div>

			<div class="right">
				<div class="banner1">
					<div class="iconSect">
						<span>
							<i class="fad fa-hospital"></i>
						</span>
					</div>
					<div class="textSect">
						<p>Recent Facility To Receive To Tool</p>
						<p>'.$_SESSION['facility_Name'].'</p>
					</div>
				</div>
				<div class="banner2">
					<div class="topCont">
						<div class="iconSect">
							<span>
								<i class="fad fa-person-dolly"></i>
							</span>
						</div>
						<p>'.$_SESSION['selcTool'].'</p>
					</div>
					<div class="bottomCont">
						<p>Amount Of Tools in Facility</p>
						<p>'.$_SESSION['facilDistAmt'].'</p>
						<p>Recorded Date : May</p>
					</div>
				</div>
			</div>
		</div>
		<div class="middleSect2">
			<div class="stateStats">
				<div class="iconSect">
					<span>
						<i class="fad fa-truck-container"></i>
					</span>
				</div>
				<div class="innerBanner">
					<div class="topBanner">
						<p>Kano State</p>
						<p>Facility : 43</p>
					</div>
					<div class="middleBanner">
						<span class="label">
							<p>Amount Across Facilities</p>
							<p class = "statePerc">'.$_SESSION['statePer0'].'%</p>
						</span>
						<span class="perBar">
							<span class="percentage">
								
							</span>
						</span>
					</div>
					<div class="bottomBanner">
						<p>Recorded Date : August</p>
					</div>
				</div>
			</div>

			<div class="stateStats">
				<div class="iconSect">
					<span>
						<i class="fad fa-truck-container"></i>
					</span>
				</div>
				<div class="innerBanner">
					<div class="topBanner">
						<p>Bauchi State</p>
						<p>Facility : 31</p>
					</div>
					<div class="middleBanner">
						<span class="label">
							<p>Amount Across Facilities</p>
							<p class = "statePerc">'.$_SESSION['statePer1'].'%</p>
						</span>
						<span class="perBar">
							<span class="percentage">
								
							</span>
						</span>
					</div>
					<div class="bottomBanner">
						<p>Recorded Date : August</p>
					</div>
				</div>
			</div>

			<div class="stateStats">
				<div class="iconSect">
					<span>
						<i class="fad fa-truck-container"></i>
					</span>
				</div>
				<div class="innerBanner">
					<div class="topBanner">
						<p>Jigawa State</p>
						<p>Facility : 17</p>
					</div>
					<div class="middleBanner">
						<span class="label">
							<p>Amount Across Facilities</p>
							<p class = "statePerc">'.$_SESSION['statePer2'].'%</p>
						</span>
						<span class="perBar">
							<span class="percentage">
								
							</span>
						</span>
					</div>
					<div class="bottomBanner">
						<p>Recorded Date : August</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class = "requestBanner">
		<div class = "headSect">
			<i class = "fad fa-building-memo" ></i>
			<p>Request List</p>
		</div>

		<div class = "slideCont">
			<div class = "container">
				<span class = "slider">

				</span>
				<div class = "slideOpt">
					<span class = "Opt" id = "opt1">
						<p>All Request</p>
					</span>

					<span class = "Opt" id = "opt2">
						<p>Unread Request</p>
					</span>
				</div>
			</div>
		</div>

		<div class = "requestCont">
			<div class = "chatPreviewBox">
				<div class = "senderImg">
					<i class = "fad fa-user-circle"></i>
				</div>
				<div class = "preview">
					<p>Abdulrahaman Abdulrahaman</p>
					<p>HTS Register</p>
				</div>
				<span class = "previewIcon">
					<i class = "far fa-envelope"></i>
				</span>
			</div>

			<div class = "chatPreviewBox">
				<div class = "senderImg">
					<i class = "fad fa-user-circle"></i>
				</div>
				<div class = "preview">
					<p>Musa Ibrahim</p>
					<p>Client Intake Form</p>
				</div>
				<span class = "previewIcon">
					<i class = "far fa-envelope"></i>
				</span>
			</div>

			<div class = "chatPreviewBox">
				<div class = "senderImg">
					<i class = "fad fa-user-circle"></i>
				</div>
				<div class = "preview">
					<p>Aminu Mushab</p>
					<p>Pharmacy Order Sheet</p>
				</div>
				<span class = "previewIcon">
					<i class = "far fa-envelope"></i>
				</span>
			</div>

			<div class = "chatPreviewBox">
				<div class = "senderImg">
					<i class = "fad fa-user-circle"></i>
				</div>
				<div class = "preview">
					<p>Isa Abubakar</p>
					<p>Record Booklet</p>
				</div>
				<span class = "previewIcon">
					<i class = "far fa-envelope"></i>
				</span>
			</div>

			<div class = "chatPreviewBox">
				<div class = "senderImg">
					<i class = "fad fa-user-circle"></i>
				</div>
				<div class = "preview">
					<p>Emmanuel Abjebo</p>
					<p>PMTCT Record Form</p>
				</div>
				<span class = "previewIcon">
					<i class = "far fa-envelope"></i>
				</span>
			</div>

			<div class = "chatPreviewBox">
				<div class = "senderImg">
					<i class = "fad fa-user-circle"></i>
				</div>
				<div class = "preview">
					<p>Ado Usman</p>
					<p>Another Form</p>
				</div>
				<span class = "previewIcon">
					<i class = "far fa-envelope"></i>
				</span>
			</div>

			<span class = "dot"></span>
		</div>
	</div>
	';
}

function htmlContent2($toolname_val,$toolID,$org_Amt,$dist_amt,$rowElems,$perc1,$perc2,$perc3) {
	echo 
	'
	<div class="docBg">
		<div class="docPaperCont">
			<div class="docPaper">
				<div class="topSect">
					<div class="left">
						<p>Administrator</p>
						<p>Dashboard</p>
					</div>

					<div class="right">
						<p>Naeem Bashir</p>
						<i class="fad fa-user-circle"></i>
					</div>
				</div>
			</div>
			<div class="docPaper">
				<div class="topSect">
					<div class="left">
						<p>Administrator</p>
						<p>Dashboard</p>
					</div>

					<div class="right">
						<p>Naeem Bashir</p>
						<i class="fad fa-user-circle"></i>
					</div>
				</div>
				<div class="docDetails">
					<div class="header">
						<div class="invenInfo">
							<p>Tool Documentation</p>
							<span class="textBar">
								<span>
									<p>Tool Name </p>
								</span>
								<span>
									<p>'.$toolname_val.'</p>
								</span>
							</span>
							<span class="textBar">
								<span>
									<p>Original Amount</p>
								</span>
								<span>
									<p>'.$org_Amt.'</p>
								</span>
							</span>
							<span class="textBar">
								<span>
									<p>Distributed Amount</p>
								</span>
								<span>
									<p>'.$dist_amt.'</p>
								</span>
							</span>
						</div>

						<div class="chartCont">
							<div class="chart">
								 <canvas>
								 	
								 </canvas>
							</div>
							<div class="label">
								<div class="labelText">
									<p>Kano</p>
									<span class="keyBtn"></span>
								</div>
								<div class="labelText">
									<p>Bauchi</p>
									<span class="keyBtn"></span>
								</div>
								<div class="labelText">
									<p>Jigawa</p>
									<span class="keyBtn"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="tableCont2">
						<table border="2px">
							<tr>
								<th>Facility</th>
								<th>Amount</th>
								<th>Distributor</th>
								<th>Date</th>
								<th>Authorized Personel</th>
							</tr>
							'.$rowElems.'
						</table>
					</div>
				</div>
			</div>
			<input type = "text" id = "state1" value = "'.$perc1.'">
			<input type = "text" id = "state2" value = "'.$perc2.'">
			<input type = "text" id = "state3" value = "'.$perc3.'">
		</div>
		<div class = "navBackCont">
			<button id = "returnBtn"> 
				<p>Return</p>
				<i class = "fad fa-turn-down-left"></i>
			</button>
		</div>
	</div>
	';
}
if (isset($_POST['dashboardNum']) || isset($_POST['selc_toolName']) || isset($_POST['inven_doc'])) {
	if (isset($_POST['dashboardNum'])) {
		if ($_POST['dashboardNum'] == 1) {
			$sql1= "SELECT * FROM tool_list";
			$query1 = mysqli_query($conn,$sql1);
			require 'tool_tracking'.$_POST['dashboardNum'].".php";
			$toolList = "";
			$i = 1;
			if ($query1->num_rows > 0) {
				while ($data1 = $query1->fetch_assoc()) {
					if ($i == 1) {
						$_SESSION['toolID'] = $data1['Tool_ID'];
						$_SESSION['selcTool'] = $data1['Tool_Name'];
						$_SESSION['selcOrgAmt'] = $data1['Original_Amount'];
						$_SESSION['selcDistAmt'] = $data1['Amount_Distributed'];
						$_SESSION['crtAmt'] = $data1['Original_Amount'] - $data1['Amount_Distributed'];
						$DateArray = explode("-",$data1['entry_date']);
						$monthNum = $DateArray[1];
						$monthNum = intval($monthNum);
						$monthArray = array("January","February","March","April","May","June","July","August","September","October","November","December");
					}
					else {
						$newList = "
						<div class='listOpt'>
							<p>{$data1['Tool_Name']}</p>
						</div>";
						$toolList = $toolList.$newList;
					}		
					$i++;
				}	
			}

			$sql2 = "SELECT * FROM distribution_table WHERE tool_ID = '{$_SESSION['toolID']}' ORDER BY requested_date DESC";
			$query2 = mysqli_query($conn,$sql2);
			if ($query2->num_rows > 0) {
				$j = 0;
				while ($data2 = $query2->fetch_assoc()) {
					$j++;
					if ($j == 1) {
						$_SESSION['facility_Name'] = $data2['Facility'];
						$_SESSION['facilDistAmt'] = $data2['amount'];
					}					
				}
			}
			else {
				$_SESSION['facility_Name'] = "No Recent Facility Received This Tool";
				$_SESSION['facilDistAmt'] = "<i style = 'color:rgba(0,0,0,.3); text-shadow:none'>000</i>";
			}

			$states = array("Kano","Bauchi","Jigawa");
			for ($t = 0; $t < count($states); $t++) {
				$selcState = $states[$t];
				$sql3 = "SELECT * FROM distribution_table WHERE State = '$selcState' AND tool_ID = '{$_SESSION['toolID']}'";
				$query3 = mysqli_query($conn,$sql3);
				$distrAmt = 0;
				if ($query3->num_rows > 0) {
					while ($data3 = $query3->fetch_assoc()) {
						$distrAmt = $distrAmt + $data3['amount'];
					}

				}
				$_SESSION['statePer'.$t] = floor(($distrAmt / $_SESSION['selcDistAmt']) * 100);
				
			}
			htmlContent($toolList,$monthArray[$monthNum - 1]);
		}	
		else {
			require 'tool_tracking'.$_POST['dashboardNum'].".php";
		}
	}
	else if (isset($_POST['selc_toolName'])) {
		$sql1= "SELECT * FROM tool_list";
		$query1 = mysqli_query($conn,$sql1);
		require 'tool_tracking1.php';
		$toolList = "";
		if ($query1->num_rows > 0) {
			while ($data1 = $query1->fetch_assoc()) {
				if ($_POST['selc_toolName'] == $data1['Tool_Name']) {
					$_SESSION['toolID'] = $data1['Tool_ID'];
					$_SESSION['selcTool'] = $data1['Tool_Name'];
					$_SESSION['selcOrgAmt'] = $data1['Original_Amount'];
					$_SESSION['selcDistAmt'] = $data1['Amount_Distributed'];
					$_SESSION['crtAmt'] = $data1['Original_Amount'] - $data1['Amount_Distributed'];
					$DateArray = explode("-",$data1['entry_date']);
					$monthNum = $DateArray[1];
					$monthNum = intval($monthNum);

					$monthArray = array("January","February","March","April","May","June","July","August","September","October","November","December");
				}
				else {
					$newList = "
					<div class='listOpt'>
						<p>{$data1['Tool_Name']}</p>
					</div>";
					$toolList = $toolList.$newList;
				}		
			}	
		}

		$sql2 = "SELECT * FROM distribution_table WHERE tool_ID = '{$_SESSION['toolID']}' ORDER BY requested_date DESC";
		$query2 = mysqli_query($conn,$sql2);
		if ($query2->num_rows > 0) {
			$j = 0;
			while ($data2 = $query2->fetch_assoc()) {
				$j++;
				if ($j == 1) {
					$_SESSION['facility_Name'] = $data2['Facility'];
					$_SESSION['facilDistAmt'] = $data2['amount'];
				}					
			}
		}
		else {
			$_SESSION['facility_Name'] = "No Recent Facility Received This Tool";
			$_SESSION['facilDistAmt'] = "<i style = 'color:rgba(0,0,0,.3); text-shadow:none'>000</i>";
		}

		$states = array("Kano","Bauchi","Jigawa");
		for ($t = 0; $t < count($states); $t++) {
			$selcState = $states[$t];
			$sql3 = "SELECT * FROM distribution_table WHERE State = '$selcState' AND tool_ID = '{$_SESSION['toolID']}'";
			$query3 = mysqli_query($conn,$sql3);
			$distrAmt = 0;
			if ($query3->num_rows > 0) {
				while ($data3 = $query3->fetch_assoc()) {
					$distrAmt = $distrAmt + $data3['amount'];
				}

			}
			$_SESSION['statePer'.$t] = floor(($distrAmt / $_SESSION['selcDistAmt']) * 100);
			
		}
		htmlContent($toolList,$monthArray[$monthNum - 1]);
	}	
	else if (isset($_POST['inven_doc'])) {
		$docTool = $_POST['inven_doc'];
	
		$sql1 = "SELECT * FROM tool_list WHERE Tool_Name = '$docTool'";
		$query1 = mysqli_query($conn,$sql1);
		if ($query1->num_rows > 0) {
			$data1 = $query1->fetch_assoc();
			$tool_ID = $data1['Tool_ID'];
			$originalAmt = $data1['Original_Amount'];
			$amt_dist = $data1['Amount_Distributed'];
		}

		$sql2 = "SELECT * FROM distribution_table WHERE tool_ID = '$tool_ID'";
		$query2 = mysqli_query($conn,$sql2);
		$table_row = "";
		$state1Total = 0;
		$state2Total = 0;
		$state3Total = 0;
		$monthArray = array("January","February","March","April","May","June","July","August","September","October","November","December");
		if ($query2->num_rows > 0) {
			while ($data2 = $query2->fetch_assoc()) {
				$dist_facility = $data2['Facility'];
				$amount_dist = $data2['amount'];
				$dist_pers = $data2['Distributor'];
				$raw_date = $data2['received_date'];
				$auth_pers = "Joy Shallangwa";
				$sep_date = explode("-",$raw_date);
				$month_num2 = intval($sep_date[1]);

				$month_num2 = $month_num2 - 1;
				$month_text = $monthArray[$month_num2];
				$dateText = $sep_date[2]." ".$month_text." ".$sep_date[0];
				$new_row = 
				"<tr>
					<td>$dist_facility</td>
					<td>$amount_dist</td>
					<td>$dist_pers</td>
					<td>$dateText</td>
					<td>$auth_pers</td>
				</tr>";

				if ($data2['State'] == "Kano") {
					$state1Total += $data2['amount'];
				}
				else if ($data2['State'] == "Bauchi") {
					$state2Total += $data2['amount'];
				}
				else if ($data2['State'] == "Jigawa") {
					$state3Total += $data2['amount'];
				}
				$table_row = $table_row.$new_row;
			}
			if ($state1Total > 0) {
				$state1Perc = ($amt_dist / $state1Total);
				$state1Perc = (100 / $state1Perc);
				
			}
			else {
				$state1Perc = 0;
			}

			if ($state2Total > 0) {
				$state2Perc = ($amt_dist / $state2Total);
				$state2Perc = (100 / $state2Perc);
			}
			else {
				$state2Perc = 0;
			}

			if ($state3Total > 0) {
				$state3Perc = ($amt_dist / $state3Total);
				$state3Perc = (100 / $state3Perc);
				
				
			}
			else {
				$state3Perc = 0;
			}

			$statesTotal = $state1Perc + $state2Perc + $state3Perc;
			if ($statesTotal > 100) {
				$state1Perc = floor($state1Perc);
				$state2Perc = floor($state2Perc);
				$state3Perc = floor($state3Perc);
			}
			else {
				$state1Perc = round($state1Perc);
				$state2Perc = round($state2Perc);
				$state3Perc = round($state3Perc);
			}
		}


		htmlContent2($docTool,$tool_ID,$originalAmt,$amt_dist,$table_row,$state1Perc,$state2Perc,$state3Perc);
	}
}
else {
	echo "ssl";
}
?>