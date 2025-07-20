<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Issue Details</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo1.png">
	<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.5.1/css/pro.min.css">
	<link rel="stylesheet" type="text/css" href="font.css">
</head>
<?php 
	session_start();
	if (!$_SESSION['ticketNum']) {
		header("Location:issue_history.php");
		exit();
	}
?>
<style type="text/css">
	*{
		margin:0px;
	}
	html,body{
		height:100%;
		min-height:400px;
	}
	body{
		background-image:url('bgimg5.jpg');
		background-color:cornflowerblue;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	form{
		width:100%;
		height:100%;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
	}
	.topBar{
		width:100%;
		height:15%;
		max-height:90px;
		display:flex;
		align-items:center;
		justify-content:space-between;
		backdrop-filter:blur(9px);
		background-color:rgba(117, 177, 189,.4);
		box-shadow:0px 3px 5px rgba(0, 0, 0, .6);
	}
	.topBar .sect1{
		width:30%;
		height:100%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		text-transform:capitalize;
	}
	.topBar .sect1 img{
		width:35%;
		margin:0px 20px;
	}
	.topBar .sect1 p{
		font-size:23px;
		font-weight:bolder;
		font-family:'Comfortaa',sans-serif;
	}
	.topBar .sect2{
		width:40%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.topBar .sect2 p{
		font-size:30px;
		font-family:'Montserrat';
	}
	.topBar .sect2 i{
		font-size:40px;
		color:white;
		margin-right:20px;
	}
	.topBar .sect3{
		width:30%;
		height:100%;
		display:flex;
		justify-content:flex-end;
		align-items:center;
	}

	.topBar .sect3 button{
		width:35%;
		height:50%;
		margin-right:30px;
		border-radius:10px;
		border:none;
		font-size:16px;
		font-family:'Montserrat',sans-serif;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		box-shadow:-2px 2px 5px rgba(0, 0, 0, .5);
		transition:all .6s ease;
		cursor:pointer;
	}
	.topBar .sect3 button:hover{
		background-color:#60857b;
		color:white;
	}
	.content{
		width:100%;	
		height:80%;
		display:flex;
		flex-wrap:wrap;
		background-color:#e6e6e6;
		overflow-y:scroll;
	}
	.top{
		width:100%;
		height:15%;
		max-height:71px;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		flex-direction:column;
		font-size:25px;
		font-family:'Courier',sans-serif;
		font-weight:bolder;
	}
	.top span:nth-child(1){
		width:100%;
		height:93%;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.top span:nth-child(2){
		width:35%;
		transform:translateY(-100%);
		height:7%;
		border-radius:10px;
		background-color:#138673;
	}
	.top i{
		margin-right:20px;
		color:#476685;
	}
	.middle{
		width:100%;
		height:80%;
		display:flex;
		justify-content:space-between;
	}
	.dets{
		width:50%;
		height:100%;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
	}
	.dets .sect1{
		width:100%;
		height:15%;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		text-transform:capitalize;
	}
	.dets .sect1 span{
		width:25%;
		height:70%;
		font-size:12px;
		font-family:'Nunito',sans-serif;
		display:flex;
		justify-content:center;
		align-items:center;
		border-radius:10px;
		box-shadow:0px 0px 5px 2px rgba(0, 0, 0, .5);
	}
	.dets .sect1 span:nth-child(1){
		background-color:rgba(82, 152, 152,.6);
	}
	.dets .sect1 span:nth-child(2){
		background-color:rgba(206, 139, 105,.6);
	}
	.dets .sect1 i {
		margin-left:10px;
		font-size:16px;
		color:#003d4d;
	}
	.dets .sect1 span:nth-child(3){
		width:38%;
		background-color:rgba(103, 133, 193,.6);
	}
	.dets .sect2 {
		width:100%;
		height:70%;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.descCont{
		width:90%;
		height:95%;
		box-shadow:0px 0px 5px 3px rgba(0, 0, 0, .4);
		border-radius:10px;
		display:flex;
		justify-content:flex-start;
		align-items:flex-start;
		font-family:'Comfortaa',sans-serif;
		flex-direction:column;
	}
	.descCont p:nth-child(1){
		margin:10px 20px;
		font-weight:bolder;
	}
	.descCont p:nth-child(2){
		font-size:12px;
		margin-left:20px;
		text-transform:capitalize;
	}
	.dets .sect3{
		width:100%;
		height:15%;
		display:flex;
		justify-content:space-between;
		align-items:center;
	}
	.sect3 .left{
		width:40%;
		height:100%;
		display:flex;
		flex-wrap:wrap;
		align-items:center;
	}
	.left .leftList{
		width:90%;
		max-height:300px;
		height:0%;
		opacity:0%;
		margin-left:40px;
		transform:translateY(-140%);
		background-color:rgba(60, 134, 159,.7);
		transition:all .6s ease;
		border-radius:10px;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
		overflow-y:hidden;
	}
	.leftList .list{
		width:90.5%;
		margin-bottom:-1px;
		height:100%;
		display:flex;
		align-items:center;
		justify-content:flex-start;
		padding-left:20px;
		font-size:15px;
		border:none;
		font-family:'Montserrat',sans-serif;
		transition:all .6s ease;
		cursor:pointer;
	}
	.list i{
		margin-right:10px;
		font-size:20px;
		color:white;
		transition:all .6s ease;
	}
	.list:hover i{
		color:black;
	} 
	.list:nth-child(3):hover i{
		color:#e18484;
	}
	.list:hover{
		background-color:#508091;
		color:white;
	}
	.leftList.active{
		height:250%;
		opacity:100%;
	}
	.left .leftCont{
		width:80%;
		height:100%;
		margin-left:30px;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.sect3 .leftCont .btnIcon{
		width:20%;
		display:flex;
		justify-content:center;
		align-items:center;
		color:white;
		border-radius:10px 0px 0px 10px;
		background-color:#356879;
		height:80%;
	}
	.sect3 .leftCont .btn{
		width:68%;
		display:flex;
		justify-content:space-between;
		align-items:center;
		padding-left:10px;
		border-radius:0px 10px 10px 0px;
		color:#95c1d0;
		font-weight:bolder;
		font-family:'Montserrat',sans-serif;
		font-size:15px;
		border-left:2px solid #2f596a;
		cursor:pointer;
		background-color:#356879;
		height:80%;
	}
	.leftCont .btn span{
		width:90%;
		height:100%;
		display:flex;
		align-items:center;
		justify-content:space-evenly;
	}
	.btn .list:hover{
		background-color:transparent;
		color:#95c1d0;
	}
	.sect3 .leftCont .btn i:nth-child(1) {
		color:white;
		font-size:17px;
	}
	.sect3 .leftCont .btn i:nth-child(2) {
		color:white;
		font-size:16px;
		margin-right:10px;
	}
	.sect3 .middle{
		width:30%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
		font-size:14px;
		font-family:'Hibana',sans-serif;
		text-transform:capitalize;
	}
	.sect3 .middle span{
		width:5%;
		height:17%;
		box-shadow:0px 0px 1.5px 1px rgba(0, 0, 0, .5);
		border-radius:50%;
		margin-right:10px;
		background-color:#1e9f6d;
		
	}
	@keyframes glow{
		0%{
			background-color:#1c7d59;
		}
		50%{
			background-color:#3ddb9f;
		}
		100%{
			background-color:#1c7d59;
		}
	}
	.sect3 .right{
		width:30%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
		font-size:13px;
		font-weight:bolder;
		font-family:'Montserrat',sans-serif;
	}
	.chatCont{
		width:50%;
		height:100%;
		display:flex;
		flex-wrap:wrap;
		align-items:center;
	}
	.chats{
		width:100%;
		height:100%;
		display:flex;
		justify-content:space-betwee;
		align-items:center;
		flex-direction:column;
	}
	.frontBanner{
		width:100%;
		height:100%;
		background-color:blue;
		z-index:2;
		display:flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;
		background-color:rgba(230, 230, 230,.7);
		backdrop-filter:blur(3px);
		transform:translateY(-100%);
	}
	.frontBanner i{
		font-size:60px;
	}
	.frontBanner p{
		width:80%;
		text-align:center;
		margin-top:20px;
		font-size:14px;
		font-family:'Nunito',sans-serif;
		color:rgba(45, 89, 134,.7);
		font-weight:bolder;
		text-transform:capitalize;
	}
	.frontBanner button{
		width:40%;
		height:10%;
		margin-top:20px;
		border:none;
		border-radius:10px;
		font-size:13px;
		font-family:'Comfortaa',sans-serif;
		background-color:#517394;
		color:white;
		transition:all .6s ease;
		cursor:pointer;
		text-transform:capitalize;
	}
	.frontBanner button:hover{
		background-color:#3c73aa;
	}
	.contactName{
		width:100%;
		height:13%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		background-color:#cccccc;
		box-shadow:2px 4px 5px rgba(0, 0, 0, .5);
		border-radius:10px 10px 0px 0px;
		z-index:1;
	}
	.IconLetter{
		width:5.5%;
		height:70%;
		border-radius:50%;
		margin:0px 20px;
		display:flex;
		justify-content:center;
		align-items:center;
		background-color:#f8dfd3;
		box-shadow:0px 0px 5px 2px rgba(0, 0, 0, .5);
	}
	.contactName p{
		color:black;
		font-weight:bolder;
		font-family:'Nunito',sans-serif;
		font-size:16px;
		text-transform:capitalize;
	}
	.IconLetter p{
		font-size:14px;
		font-weight:bolder;
		color:#9a5332;
		font-family:'Hibana',sans-serif;
	}
	.messageCont{
		width:100%;
		height:73%;
		display:flex;
		justify-content:flex-start;
		flex-direction:column;
		overflow-y:scroll;
/*		background-image:url('whatsappBG.png');
		background-size:cover;
		background-position:center;
		background-repeat:no-repeat;*/
		background-color:#e2d4c5;
	}
	.messageCont::-webkit-scrollbar{
		width:10px;
	}
	.messageCont::-webkit-scrollbar-thumb{
		background-color:rgba(107, 79, 51,.5);
	}
	.message1{
		width:45%;
		height:fit-content;		
		display:flex;
		justify-content:flex-start;
		margin-top:20px;
	}
	.message2{
		width:45%;
		height:fit-content;		
		display:flex;
		justify-content:flex-end;
		transform:translateX(122%);
		margin-top:20px;
	}
	.message2:nth-child(1){
	}
	.senderIcon{
		width:10%;
		height:100%;
		max-height:52px;
		display:flex;
		justify-content:center;
		align-items:flex-start;
	}
	.senderIcon span{
		width:100%;
		max-width:20px;
		height:100%;
		max-height:20px;
		border-radius:50%;
		display:flex;
		justify-content:center;
		align-items:center;
		background-color:#f8dfd3;
		box-shadow:0px 0px 5px 2px rgba(0, 0, 0, .5);
		font-size:7px;
		font-weight:bolder;
		color:#9a5332;
		font-family:'Hibana',sans-serif;
	}
	.msgCont{
		max-width:225px;
		border-radius:5px;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		text-align:justify;
		white-space:pre-wrap;
		font-size:13px;
		font-weight:bolder;
		color:#e5dacc;
		padding:10px 15px;
		font-family:'Nunito',sans-serif;
		background-color:#ab7a3b;
	}

	.replyCont{
		width:100%;
		height:19%;
		display:flex;
		justify-content:center;
		align-items:center;
		background-color:#d9d9d9;
	}
	.replyCont input{
		width:70%;
		height:70%;
		border-radius:10px 0px 0px 10px;
		border:none;
		box-shadow:inset 0px 0px 5px 3px rgba(0, 0, 0, .3);
		outline:none;
		padding-left:10px;
		font-family:'Montserrat',sans-serif;
	}
	.replyCont input:focus{
		box-shadow:0px 0px 5px 3px rgba(0, 0, 0, .3);
	}
	.replyCont button{
		width:15%;
		height:75%;
		border-radius:0px 10px 10px 0px;
		border:none;
		background-color:#3c7aaa;
		font-family:'Comfortaa',sans-serif;
		color:white;
	}
	.bottom{
		width:100%;
		height:80%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		flex-direction:column;
	}
	.bottom .head{
		width:100%;
		height:20%;
		display:flex;
		justify-content:center;
		align-items:center;
		font-size:25px;
		font-family:'Montserrat',sans-serif;
		font-weight:bolder;
	}
	.bottom .head i{
		margin-right:10px;
		font-size:30px;
		color:#877b5e;
	}
	.timeline{
		width:95%;
		border-radius:10px;
		box-shadow:inset 0px 0px 5px 5px rgba(0, 0, 0, .5);
		height:70%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		background-color:rgba(202, 158, 28,.3);
		overflow-x:scroll;
	}
	.timeline::-webkit-scrollbar{
		height:10px;
		border-radius:0px 0px 10px 10px;
		background-color:#9d7b15;
	}
	.timeline::-webkit-scrollbar-thumb{
		background-color:#5a460c;
	}
	.startIcon{
		width:7.5%;
		height:35%;
		margin-left:30px;
		border-radius:50%;
		color:white;
		display:flex;
		justify-content:center;
		align-items:center;
		font-size:40px;
		box-shadow:-2px 2px 5px rgba(0, 0, 0, .5);
		background-color:#466686;
	}
	.period{
		width:.5%;
		height:2%;
		margin-left:5px;
		background-color:rgba(130, 102, 74, .7);
		box-shadow:-1px 1px 2px rgba(0, 0, 0, .5);
		/*border:1.5px solid #994d00;*/
		border-radius:50%;
	}
	.branchCont1{
		width:.7%;
		height:50%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		flex-direction:column-reverse;
		transform:translateY(-48.5%);
		margin-left:5px;
	}

	.branchCont1 .period{
		width:75%;
		height:5%;
		margin-left:0px;
		margin-top:5px;
	}
	.branchCont2{
		width:.7%;
		height:50%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		flex-direction:column;
		transform:translateY(43.5%);
		margin-left:5px;
	}

	.branchCont2 .period{
		width:75%;
		height:5%;
		margin-left:0px;
		margin-top:5px;
	}
	.event{
		width:1750%;
		height:25%;
		display:flex;
		justify-content:center;
		align-items:center;
		border-radius:10px;
		color:white;
		font-family:'Nunito',sans-serif;
		background-color:rgba(47, 77, 106,.7);
		box-shadow:0px 0px 8px 3px #899aa9;
	}
	.branchCont2 .event{
		margin-top:10px;
	}
	.footerCont{
		width:100%;
		height:5%;
		display:flex;
		align-items:flex-end;
		background-color:#f2f2f2;
	}
	.footer{
		width:100%;
		height:100%;
		display:flex;
		justify-content:space-between;
		align-items:center;
		background-color:#4a6987;
	}
	.footer a{
		text-decoration:none;
		color:#8ca6c0;
		font-style:italic;
		font-family:'Gill Sans Std',sans-serif;
		font-size:14px;
		margin-left:30px;
		transition:all .3s ease;
	}
	.footer a:hover{
		color:#00e6e6;
	}
	.footer p{
		text-decoration:none;
		color:#8ca6c0;
		font-style:italic;
		font-family:'Gill Sans Std',sans-serif;
		font-size:14px;
		margin-right:30px;
		transition:all .3s ease;
	}
	.footer p:hover{
		color:#00e6e6;
	}
</style>
<body>
	<form action="tracking-inc.php" method="POST">
		<div class="topBar">
			<span class="sect1">
				<img src="logo.png">
				<p><?php echo $_SESSION['sessionfname1']?></p>
			</span>
			<span class="sect2">
				<i class="fad fa-bug"></i><p>Issue Details</p>
			</span>
			<span class="sect3">
				<button type="button" id="goBack" name="Goback">Go Back <i class="fad fa-right-from-bracket"></i></button>
			</span>
		</div>

		<div class="content">
			<div class="top">
				<span>
					<i class="fas fa-ticket-perforated"></i>
					<p id="ticketNumber"></p>
				</span>

				<span>
					
				</span>
			</div>

			<div class="middle">
				<div class="dets">
					<div class="sect1">
						<span>
							<p id="issueTopic"></p>
							<i class="fas fa-seal-exclamation"></i>
						</span>
						<span>
							<p id="issueDept">HI Department</p>
							<i class="fas fa-building"></i>
						</span>
						<span>
							<p id="staff">Assigned Staff : Mr Asor</p>
							<i class="fas fa-user-secret"></i>
						</span>
					</div>

					<div class="sect2">
						<div class="descCont">
							<p>Description : </p>
							<p id="descp">After A Recent Update, We Lost Some Of Our Patient. 223 PMTCT Patient And 19 Recapture</p>
						</div>
					</div>
					<div class="sect3">
						<div class="left">
							<input type="text" name="secStats" id="secStats" style="display:none;">
							<div class="leftCont">
								<span class="btnIcon">
									<i class="fad fa-code-branch"></i>
								</span>
								<span class="btn">
									<span id="para" class="list">
										<i class="fad fa-box-open"></i>
										<p>Open</p>
									</span>
									<i class="fas fa-chevron-down" id="selcIcon2"></i>
								</span>
							</div>

							<div class="leftList">
								<span class="list">
									<i class="fad fa-box"></i>
									<p>Close</p>
								</span>
								<span class="list" >
									<i class="fad fa-pen-to-square"></i>
									<p>Edit</p>
								</span>
								<span class="list" >
									<i class="fad fa-bin-recycle"></i>
									<p>Delete</p>
								</span>
							</div>
						</div>
							
						<div class="middle">
							<span id="colorBtn"></span>
							<p id="stats">Status : Ongoing</p>
						</div>
						<div class="right">
							<p id="dateVal"></p>
						</div>
					</div>
				</div>
				<div class="chatCont">
					<div class="chats">
						<div class="contactName">
							<span class="IconLetter">
								<p id="initial1">NB</p>
							</span>
							<p id="otheruser">Naeem Bashir</p>
						</div>

						<div class="messageCont">
							<!--<div class="message1">
								<span class="senderIcon">
									<span>DA</span>
								</span>
								<span class="msgCont">
									<p>Hey i still need help undertsanding your problem, what do you mean he doesn't love you no more</p>
								</span>
							</div>

							<div class="message2">
								<span class="msgCont">
									<p>This nigga out here ducking me, i can't be the only one trying</p>
								</span>
								<span class="senderIcon">
									<span>AI</span>
								</span>
							</div>!-->

						</div>

						<div class="replyCont">
							<input type="text" name="msgBox" id="messagBox">
							<button type="button" id="sendBtn" onclick="send();">Send <i class="fad fa-paper-plane"></i></button>
						</div>
					</div>
					<div class="frontBanner">
						<i class="fad fa-user-xmark" id="chatIcon"></i>
						<p style="display:none;" id="chatmsg">no staff have been assigned yet, please wait until your issue has been assigned before you can contact your assigned staff</p>	
						<button id="startChat" type="button">Start Chatting with Mr Asor</button>
					</div>
				</div>
			</div>

<!--			<div class="bottom">
				<div class="head">
					<i class="fad fa-calendar-clock"></i>
					<p>Issue Timeline</p>
				</div>
				<div class="timeline">
					
				</div>
			</div>
!-->
		</div>
		<div class="footerCont">
			<div class="footer">
				<a href="https://www.gghnigeria.org/">Georgetown Global Health Nigeria Co.</a>	
				<p>Built By Naeem Bashir</p>
			</div>
		</div>

	</form>
		
</body>
<?php 
	//Retriving data about the selected issue from database
	require 'Includes/database.php';
	$ticketNum = $_SESSION['ticketNum'];
	$sql1 = "SELECT * FROM issue_tracking WHERE issue_No = ?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql1)) {
		header("Location:issue_history.php");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,'s',$ticketNum);
		mysqli_stmt_execute($stmt);
		$output1 = mysqli_stmt_get_result($stmt);
		$rowData1 = mysqli_fetch_assoc($output1);
	}

	$sql2 = "SELECT * FROM issueoption WHERE issue_topic = '{$rowData1['Issue']}'";
	$query1 = mysqli_query($conn,$sql2);
	$data = mysqli_fetch_assoc($query1);

	$sql3 = "SELECT * FROM users WHERE User_Name = '{$rowData1['Assigned_staff_uname']}'";
	$query2 = mysqli_query($conn,$sql3);
	if ($query2->num_rows > 0) {
		$data2 = mysqli_fetch_assoc($query2);	
	}
	else{
		$data2 = ("");
	}
	$sql4 = "SELECT * FROM users WHERE User_Name = '{$_SESSION['sessionuname1']}'";
	$query3 = mysqli_query($conn,$sql4);
	if ($query3->num_rows > 0) {
		$data3 = $query3->fetch_assoc();
	}
	else{
		$data3 = ("");
	}
	


?>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">

	var ticketNum = <?php echo $ticketNum?>;
	var department_name = "<?php echo $rowData1['Department']?>";
	if (department_name.length > 3) {
		var dept_short = department_name.slice(0,3);
	}
	else{
		var dept_short = department_name;
	}
	var issueHead = '<?php echo $rowData1['Issue'];?>';
	
	var staff = '<?php  echo isset($data2['Fullname']) ?  $data2['Fullname'] :  "Not Assigned"; ?>';
	var staffMail = '<?php  echo isset($data2['contact_info']) ?  $data2['contact_info'] :  "Not Assigned"; ?>';

	var fullname = '<?php echo $_SESSION['sessionfname1']?>';
	var issueDept = '<?php echo $data['dept_cat']?>';
	var descp = '<?php echo $rowData1['Description']?>';
	var status = '<?php echo $rowData1['Status']?>';
	var numDate = '<?php echo $rowData1['date_val']?>';
	var secondStats = '<?php echo $rowData1['second_stats']?>';
	document.getElementById("secStats").value = secondStats;

	var d = new Date(numDate);
	var day = d.getDate();
	var month = d.getMonth();
	var months = ['January','Febuary','March','April','May','June','July','August','September','October','November','December'];
	var yr = d.getFullYear();
	document.getElementById("ticketNumber").innerHTML = "Ticket ID :02-"+dept_short.toUpperCase()+"-0"+ticketNum;
	document.getElementById("issueTopic").innerHTML = issueHead;
	document.getElementById("issueDept").innerHTML = issueDept;
	document.getElementById("staff").innerHTML = "Assigned Staff : "+staff;
	document.getElementById("descp").innerHTML = descp;
	document.getElementById("stats").innerHTML = "Status : "+status;

	//changing the status span color based on the issue status
	if (status == 'unsolved') {
		document.getElementById("colorBtn").style.backgroundColor = "#e15656";
	}	
	else if (status == "ongoing") {
		document.getElementById("colorBtn").style.backgroundColor = "#1e9f6d";
		document.getElementById("colorBtn").style.animation = "glow .8s linear infinite";
	}
	else if (status == "resolved") {
		document.getElementById("colorBtn").style.backgroundColor = "#abc4bb";
	}
	document.getElementById("dateVal").innerHTML = "Date : "+day+" "+months[month]+" "+yr



	//display the facility issue status i.e Open or Closed
	var listBtn = document.querySelector(" .leftCont");
	var leftList = document.querySelector(" .leftList");
	var selcIcon2 = document.getElementById("selcIcon2");
	var selcPara = document.getElementById("para");
	var selcIcon1 = document.getElementById("selcIcon1");

	var list = document.querySelectorAll(" .list");

	if (secondStats == "Open") {
		selcPara.innerHTML = "<i class = 'fad fa-box-open'></i> <p>"+secondStats+"</p>";
	}
	else if (secondStats == "Close") {
		selcPara.innerHTML = "<i class = 'fad fa-box'></i> <p>"+secondStats+"</p>";
		list[1].innerHTML = "<i class = 'fad fa-box-open'></i> <p>Reopen</p>";
	}

	//facility issue status dropdown animation
	listBtn.addEventListener("click",() => {
		
		if (leftList.classList == "leftList active2") {
			selcIcon2.style.transform = "rotateX(180deg)";
			selcIcon2.style.transition = "all .6s ease";
		}
		else {
			selcIcon2.style.transform = "rotateX(0deg)";
			selcIcon2.style.transition = "all .6s ease";

		}
	})

	list.forEach( o => {
		o.addEventListener("click",() => {
			selcPara.innerHTML = o.innerHTML;
			
			document.getElementById("secStats").value = o.querySelector("p").innerHTML;
			listBtn.style.transform = "translateY(0%)";
			listBtn.style.transition = "all .6s ease";
			selcIcon2.style.transform = "rotateX(0deg)";
			selcIcon2.style.transition = "all .6s ease";
			leftList.classList.toggle("active");
		})
	})
	if (staff != "Not Assigned") {
		//getting both users initials
		document.getElementById("otheruser").innerHTML = staff;
		
		var splitname = staff.split(" ");
		var initials = splitname[0].slice(0,1) + splitname[1].slice(0,1);
		initials1 = initials.toUpperCase();
		document.getElementById("initial1").innerHTML = initials1;

		var splitname2 = fullname.split(" ");
		var initials_2 = splitname2[0].slice(0,1) + splitname2[1].slice(0,1);
		initials2 = initials_2.toUpperCase();

		//enabling the chatbox if the issue is both open and have been assigned a staff 
		var troubleshooterID = '<?php if (isset($data2['chat_id'])) {echo $data2['chat_id'];}?>';
		var reportID = '<?php if (isset($data3['chat_id'])) {echo $data3['chat_id'];}?>';
		var messageKey = reportID+"-"+troubleshooterID+"-"+dept_short.toUpperCase()+"-0"+ticketNum;
		
		var msgObjNum = 0;
		// alert(messageKey);
		if (secondStats == "Open") {
			var xhttp3 = new XMLHttpRequest();
			xhttp3.onload = function(){
				// alert(this.responseText);
				if (this.responseText == "no message") {
					document.getElementById("startChat").style.display = "block";
					document.getElementById("startChat").innerHTML = "Start Chatting with "+staff;
					document.getElementById("chatIcon").classList = "fad fa-user-check";
					document.getElementById("chatIcon").style.color = "#6ba896";
					document.getElementById("chatmsg").style.display = "none";
					
				}
				else{
					var messages = this.responseText+"}";
					// alert(messages);
					loadMsgs(messages);
						
				}
			}
			xhttp3.open("POST","tracking-inc.php");
			xhttp3.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhttp3.send("msgKey="+messageKey);

			//checking for new msg
			var counter6 = 0;
			var newMsgChecker = setInterval(() => {
				if (counter6 > 0) {
					clearInterval(newMsgChecker);
				}
				else {
					liveChat();
				}
			},1000)
		}
		//disabling the chatbox if the issue is  closed 
		else if (secondStats == "Close") {
			document.getElementById("startChat").style.display = "none";
			document.getElementById("chatmsg").innerHTML = "This issue have been close, we are not currently tracking it and cannot contact an assigned staff, you can reopen if this issue is still present";
			document.getElementById("chatIcon").classList = "fad fa-user-minus";
			document.getElementById("chatmsg").style.display = "flex";
			document.getElementById("ticketNumber").style.textDecoration = "line-through";
			document.getElementById("ticketNumber").style.color = "#999999";
		}

		//enabling the chat
	    var chatBtn = document.getElementById("startChat");

		chatBtn.addEventListener("click",() => {
			var counter = 0;
			document.querySelector(" .frontBanner").style.opacity = "0%";
			document.querySelector(" .frontBanner").style.transition = "all .6s ease";
			
			var openChat = setInterval(() => {
				if (counter > 0) {
					clearInterval(openChat);
				}
				else {
					counter++;
					document.querySelector(" .frontBanner").style.zIndex = "-1";
				}
			},700)
		})

		

		//loading the chats functions
		function liveChat(){
			var xhttp5 = new XMLHttpRequest();
			xhttp5.onload = function () {
				// alert(this.responseText);
				if (this.responseText != "no new message") {
					var messages = this.responseText+"}";
					loadMsgs(messages);
				}
			}
			xhttp5.open("POST","tracking-inc.php");
			xhttp5.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhttp5.send("message_key="+messageKey+"&message_length="+msgObjNum)
			// adjustMsg(j);
		}
		//creating the sender message bubble
		function sendMsg(msgId,msg,initial){	
			var msgCont = document.querySelector(" .messageCont");
			var div1 = document.createElement("div");
			div1.classList = "message2";
			div1.setAttribute("id","msgContainer"+msgId);
			var span1 = document.createElement("span");
			span1.classList = 'msgCont';
			span1.setAttribute("id","msgBox"+msgId);
			var p1 = document.createElement("p");
			p1.innerHTML = msg;
			// localStorage.setItem("facStaffMsg"+department_name+ticketNum+"_"+msgId,msg);
			p1.setAttribute("id","msg"+msgId);
			var span2 = document.createElement("span");
			span2.classList = "senderIcon";
			var span3 = document.createElement("span");
			span3.innerHTML = initial;

			span2.appendChild(span3);
			span1.appendChild(p1);
			div1.appendChild(span1);
			div1.appendChild(span2);
			if (msgId == 1) {
				msgCont.innerHTML = "";
				msgCont.appendChild(div1)
			}
			else {
				msgCont.appendChild(div1);	
			}
		}

		//loading other user response
		function loadOtherMsg(msgId,msg,initial){
			var msgCont = document.querySelector(" .messageCont");
			var div1 = document.createElement("div");
			div1.classList = "message1";
			div1.setAttribute("id","msgContainer"+msgId);
			var span1 = document.createElement("span");
			span1.classList = 'msgCont';
			span1.setAttribute("id","msgBox"+msgId);
			var p1 = document.createElement("p");
			p1.innerHTML = msg;
			// localStorage.setItem("issueStaffMsg"+department_name+ticketNum+"_"+msgId,msg);
			p1.setAttribute("id","msg"+msgId);
			var span2 = document.createElement("span");
			span2.classList = "senderIcon";
			var span3 = document.createElement("span");
			span3.innerHTML = initial;

			span2.appendChild(span3);
			span1.appendChild(p1);
			div1.appendChild(span2);
			div1.appendChild(span1);
			if (msgId == 1) {
				msgCont.innerHTML = "";
				msgCont.appendChild(div1)
			}
			else {
				msgCont.appendChild(div1);	
			}
		}

		//sending the message by calling the sendMsg function when the button is clicked
		function send() {
			msgObjNum++
			var msg = document.getElementById("messagBox").value;
			sendMsg(msgObjNum,msg,initials2)
			document.getElementById("messagBox").value = "";
			adjustMsg(msgObjNum);

			var msgPoint = msgObjNum;
			var lastMsg = document.getElementById("msgContainer"+msgPoint);
			document.querySelector(".messageCont").scrollTo(0,lastMsg.offsetTop);

			var xhttp4 = new XMLHttpRequest();
			xhttp4.onload = function() {
				// alert(this.responseText);
			}
			xhttp4.open("POST","tracking-inc.php");
			xhttp4.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhttp4.send("msg_key="+messageKey+
						"&msg_length="+msgObjNum+
						"&msg="+msg+
						"&troubleshooter="+staff+
						"&reporter="+fullname+
						"&senderID=rp");			
		}

		//Send the new msg when the "Enter" button is clicked
		document.addEventListener("keypress",(event) => {
			var keyCode = event.keyCode ? event.keyCode : event.which;

			if (keyCode === 13) {
				send();
			}
		})
		function adjustMsg(id){
			var msg = document.getElementById("msg"+id).innerHTML;
			var msgBox = document.getElementById("msgBox"+id);
			var newWidth = 3*msg.length;
			if (newWidth <= 90) {
				newWidth = 2.5*msg.length
			}
			else {
				newWidth = 100;
			}
			msgBox.style.width = newWidth+"%";
			if (msg.length < 40) {
				msgBox.style.height = "fit-content";
			}
			else {
				msgBox.style.height = 'fit-content';
			}

		}
		function loadMsgs(msg){
			var msgObj = JSON.parse(msg);
			msgObjNum = Object.keys(msgObj).length;
				
			for (var t = 1; t <= msgObjNum; t++) {
				if (msgObj["ts"+t]) {
					var msg1 = msgObj["ts"+t];
					loadOtherMsg(t,msg1,initials1)
				}
				else if (msgObj["rp"+t]) {
					var msg1 = msgObj["rp"+t];
					sendMsg(t,msg1,initials2)
				}
				else{
					alert("error");
				}
			}
			var msgPoint = msgObjNum;
			var lastMsg = document.getElementById("msgContainer"+msgPoint);
			document.querySelector(".messageCont").scrollTo(0,lastMsg.offsetTop);
				
			document.querySelector(" .frontBanner").style.opacity = "0%";
			document.querySelector(" .frontBanner").style.zIndex = "-1";
		}
		//sending email function when issue is reopen
		function sendMail(staffMail,staffName,reporterName,deptName,stats){
			
			Email.send({
		    Host : 'smtp.elasticemail.com',
		    Username : 'issuetracking703@gmail.com',
		    Password : '6DDFF88F60BF06658BA47C0755ACC1D93987',
		    To : staffMail,
		    From : 'issuetracking703@gmail.com',
		    Subject : 'Reopened Issue',
			Body : `<div style="width:100%; height:550px; background-color:#f2f2f2; margin-left:auto; margin-right:auto; font-family:'Verdana',sans-serif;">
						<table border="1px" style="width:55%; min-width:445px; height:100%; max-height:650px; margin-left:auto; margin-right:auto; border-collapse:collapse; border:.5px solid rgba(0, 0, 0, .0);">
							<tr style="height:17%; min-height:65px; background-color:#446097; color:white;">
								<td align="left" style="width:150px; padding-left:40px; border:.5px solid rgba(0, 0, 0, .0);">
									<img src="https://i.ibb.co/XyHwqfP/logo.png" style="width:90%; margin-top:5px;">
								</td>
								<td align="left" style="padding-left:40px; font-size:clamp(20px, 2.6vw, 40px);">
									Issue Tracking
								</td>
							</tr>
							<tr>
								<td colspan = "2" align="center"  style = "background-color:white; border:.5px solid rgba(0, 0, 0, .0);">
									<p style="width:90%; height:90%;" align="left">
										<span style="font-size:clamp(20px, 1.7vw, 30px); text-transform:capitalize;">Hello There `+staffName+`</span>
										<br>
										<br>
										<span style="font-size:clamp(13px, 1.2vw, 20px); line-height:1.6;">
											An issue that you solved for the `+deptName+` Department unfortunately have resurface again, `+reporterName+` is seeking for your assistance once more, Please start working on it as soon as possible<br><br>Thank you For Your Assistance
										</span>
									</p>
								</td>
							</tr>
							<tr style="background-color:white; border:.5px solid rgba(0, 0, 0, .0);">
								<td colspan="2" style="height:65px;">
									<a href ='localhost/Issue_Tracking/index.php' style='text-decoration:none; cursor:pointer;'>
												<button style = 'width:22%; min-width:200px; height:70%; min-height:45px; margin-left:30px; background-color:#23907a; border:none; border-radius:10px; color:white; font-size:clamp(12px, 1vw, 17px); cursor:pointer;'>Check Your Dashboard</button>
											</a>
								</td>
							</tr>
						</table>
					</div>`
			}).then(
		  		message => message == "OK" ? sendToTheBack(stats) : alert(message),
		  		
			);
		}
	}
	else {
		document.getElementById("startChat").style.display = "none";
		document.getElementById("chatmsg").style.display = "flex";
	}
		

	//updating the issue data in our database
	document.getElementById("goBack").addEventListener("click", () => {
		var second_stats = document.getElementById('secStats').value;
		if (second_stats == "Reopen") {
			sendMail(staffMail,staff,fullname,department_name,second_stats);
		}
		else {
			//alert(second_stats);
			var xhttp = new XMLHttpRequest();
			xhttp.onload = function () {
					//alert(this.responseText);
					window.location.href = this.responseText;

			}
			xhttp.open("POST","tracking-inc.php");
			xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhttp.send("secStats="+second_stats);
		}
	})

	function sendToTheBack(stats){
		var xhttp2 = new XMLHttpRequest();
		xhttp2.onload = function () {
			//alert(this.responseText);
			window.location.href = this.responseText;

		}
		xhttp2.open("POST","tracking-inc.php");
		xhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp2.send("secStats="+stats);
	}
	

</script>
</html>

	