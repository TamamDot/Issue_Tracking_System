<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>t</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo1.png">
	<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.5.1/css/pro.min.css">
	<link rel="stylesheet" type="text/css" href="font.css">
</head>
<style type="text/css">
	*{
		margin:0px;
	}
	html,body{
		height:100%;
		min-height:400px;
	}
	body{
		background-color:white;
		display:flex;
		justify-content:center;
		align-items:center;
	}
		.tableCont{
			width:100%;
			height:85%;
			display:flex;
			flex-wrap:wrap;
			align-items:flex-start;
		}
		.innerTable{
			width:100%;
			height:100%;

		}
		.innerTable::-webkit-scrollbar{
			width:10px;
			background-color:rgba(26, 127, 153,.7);
			border-radius:10px;
		}
		.innerTable::-webkit-scrollbar-thumb{
			background-color:#2f5e6a;
			border-radius:10px;
		}
		.table{
			width:100%;
			height:100%;
			display:flex;
			justify-content:center;
		}
		.smallerBanner{
			width:100%;
			height:100%;
			display:flex;
			justify-content:center;
			align-items:center;
			z-index:-1;
			transform:translateY(-100%);

		}
		form{
			width:100%;
			height:100%;
			display:flex;
			justify-content:center;
			align-items:flex-start;
		}
		.statusChanger{
			width:40%;
			height:40%;
			margin-top:30px;
			border-radius:10px;
			display:flex;
			justify-content:space-between;
			flex-direction:column;
			background-color:#e6e6e6;
			box-shadow:0px 0px 5px 4px rgba(0, 0, 0, .4);
			animation:appear .6s ease;
		}
		.topHead{
			width:100%;
			height:20%;
			border-radius:10px 10px 0px 0px;
			background-color:#4b739b;
			display:flex;
			justify-content:flex-start;
			align-items:center;
			font-size:15px;
			font-family:'Montserrat',sans-serif;
		}
		.topHead p{
			margin-left:7px;
			color:white;
		}
		.topHead i{
			margin-left:20px;
			color:#99badb;
			font-size:18px;
		}
		.statsContent{
			width:100%;
			height:80%;
			display:flex;
			justify-content:space-evenly;
			align-items:flex-start;
			flex-direction:column;
		}
		.Cont{
			width:100%;
			height:25%;
			display:flex;
			justify-content:center;
			flex-wrap:wrap;
		}
		.innerCont{
			width:100%;
			height:100%;
			display:flex;
			justify-content:center;
			align-items:center;
		}
		.innerCont span{
			width:10%;
			height:104%;
			border-radius:0px 5px 5px 0px;
			background-color:#119dc0;
			display:flex;
			justify-content:center;
			align-items:center;
			color:#a1e6f7;
		}
		.optList {
			width:60%;
			height:80px;
			max-height:0px;
			opacity:0%;
			border-radius:5px 0px 0px 5px;
			box-shadow:-2px 1px 5px rgba(0, 0, 0, .5);
			z-index:1;
			display:flex;
			justify-content:space-between;
			flex-direction:column;
			background-color:#6087af;
			overflow-y:scroll;
			margin-top:10px;
			text-transform:capitalize;
			transition:all .5s ease;
		}
		.optList.active{
			max-height:80px;
			opacity:100%;
		}
		.optList::-webkit-scrollbar{
			width:5px;
			background-color:#8499ae;
		}
		.optList::-webkit-scrollbar-thumb{
			background-color:#5b738b;
		}
		.opt1{
			width:92.2%;
			height:30%;
			padding:15px 10px;
			font-size:14px;
			font-family:'Comfortaa',sans-serif;
			cursor:pointer;
			transition:all .5s ease;
		}
		.opt1 i{
			margin-left:10px;
		}
		.opt1:hover{
			color:white;
			background-color:#4493a7;
		}
		.statsContent input{
			width:70%;
			height:100%;
			padding-left:10px;
			font-family:'Hibana',sans-serif;
			margin-left:20px;
			border-radius:7px 0px 0px 7px;
			border:none;
			outline:none;
			background-color:white;
			box-shadow:inset 0px 0px 5px 2px rgba(0,0,0,.3);
			text-transform:capitalize;
		}
		.statsContent input:focus{
			box-shadow:0px 0px 5px 2px rgba(0,0,0,.3);
		}
		.statsContent button{
			margin-left:50px;
			width:30%;
			height:25%;
			background-color:#788ca1;
			color:white;
			font-size:16px;
			font-family:'Montserrat',sans-serif;
			border-radius:20px;
			border:none;
			transition:all .5s ease;
			cursor:pointer;
		}
		.statsContent button:hover{
			background-color:#4d7eb3;
			box-shadow:-2px 2px 3px rgba(0, 0, 0, .5);
		}
		.statsContent button i{
			margin-left:10px;
			color:black;
			font-size:20px;
		}
		.chatCont{
			width:53%;
			height:80%;
			display:flex;
			flex-wrap:wrap;
			align-items:center;
			transform:translateY(-10%);
			animation:appear .6s ease;
		}
		@keyframes appear {
			0%{
				opacity:0%;
			}

			100%{
				opacity:100%;
			}
		}
		.chats{
			width:100%;
			height:100%;
			display:flex;
			justify-content:space-betwee;
			align-items:center;
			flex-direction:column;
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
	/*		background-image:url('chatbg1.jpg');
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
		
</style>
<body>

	<div style="width:100%; height:550px; background-color:#f2f2f2; margin-left:auto; margin-right:auto; font-family:'Verdana',sans-serif;">
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
										<div style="width:90%; height:85%;" align="left">
											<div style="font-size:clamp(20px, 1.7vw, 30px); text-transform:capitalize;">Dear `+userName+`,</div>
											<div style="font-size:clamp(13px, 1.2vw, 20px); line-height:1.6; margin-top:10px;">
												You have been registered to our issue tracking tool, GGHN. You were register as `+userPos+` for `+facilName+` in `+stateVal+` State. You will be reporting to  your State Admin, they will be in charge assigning any reported issue. In case of any enquiry about the system you may contact the State Admin. Your Username for your account is `+userMail+` and your Temporary Password is `+tempPassword+`. Click the link below to set up your password  Thank You 
											</div>
											<div style ='height:20%; width:100%;  margin-top:20px;'>
												<i style ='color:#d9d9d9;'>Note : if the name above is not your or you do not work in GGHN. Please ignore thanks</i>
											</div>
										</div>
									</td>
								</tr>
								<tr style="background-color:white; border:.5px solid rgba(0, 0, 0, .0);">
									<td colspan="2" style="height:65px;">
										<a href ='localhost/Issue_Tracking/login2.php' style='text-decoration:none; cursor:pointer;'>
											<button style = 'width:22%; min-width:200px; height:70%; min-height:45px; margin-left:30px; background-color:#23907a; border:none; border-radius:10px; color:white; font-size:clamp(12px, 1vw, 17px); cursor:pointer;'>Setup Password</button>
										</a>
									</td>
								</tr>
							</table>
						</div>



	<button type = "button" onclick="test()">Test</button>
	<br>
	<br>
	<p id="rand"></p>
</body>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">
	var textArray = ["a","b","c","d","e","f","g","h","i","g","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9"];
	// alert(textArray.length);
	for (f = 0; f <= 5; f++) {
		var textRand = Math.floor(Math.random() * 36);
		document.getElementById("rand").innerHTML += textArray[textRand];
	}
	
	var mediaQuery1 = window.matchMedia("(max-width:700px)");
	if (mediaQuery1.matches) {
		var screen = 100;
	}
	else {
		var screen = 60;
	}
	function sendMail(userMail,userName,userPos,stateVal,facilName,tempPassword){
		
				Email.send({
			    Host : 'smtp.elasticemail.com',
			    Username : 'dweb734@gmail.com',
			    Password : '7BCBAF34E2E044C32BEC45BF4F03AFBF4B00',
			    To : userMail,
			    From : 'dweb734@gmail.com',
			    Subject : 'Welcoming You',
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
										<div style="width:90%; height:85%;" align="left">
											<div style="font-size:clamp(20px, 1.7vw, 30px); text-transform:capitalize;">Dear `+userName+`,</div>
											<div style="font-size:clamp(13px, 1.2vw, 20px); line-height:1.6; margin-top:10px;">
												You have been registered to our issue tracking tool, GGHN. You were register as `+userPos+` for `+facilName+` in `+stateVal+` State. You will be reporting to  your State Admin, they will be in charge assigning any reported issue. In case of any enquiry about the system you may contact the State Admin. Your Username for your account is `+userMail+` and your Temporary Password is `+tempPassword+`. Click the link below to set up your password  Thank You 
											</div>
											<div style ='height:20%; width:100%;  margin-top:20px;'>
												<i style ='color:#d9d9d9;'>Note : if the name above is not your or you do not work in GGHN. Please ignore thanks</i>
											</div>
										</div>
									</td>
								</tr>
								<tr style="background-color:white; border:.5px solid rgba(0, 0, 0, .0);">
									<td colspan="2" style="height:65px;">
										<a href ='localhost/Issue_Tracking/login2.php' style='text-decoration:none; cursor:pointer;'>
											<button style = 'width:22%; min-width:200px; height:70%; min-height:45px; margin-left:30px; background-color:#23907a; border:none; border-radius:10px; color:white; font-size:clamp(12px, 1vw, 17px); cursor:pointer;'>Setup Password</button>
										</a>
									</td>
								</tr>
							</table>
						</div>
` 
				}).then(
			  		message => message == "OK" ?  console.log(message): alert(message),
			  		
				);
	}
	function  test () {
		sendMail('bashiramir476@gmail.com','Saadatu Surname','name','name','name','name','name');
	}
</script>
</html>	

