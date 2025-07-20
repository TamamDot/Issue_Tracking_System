<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo1.png">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.5.1/css/pro.min.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<?php session_start(); ?>
<style type="text/css">
	*{
		margin:0px;
	}
	html,body{
		height:100%;
		min-height:400px;
	}
	body{
		background-image:url('bgimg2.jpg');
		background-size:cover;
		background-position:center;
		background-repeat:no-repeat;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	form{
		width:100%;
		height:100%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		flex-direction:column;
	}
	.formCont{
		width:100%;
		height:85%;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	textarea {
		width:77%;
		height:35%;
		outline:none;
		border:none;
		border-radius:5px 5px 0px 0px;
		border-bottom:3px solid black;
		box-shadow:3px 3px 5px rgba(0, 0, 0, .7);
		margin-left:30px;
		font-size:clamp(14px, 1.05vw, 16px);
		font-family:'Comfortaa',sans-serif;
		font-weight:bolder;
		padding-left:20px;
		padding-top:20px;
		background-color:rgba(0, 0, 0, .5);
		transition:all .6s ease;
		margin-top:30px;
		color:white;
	}
	textarea::placeholder{
		color:rgba(255,255,255,.8);
		font-style:italic;
	}
	textarea:focus{
		color:black;
		background-color:rgba(230, 230, 230,.4);
		border-bottom:3px solid #2c8775;
	}
	.formSect button{
		width:40%;
		height:14%;
		max-height:70px;
		border-radius:10px;
		padding-left:0px;
		font-size:15px;
		font-weight:lighter;
		cursor:pointer;
		font-family:'Comfortaa',sans-serif;
		border:none;
		box-shadow:3px 3px 5px rgba(0, 0, 0, .7);
		background-color:#d9d9d9;
		margin-left:40px;
		color:black;
		display:flex;
		align-items:center;
		justify-content:center;
		margin-top:20px;
		transition:all .6s ease;
	}
	.formSect button:hover{
		background-color:#3e7469;
		color:#cccccc;
		font-weight:bolder;
	}
	.formSect button i{
		font-size:20px;
		margin-left:10px;

	}
	@keyframes blinkAnime{
		0%{
			opacity:0%;
		}
		50%{
			opacity:100%;
		}
		100%{
			opacity:0%;
		}
	}
	.formSect{
		width:35%;
		height:80%;
		max-height:505px;
		backdrop-filter:blur(13px);
		background-color:rgba(255,255,255,.3);
		display:flex;
		justify-content:flex-start;
		flex-direction:column;
		z-index:0;
		border-radius:10px 0px 0px 10px;
		transform:translateX(50%);
	}
	.inputCont{
		width:100%;
		height:17%;
		max-height:100px;
		display:flex;
		flex-wrap:wrap;
		align-items:flex-start;
		margin-top:40px;
	}
	.optCont{
		width:80%;
		max-height:0px;
		order:1;
		margin-left:30px;
		margin-top:10px;
		border-radius:10px;
		opacity:0%;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
		background-color:rgba(66, 77, 87, .7);
		backdrop-filter:blur(15px);
		z-index:1;
		transition:all .4s ease-in-out;
		overflow-y:scroll;
		box-shadow:-3px 3px 5px rgba(0, 0, 0, .7);
	}
	.optCont::-webkit-scrollbar{
		width:5px;
		background-color:#3d7a8f;
		border-radius:0px 10px 10px 0px;
	}
	.optCont::-webkit-scrollbar-thumb{
		border-radius:0px 10px 10px 0px;
		background-color:#186781;
	}	
	.optCont.active{
		max-height:150px;
		opacity:100%;
	}
	.option{
		width:90%;
		height:50px;
		padding:20px 17.9px;
		color:white;
		font-family:'Comfortaa',sans-serif;
		transition:all .3s ease;
		cursor:pointer;
		font-size:14px;
		text-transform:capitalize;
	}
	.option:hover{
		background-color:rgba(60, 76, 93,.9);
	}
	.selcCont{
		width:100%;
		height:90%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		cursor:pointer;
		text-transform:capitalize;
	}
	.selcCont span{
		height:90%;
		width:82%;
		margin-left:30px;
		display:flex;
		justify-content:space-between;
		font-size:clamp(14px, 1.05vw, 17px);
		color:rgba(255,255,255,.5);
		font-family:'Comfortaa',sans-serif;
		font-weight:bolder;
		font-style:italic;
		border-radius:5px;
		align-items:center;
		background-color:rgba(0, 0, 0, .5);
		box-shadow:3px 3px 5px rgba(0, 0, 0, .7);
	}
	.selcCont p{
		margin-left:20px;
	}
	.selcCont i{
		color:#d9d9d9;
		font-size:20px;
		margin-right:20px;
	}
	.infoSect{
		width:35%;
		height:80%;
		max-height:505px;
		background-color:#d9d9d9;
		box-shadow:-5px 0px 5px rgba(0,0,0,.4);
		z-index:1;
		animation:formAnime .7s ease-in-out;
		transform:translateX(-50%);
		border-radius:0px 10px 10px 0px;
		display:flex;
		justify-content:space-between;
		align-items:center;
		flex-direction:Column;
	}
	.top{
		width:100%;
		height:20%;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
	}
	.top img{
		width:25%;
		max-width:400px;
	}
	.top p{
		font-size:clamp(15px, 1.2vw, 20px);
		font-family:'Comfortaa',sans-serif;
		font-weight:bolder;
	}
	.middle{
		width:90%;
		height:70%;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		flex-direction:column;
		font-size:clamp(13px, 1vw, 16px);
		text-align:justify;
		font-style:italic;
		color:rgba(0,0,0,.5);
		font-family:'Nunito',sans-serif;
		text-transform:capitalize;
	}
	.middle img{
		width:55%;
		border-radius:10px;
		box-shadow:2px 2px 5px rgba(0,0,0,.6);
	}
	.bottom{
		width:92%;
		height:5%;
		display:flex;
		justify-content:space-between;
		align-items:center;
		font-size:clamp(11px, .85vw, 13px);
		font-family:'Nunito',sans-serif;
		font-style:italic;
		color:rgba(0, 0, 0, .4);
		padding:0px 20px;
	}
	.
</style>
<body>
	<form method="POST">
		<?php require 'header.php'; ?>
		<div class="formCont">
			<div class="formSect">
				<div class="inputCont">
					<div class="optCont">
						<!--<span class="option">
							Others
						</span>!-->
					</div>

					<div class="selcCont">
						<span>
							<p class="selcVal">Select what issue you are facing</p>
							<i class="fas fa-chevron-down" id="selcIcon"></i>
						</span>
					</div>
				</div>
				<textarea id="description1" placeholder="enter a Description of the problem or issue"></textarea>
				<!--<input type="text" name="description1" placeholder="enter Description of the problem or issue">!-->
				<input type="text" id="issue_name1" style="display:none;">
				<button type="button" id="submitBtn1">Report Issue <i class="fad fa-arrow-right-from-bracket"></i></button>
			</div>
			<div class="infoSect">	
				<div class="top">
					<img src="logo.png">
					<p>Facility Issue Form</p>
				</div>
				<div class="middle">
					<p>
						We at Georgetown Global health nigeria would love to solve and aid you with any issue you may be facing as soon as possible, we may not be able to immediately attend to the issue but rest assured, it is being process by the staff member in concern and would be solved. Thank Yoi
					</p>

					<img src="bgimg3.jpg">
				</div>
				<div class="bottom">
					<p>GGHN</p>
					<p>Built By Naeem Bashir</p>
				</div>
			</div>
		</div>	
	</form>
	
</body>
<?php 
//retriving the pre define issue from our database
	require 'Includes/database.php';
	$sql1 = "SELECT * FROM issueoption";
	$query1 = mysqli_query($conn,$sql1);
	$i = 0;
	if ($query1->num_rows > 0) {
		while ($rowData1 = $query1->fetch_assoc()) {	
			$i++;
			echo 
			"<script>
				sessionStorage.setItem('option$i','{$rowData1['issue_topic']}');
				sessionStorage.setItem('optNum','{$i}');
			</script>";
		}
	}
	$uname = $_SESSION['sessionuname1'];
	//Retrving the user data need for reporting an issue e.g Fullname,facility,state
	$sql2 = "SELECT * FROM users WHERE User_Name = '$uname'";
	$query2 = mysqli_query($conn,$sql2);
	$data1 = $query2->fetch_assoc();


	$sql4 = "SELECT * FROM users WHERE state = '{$data1['state']}' AND Department = 'HR'";
	$query4 = mysqli_query($conn,$sql4);
	if ($query4->num_rows > 0) {
		$y = 0;
		while($data3 = $query4->fetch_assoc()) {
			$y++;
			echo 
			"<script>
				var stateAdmins = {fullname : '{$data3['Fullname']}',Email : '{$data3['contact_info']}'}
				var stringedObj = JSON.stringify(stateAdmins);
				sessionStorage.setItem('adminInfo$y',stringedObj);
				sessionStorage.setItem('adminNumber','{$y}')
			</script>";
		}
	}

?>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">
	//Highlighting selected navElem
	var navElems = document.querySelectorAll(".navElem");
	navElems[2].classList.add("active");

	//HR Customization
	var userPos = "<?php echo $_SESSION['user_pos']?>";
	if (userPos == "HR") {
		navElems[0].querySelector("a p").innerHTML = "Submitted Issue";
		navElems[0].querySelector("a").setAttribute("href","tracking_page2.php");
	}
	//Creating the dropdown element for each pre define issue
	var optCont = document.querySelector(" .optCont");
	if (sessionStorage.getItem("optNum")) {	
		var optNum = sessionStorage.getItem("optNum");
	}
	else {
		var optNum = 0;
	}
	function createOpt(optId){
		var span1 = document.createElement("span");
		span1.classList = "option";
		span1.setAttribute("id","opt"+optId);

		optCont.appendChild(span1);
	}

	for (var i = 1; i <= optNum; i++) {
		createOpt(i)
		for (var j = 1; j <= i; j++) {
			document.getElementById("opt"+i).innerHTML = sessionStorage.getItem("option"+i)
		}
	}
	//form sliding animation
	var formSect = document.querySelector(" .formSect");
	var infoSect = document.querySelector(" .infoSect");
	var counter = 0;
	var formAnime = setInterval(() => {
		if (counter > 0) {
			clearInterval(formAnime);
		}
		else{
			counter++;
			infoSect.style.transform = "translateX(0%)";
			formSect.style.transform = "translateX(0%)";
			formSect.style.transition = "all .6s ease-in-out";
			infoSect.style.transition = "all .6s ease-in-out";
		}
	},500);


	//dropdown animation
	var options = document.querySelectorAll(" .option");
	var selcVal = document.querySelector(" .selcVal");
	var selcIcon = document.getElementById("selcIcon");
	var selcCont = document.querySelector(" .selcCont");

	selcCont.addEventListener("click",() => {
		optCont.classList.toggle("active");
		if (optCont.classList == "optCont active") {
			selcIcon.style.transform = "rotateX(180deg)";
			selcIcon.style.transition = "all .5s ease";
		}
		else{
			selcIcon.style.transform = "rotateX(0deg)";
		selcIcon.style.transition = "all .5s ease";
		}
	})

	options.forEach( o => {
		o.addEventListener("click",() => {
			selcVal.innerHTML = o.innerHTML;
			document.getElementById("issue_name1").value = o.innerHTML;
			optCont.classList.remove("active");
			selcIcon.style.transform = "rotateX(0deg)";
		})
	})
	

	//sending mail to the state admin
	function sendMail(adminMail,adminName,reporterName,depart_name,reporterUname){
		Email.send({
	   	Host : 'smtp.elasticemail.com',
	    Username : 'issuetracking703@gmail.com',
	    Password : '6DDFF88F60BF06658BA47C0755ACC1D93987',
	    To : adminMail,
	    From : 'issuetracking703@gmail.com',
	    Subject : 'Reported Issue',
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
									<span style="font-size:clamp(20px, 1.7vw, 30px); text-transform:capitalize;">Good Day `+adminName+`,</span>
									<br>
									<br>
									<span style="font-size:clamp(13px, 1.2vw, 20px); line-height:1.6;">
										An issue have been reported by `+reporterName+` being faced in `+depart_name+` department from your state, Please assign a staff member to provide assistance.<br><br>Thank you For Your Assistance
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
				</div>.`
		}).then(
	  		message => message == "OK" ? sendToTheBack(reporterUname) : sendToTheBack(reporterUname),
	  		
		);
	}

	function sendMail2(adminMail,adminName,reporterName,facilName,reporterUname){
		
		Email.send({
	    Host : 'smtp.elasticemail.com',
	    Username : 'issuetracking703@gmail.com',
	    Password : '7BCBAF34E2E044C32BEC45BF4F03AFBF4B00',
	    To : adminMail,
	    From : 'issuetracking703@gmail.com',
	    Subject : 'Reported Issue',
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
									<span style="font-size:clamp(20px, 1.7vw, 30px); text-transform:capitalize;">Good Day `+adminName+`,</span>
									<br>
									<br>
									<span style="font-size:clamp(13px, 1.2vw, 20px); line-height:1.6;">
										An issue have been reported by `+reporterName+` being faced at `+facilName+` from your state, Please assign a staff member to provide assistance.<br><br>Thank you For Your Assistance
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
	  		message => message == "OK" ? console.log(message) : console.log(message),
	  		
		);
	}


	//inserting the reported issue into our database 
	function sendToTheBack(uname){
		var issueName = document.getElementById("issue_name1").value;
		var descp = document.getElementById("description1").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function () {
			// alert(this.responseText);
			btn.innerHTML = "Submitted <i class = 'fad fa-cloud-check' id = 'loadIcon'></i>";
			btn.disabled = true;
			btn.style.backgroundColor = "#3e7469";
			document.getElementById("loadIcon").style.animation = "none";
			var counter1 = 0;
			var sendToNextPage = setInterval(() => {
				if (counter1 > 0) {
					clearInterval(sendToNextPage);
					counter1 = 0;
				}
				else {
					counter1++;
					window.location.href = ""+this.responseText+"";
				}
			},1000)
		}
		xhttp.open("POST","complaint-inc.php");
		xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp.send("uname="+uname+"&issue_name1="+issueName+"&description1="+descp);
	}


	//calling the email function when the report button is clicked
	var btn = document.getElementById("submitBtn1");
	btn.addEventListener("click",() => {
		btn.innerHTML = "Submitting <i class = 'fad fa-cloud-arrow-up' id = 'loadIcon'></i>";
		btn.disabled = true;
		document.getElementById("loadIcon").style.animation = "blinkAnime 1s ease infinite";
		btn.style.backgroundColor = "#cb6934";

		var adminNum = sessionStorage.getItem("adminNumber");
		for (var h = 1; h <= adminNum; h++) {
			var adminInfo = sessionStorage.getItem("adminInfo"+h)
			var ObjInfo = JSON.parse(adminInfo);
			var adminName = ObjInfo.fullname;
			var adminMail = ObjInfo.Email;
			var reporterName = '<?php echo $_SESSION['sessionfname1']; ?>';
			var department = '<?php echo $data1['Department']; ?>';
			var reporterUname = '<?php echo $_SESSION['sessionuname1']; ?>';
			// sendToTheBack(reporterUname);
			if (h == adminNum) {
				sendMail(adminMail,adminName,reporterName,department,reporterUname)
			}
			else {
				sendMail2(adminMail,adminName,reporterName,department,reporterUname)
			}
			
		}
		
		
		//sendMail(adminMail,adminName,reporterName,facilName,reporterUname)
	})


</script>
</html>