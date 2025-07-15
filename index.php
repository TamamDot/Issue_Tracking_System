<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo1.png">
	<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.5.1/css/pro.min.css">
	<link rel="stylesheet" type="text/css" href="font.css">
</head>
<?php session_start();?>
<style type="text/css">
	*{
		margin:0px;
	}
	html,body{
		height:100%;
		min-height:400px;
	}
	body{
		
		background-image:url('bgimg6.jpg');
		background-size:cover;
		background-position:center;
		background-repeat:no-repeat;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	form{
		width:65%;
		max-width:1000px;
		height:90%;
		max-height:630px;
		display:flex;
		justify-content:space-between;
	}
	.banner1{
		width:50%;
		height:100%;
		backdrop-filter:blur(10px);
		background-color:rgba(255,255,255,.4);
		display:flex;
		justify-content:flex-start;
		flex-direction:column;
		border-radius:10px 0px 0px 10px;
		box-shadow:-2px 3px 5px rgba(0, 0, 0, .7);
	}
	.topSect{
		width:100%;
		height:20%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
	}
	.topSect img{
		width:30%;
		margin-left:20px;
	}
	.middleSect{
		width:100%;
		height:70%;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
	}
	.middleSect .top{
		width:100%;
		height:10%;
		display:flex;
		justify-content:center;
		align-items:center;
		font-size:30px;
		font-family:'Montserrat',sans-serif;
		font-weight:bolder;
		
		transform:translateY(30%);
	}
	.top i{
		margin-right:20px;
		color:black;
	}
	.middleSect .inputCont{
		width:100%;
		height:90%;
		display:flex;
		justify-content:flex-start;
		flex-direction:column;
	}
	.inputCont .inputContainer{
		width:100%;
		height:21%;
		display:flex;
		flex-wrap:wrap;
		margin-top:40px;
	}
	.label{
		width:100%;
		height:85%;
		z-index:1;
		font-size:16px;
		font-family:'Comfortaa',sans-serif;
		padding-left:30px;
		transform:translateY(25%);
		font-style:italic;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		color:rgba(255,255,255,.7);
		cursor:text;
	}	
	.label i {
		margin:0px 15px 0px 5px;
		font-size:17px;
		transform:translateY(-15%);
	}
	.input{
		width:100%;
		height:100%;
		z-index:0;
		transform:translateY(-70%);
		display:flex;
		justify-content:flex-start;
		align-items:center;
	}
	.input input{
		width:85%;
		border-radius:5px 5px 0px 0px;
		border:none;
		outline:none;
		border-bottom:3px solid #595959;
		height:75%;
		background-color:transparent;
		margin-left:20px;
		padding-left:20px;
		background-color:rgba(0, 0, 0, .2);
		font-family:'Montserrat',sans-serif;
		color:white;
		font-size:16px;
		transition:all .4s ease;
	}
	.input i{
		transform:translateX(-200%);
		font-size:18px;
		cursor:pointer;
		transition:all .5s ease;
	}
	.input input:focus{
		background-color:rgba(255, 255, 255, .7);	
		border-bottom:3px solid #3190af;
		color:black;
	}
	.buttonContainer{
		width:100%;
		height:20%;
		margin-top:40px;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.buttonContainer button{
		width:80%;
		height:70%;
		border:none;
		border-radius:10px;
		color:white;
		font-size:20px;
		font-family:'Comfortaa',sans-serif;
		background-color:#536779;
		box-shadow:0px 0px 3px 2px rgba(0, 0, 0, .5);
		transition:all .6s ease;
		cursor:pointer;
	}
	.buttonContainer button:hover{
		background-color:#30827d;
		box-shadow:0px 0px 5px 5px rgba(49, 129, 124, .5);
	}
	.buttonContainer button i{
		margin-left:15px;
	}
	.banner2{
		width:50%;
		height:100%;
		background-image:linear-gradient(45deg,rgba(0,0,0,.3),rgba(0,0,0,.3)), url('bgimg7.jpg');
		background-size:cover;
		background=position:center;
		background-repeat:no-repeat;
		display:flex;
		justify-content:center;
		flex-direction:column;
		align-items:center;
		text-align:center;
		z-index:1;
		border-radius:0px 10px 10px 0px;
		box-shadow:-2px 0px 5px rgba(0, 0, 0, .6),2px 0px 5px rgba(0, 0, 0, .6);
	}
	.cont1{
		width:100%;
		height:60%;
		display:flex;
		justify-content:center;
		flex-direction:column;
		align-items:center;
		text-align:center;
	}
	.cont1 img{
		width:70%;
	}
	.cont1 p{
		font-family:'Montserrat',sans-serif;
		color:white;
	}
	.cont1 p:nth-child(2){
		font-size:30px;
		margin-top:15px;
	}
	.cont1 p:nth-child(3){
		font-size:12px;
		font-weight:bolder;
		color:white;
		margin-top:15px;
	}
	.errorMSG{
		width:100%;
		height:0%;
		display:none;
		justify-content:flex-start;
		align-items:flex-start;
		flex-direction:column;
		transition:all .5s ease;

	}
	.errorMSG span{
		width:90%;
		height:20%;
		display:flex;
		justify-content:flex-start;
		margin:20px;
		border-radius:5px;
		align-items:center;
		background-color:rgba(172, 57, 57,.5);
		font-size:14px;
		font-family:'Comfortaa',sans-serif;
		font-weight:bolder;
		text-transform:capitalize;
		color:rgba(60, 16, 16,.5);
		box-shadow:2px 2px 5px rgba(0, 0, 0, .3);
		opacity:0%;
		transform:translateY(50%);	
	}
	.errorMSG span i{
		margin:0px 10px;
		font-size:20px;
		color:#501616;
	}
	@keyframes appear{
		0%{
			opacity:0%;
		}
		100%{
			opacity:100%;
		}
	}
	@media only screen and (max-width:600px){
		form{
			width:95%;
			max-width:100%;
			height:90%;
			max-height:100%;
			align-items:center;
			flex-direction:column;
		}
		.banner1{
			width:100%;
			height:70%;
			border-radius:10px 10px 0px 0px;
			z-index:1;
		}
		.banner2{
			width:100%;
			height:30%;
			z-index:0;
			/*transform:translateY(-100%);*/
		}
		.topSect img{
			width:30%;
		}
		.middleSect{
			height:80%;
		}
		.middleSect .top{
			font-size:25px;	
			transform:translateY(20%);
		}
		.middleSect .top i{
			margin-right:10px;	
		}
		.middleSect .inputCont{
			align-items:center;
			
		}
		.inputCont .inputContainer{
			width:95%;
			height:60%;
			
		}
		.label{
			padding-left:10px;
			font-size:14px;
		}
		.label i{
			font-size:12px;

		}
		.input input{
			width:95%;
			margin-left:0px;
			padding-left:10px;
		}
		.buttonContainer{
			width:100%;
			height:60%;
			margin-top:20px;
		}
		.banner2 img{
			width:40%;
		}
	}
</style>
<body>
	<!-- Form data send to authentication-form.php for verification !-->
	<form action="authentication-form.php" method="POST">
		<div class="banner1">
			<div class="topSect">
				<img src="logo.png">
			</div>

			<div class="middleSect">
				<div class="top">
					<i class="fad fa-server"></i>
					<p>Login Account</p>
				</div>
				<div class="inputCont">
					<div class="inputContainer">
						<span class="label" onclick="inputFocus(1)" id="label1">
							<i class="fad fa-user"></i>
							<p>Enter Your Username</p>
						</span>
						<span class="input">
							<input type="text" name="uname1" id="input1" onfocus="inputFocus(1)">
						</span>
					</div>

					<div class="inputContainer">
						<span class="label" onclick="inputFocus(2)" id="label2">
							<i class="fad fa-lock-keyhole"></i>
							<p>Enter Your Password</p>
						</span>
						<span class="input">
							<input type="password" name="pass1" id="input2" onfocus="inputFocus(2)">
							<i class="fad fa-eye" onclick="showPass()"></i>
						</span>
					</div>

					<div class="buttonContainer">
						<button type="submit" name="signin">Login <i class="fad fa-right-to-bracket"></i></button>	
					</div>
				</div>
			</div>
		</div>
		<div class="banner2">
			<div class="cont1">
				<img src="laptopImg.png">
				<p>Issue Tracking</p>
				<p>We at GGHN are a big family and everyone issue matters</p>
			</div>
			<div class="errorMSG">
				<span>
					<i class="fad fa-circle-exclamation"></i>
					<p>Incorrect Username Entered</p>
				</span>
				<span>
					<i class="fad fa-circle-exclamation"></i>
					<p>Incorrect Username entered</p>
				</span>
			</div>
		</div>
	</form>
</body>
<?php 
	if (isset($_SESSION['errors'])) {
		$errorArray = $_SESSION['errors'];
	}
	else {
		$errorArray = [];
	}
	
	$arrayLen = count($errorArray);
	echo "<script>var errorArray = [];</script>";
	if ($arrayLen > 0) {
		for ($i = 0; $i < $arrayLen; $i++) {
			echo "<script>
				errorArray.push('{$errorArray[$i]}')
			</script>";
		}

	}
?>
<script type="text/javascript">
	// localStorage.clear();
	sessionStorage.clear();

	//input field focus animation
	function inputFocus(Id){
		document.getElementById("label"+Id).style.transform = "translateY(-43%)";
		document.getElementById("label"+Id).style.fontSize = "12px";
		document.getElementById("label"+Id).style.transition = "all .4s ease";
		document.getElementById("label"+Id).style.color = "black";
		document.getElementById("label"+Id).style.fontStyle = "normal";
		document.getElementById("input"+Id).focus();
	}


	//checking for any error and displaying error message if any found
	if (errorArray.length > 0) {
		var counter = 0;
		var errorCont = document.querySelector(".errorMSG");
		errorCont.style.display = "flex";

		var errorContAppear = setInterval(() => {
			if (counter > 0) {
				clearInterval(errorContAppear);
				counter = 0
			}
			else {
				counter++;
				showError(errorArray.length);
			}
		},500)
	}
	function showError(errorNum) {

		var errorCont = document.querySelector(".errorMSG");
		var errorSpan = document.querySelectorAll(".errorMSG span");
		errorCont.style.height = "50%";
		errorCont.style.transition = "all .5s ease";
		for (var t = 0; t < errorNum; t++) {
			errorSpan[t].style.opacity = "100%";
			errorSpan[t].style.transform = "translateY(0%)";
			errorSpan[t].style.transition = "all .5s ease .3s";

			if (errorArray[t] == 1) {
				errorSpan[t].querySelector("p").innerHTML = "No Username Entered";
			}
			else if (errorArray[t] == 2) {
				errorSpan[t].querySelector("p").innerHTML = "No Password Entered";
			}
			else if (errorArray[t] == 3) {
				errorSpan[t].querySelector("p").innerHTML = "Inccorect Username Entered";
			}
			else if (errorArray[t] == 4) {
				errorSpan[t].querySelector("p").innerHTML = "Inccorect Password Entered";
			}
		}
	}

	function showPass(){
		var input = document.getElementById("input2");
		if (input.type === "password") {
			input.type = "text";
		}
		else {
			input.type = "password"
		}
	}
</script>
</html>