<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tool Tracking</title>
	<link rel="shortcut icon" type="image/x-icon" href="../logo1.png">
	<link rel="stylesheet" type="text/css" href="../font.css">
	<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.5.1/css/pro.min.css">
</head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" type="text/css" href="inventory.css">
<link rel="stylesheet" type="text/css" href="inventoryDoc.css">
<style>
	*{
		margin:0;
	}
	body,html{
		height:100%;
		min-height:400px;
	}
	body{
		width:100%;
		display:flex;
		justify-content:space-between;
		background-image:linear-gradient(45deg,rgba(191, 191, 191,.4), rgba(191, 191, 191,.7)), url('../bgimg11.jpg');
		background-position:center;
		background-repeat:no-repeat;
		background-size:cover;
		backdrop-filter:blur(4px);
	}
	.navBar{
		width:9%;
		height:100%;
		display:flex;
		align-items:center;
		justify-content:center;
		
	}
	.Bar{
		width:60%;
		height:95%;
		border-radius:30px;
		background-color:#33404d;
		box-shadow:0px 0px 5px 2px rgb(0, 0, 0, .5);
		display:flex;
		justify-content:space-between;
		flex-direction:column;
	}
	.Bar .top{
		width:100%;
		height:70%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
		flex-direction:column;
	}
	.navElem{
		width:70%;
		height:12%;
		display:flex;
		justify-content:center;
		align-items:center;
		margin-top:20px;
		border-radius:10px;
		color:white;
		cursor:pointer;
		transition:all .3s ease;
	}
	.navElem:hover{
		background-color:rgb(71, 89, 107, .7);
		box-shadow:1px 1px 5px rgba(0,0,0,.7);
	}
	.navElem:hover i{
		color:#36baaa;
	}
	.navElem.active{
		background-color:rgb(71, 89, 107, .7);
		box-shadow:1px 1px 5px rgba(0,0,0,.7);
	}
	.navElem.active i{
		color:#3abedf;
	}
	.navElem i{
		font-size:20px;
		transition:all .3s ease;
	}
	.Bar .bottom{
		width:100%;
		height:10%;
		display:flex;
		justify-content:center;
		align-items:center;
		
	}
	.Bar .bottom .navElem{
		width:100%;
		height:100%;
		margin-top:0px;
		border-radius:0px 0px 29px 29px;
	}
	.bottom .navElem:hover{
		box-shadow:0px -2px 5px rgba(0, 0, 0, .7);
	}
	.content{
		width:90%;
		height:100%;
		display:flex;
		justify-content:space-between;
	}
	
	@keyframes appear{
		0%{
			opacity:0%;
		}
		100%{
			opacity:100%;
		}
	}

</style>
<body>
	<div class="navBar">
		<div class="Bar">
			<div class="top">
				<span class="navElem active" onclick="navPage(1)">
					<i class="fad fa-house"></i>
				</span>

				<span class="navElem" onclick="navPage(2)">
					<i class="fad fa-building-circle-arrow-right"></i>
				</span>

				<span class="navElem" onclick="navPage(3)">
					<i class="fad fa-envelope-open-text"></i>
				</span>

				<span class="navElem" onclick="navPage(4)">
					<i class="fad fa-truck-medical" style="transform:rotateY(180deg)"></i>
				</span>
			</div>
			<div class="bottom">
				<span class="navElem">
					<i class="fad fa-right-from-bracket"></i>
				</span>
			</div>
		</div>
	</div>

	<div class="content">
	</div>	

</body>
<?php 
	require 'inventory-inc.php';
?>
<script type="text/javascript" src="dashboard.js"></script>
<script type="text/javascript" src="table1.js"></script>
<script type="text/javascript" src="inventory_doc.js"></script>
<script type="text/javascript">
	var navElem = document.querySelectorAll(".navElem");
	if (sessionStorage.getItem("dashNum")) {
		var dashBoardNum = sessionStorage.getItem("dashNum");
		navPage(dashBoardNum);
	}
	else {
		var dashBoardNum = 1;
		navElem[dashBoardNum-1].classList = "navElem active";
		navPage(dashBoardNum);
	}

	function navPage(pageNumber){
		var counter = 0;
		document.querySelector(".content").style.animation = "appear .3s ease-in";
		var removeAnima = setInterval(() => {
			if (counter > 0) {
				clearInterval(removeAnima);
				counter = 0;
			}
			else {
				counter++;
				document.querySelector(".content").style.animation = "none";					
			}
		},500)

		sessionStorage.setItem("dashNum",pageNumber);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function () {
		//alert(this.responseText);
			document.querySelector(".content").innerHTML = this.responseText;
			if (pageNumber == 1) {
				dashboard();
				document.getElementById("toolView").onclick = function () {
					navPage('1_2');
					sessionStorage.removeItem("docToolID");
				}
			}
			else if (pageNumber == "1_2") {
				inventoryList();
			}
		}
		xhttp.open("POST","tracking-inc.php");
		xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp.send("dashboardNum="+pageNumber)

		if (pageNumber == "1_2") {
			var num = "1";
		}
		else {
			var num = pageNumber;
		}
		for (var t = 1; t <= 4; t++) {
			if (num == t) {
				navElem[t-1].classList = "navElem active";
			}
			else {
				navElem[t-1].classList = "navElem";
			}
		}
	}

	function test() {
		alert("jjj");
	}
	

</script>
</html>