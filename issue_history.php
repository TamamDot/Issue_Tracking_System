<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reported Issue</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo1.png">
	<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.5.1/css/pro.min.css">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<?php session_start();?>
<style type="text/css">
	*{
		margin:0px;
	}
	body,html{
		height:100%;
		min-height:400px;
	}
	body{
		background-image:linear-gradient(45deg,rgba(0,0,0,.4),rgba(0,0,0,.4)),url('bgimg1.jpg');
		background-size:cover;
		background-position:center;
		background-repeat:no-repeat;
		display:flex;
		justify-content:space-between;
		flex-direction:column;
	}
	form{
		width:100%;
		height:86%;
		display:flex;
		justify-content:center;
		align-items:flex-start;
		background-color:white;

	}
	.tableCont{
		width:98%;
		height:95%;
		display:flex;
		justify-content:flex-end;
		align-items:center;
		flex-direction:column;
		overflow-y:scroll;
		margin-top:10px;
	}
	.tableTop{
		width:100%;
		height:15%;
		display:flex;
		justify-content:space-between;
		align-items:center;
		background-color:#303350;
	}
	.tableTop .sect1{
		width:95%;
		height:100%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
	}
	.tableTop .sect2{
		width:5%;
		height:100%;
		display:flex;
		justify-content:flex-start;
		align-items:center;
	}
	.tableTop p{
		color:white;
		font-family:'Nunito',sans-serif;

		margin:0px 15px;
	}
	.tableTop i{
		color:white;
		font-size:20px;
		transform:translateX(150%);
	}
	.tableTop input{
		width:17%;
		height:50%;
		border:1.5px solid white;
		background-color:transparent;
		border-radius:10px;
		padding-left:40px;
		color:white;
		font-size:15px;
		font-family:"Comfortaa",sans-serif;
		outline:none;
		text-transform:capitalize;
	}
	input::placeholder {
		color:white;
		font-style:italic;
	}
	.filterPoint{
		width:8.5%;
		max-width:105px;
		border-radius:30px;
		border:1px solid white;
		height:50%;
		max-height:50px;
		display:flex;
		justify-content:space-evenly;
		align-items:center;
		background-color:transparent;
		text-transform:capitalize;
		font-size:clamp(12px, .95vw, 13px);
		color:white;
		margin-right:10px;
		cursor:pointer;
		transition:all .4s ease;
	}
	.filterPoint:nth-child(4){
		margin-left:20px;
	}
	.filterPoint:nth-child(5),:nth-child(7),:nth-child(8){
		width:12.5%;
		max-width:185px;
	}	
	.filterPoint.active{
		background-color:#9cc9bd;
		border:1px solid #9cc9bd;
		box-shadow:0px 0px 5px 3px rgba(81, 148, 130, .4);
	}
	.filterPoint.active:hover{
		background-color:#9cc9bd;
	}
	.filterPoint.active p{
		color:black;
		font-weight:bolder;
	}
	.filterPoint.active i{
		color:black;
	}
	.filterPoint p{
		font-family:'Comfortaa',sans-serif;
	}
	.filterPoint i{
		margin-right:10px;
		margin-left:-15px;
		font-size:clamp(16px, 1.25vw, 17px);
	}
	.filterPoint:hover{
		background-color:white;
	}
	.filterPoint:hover p{
		color:black;
	}
	.filterPoint:hover i{
		color:black;
	}
	.arch{
		width:80%;
		height:50%;
		display:flex;
		flex-wrap:wrap;		
		justify-content:center;
	}
	.arch i{
		width:100%;
		height:100%;
		display:flex;
		justify-content:center;
		align-items:center;
		transform:translateX(0px);
		cursor:pointer;
		transition:all .5s ease;
		box-shadow:0px 0px 5px 3px rgba(143, 148, 188, .4);
		border-radius:5px;
	}
	.arch p{
		width:120%;
		height:80%;
		opacity:0%;
		font-size:13px;
		background-color:rgba(0, 0, 0, .5);
		backdrop-filter:blur(4px);
		padding:5px 15px;
		transform:translateX(-30%);
		margin-top:10px;
		border-radius:10px;
		display:flex;
		justify-content:center;
		align-items:center;
		transition:all .3s ease;
	}
	.arch:hover p{
		height:100%;
		opacity:100%;
		transition:all .3s ease 1s;
	}
	.arch:hover i{
		color:#73bff2;
	}
	.tablecontainer{
		width:100%;
		height:85%;
		display:flex;
		justify-content:center;
		align-items:flex-start;
	}
	
	table{
		width:100%;
		border-collapse:collapse;
		
		border:none;
	}
	table p{
		width:60%;
		top:50%;
		left:20%;
		text-align:center;
		font-size:14px;
		font-family:'Comfortaa',sans-serif;
		font-weight:bolder;
		color:#d9d9d9;
		font-style:italic;
		text-transform:capitalize;
		position:absolute;
		word-spacing:2px;
		transition:all .4s ease;
	}
	table p:hover{
		color:black;
	}
	@keyframes loadTable{
		0%{
			opacity:0%;
		}
		100%{
			opacity:100%;
		}
	}

	tr:nth-child(even){
		background-color:rgba(80, 73, 182, .15);
	}
	th:nth-child(1){
		background-color:#303350;
		color:white;
	}
	th:nth-child(1) i{
		color:#538cc6;
	}
	tr:nth-child(odd) td:nth-child(1){
		background-color:#434770;
		color:white;
		font-weight:bolder;
	}
	tr:nth-child(even) td:nth-child(1){
		background-color:#303350;
		color:white;
		font-weight:bolder;
	}
	th{
		width:13%;
		height:20%;
		padding:15px 0px;
		padding-left:10px;
		text-align:left;
		font-family:'Nunito',sans-serif;
		color:#294057;
		border:none;
		font-size:14px;
	}
	th:nth-child(1){
		width:8%;
	}
	th:nth-child(3){
		width:30%;
	}
	th:nth-child(4){
		width:8%;
	}
	th i{
		font-size:20px;
		color:#a46d0e;
		margin-right:5px;
		margin-left:5px;
	}
	td{
		padding:20px 0px;
		padding-left:15px;
		font-size:12px;
		font-family:'Comfortaa',sans-serif;
		border:none;
		text-transform:capitalize;
	}
	td:last-child{
		padding:0px;
		cursor:pointer;
	}
	td button{
		width:60%;
		padding:15px 0px;
		margin-left:20px;
		background-color:transparent;
		border:none;
		font-size:12px;
		font-family:'Comfortaa',sans-serif;
		z-index:1;
		position:relative;
		cursor:pointer;
	}
	td:hover .hiddenArrow{
		transform:translateX(0%);
		color:black;
	}
	.hiddenArrow{
		font-size:17px;
		z-index:0;
		transform:translateX(-150%);
		transition:all .5s ease;
		color:transparent;
	}
	@media only screen and (min-height:1000px) {
		form{
			height:88%;
		}
	}
	@media only screen and (min-height:1400px) {
		form{
			height:98%;
		}
	}
</style>
<body>
<?php require 'header.php'; ?>
	<form action="complaint-inc.php" method="POST">
		<div class="tableCont">
			<div class="tableTop">
				<div class="sect1">
					<p>Filter Issues</p>
					<i class="fas fa-magnifying-glass"></i>
					<input type="text" name="search2" id="search2" placeholder="Search......">
					<span class="filterPoint active" onclick="selcCat(1)"><i class="fad fa-bug"></i> <p>issue</p></span>
					<span class="filterPoint" onclick="selcCat(2)"><i class="fad fa-memo-circle-info"></i> <p>description</p></span>
					<span class="filterPoint" onclick="selcCat(3)"><i class="fad fa-list-check"></i> <p>Status</p></span>
					<span class="filterPoint" onclick="selcCat(4)"><i class="fad fa-user-secret"></i> <p>Assigned Staff</p></span>
					<span class="filterPoint" onclick="selcCat(5)"><i class="fad fa-calendar-days"></i> <p>Reported Date</p></span>
				</div>
				<div class="sect2">
					<span class="arch">
						<i class="fad fa-file-zipper" onclick="showArch()"></i>
						<p>Archived</p>
					</span>	
				</div>
				
			</div>
			<div class="tablecontainer">
				<table border="1px" id="table1">
					<tr>
						<th><i class="fad fa-hashtag"></i> Ticket ID</th>
						<th><i class="fad fa-bug"></i>Issue</th>
						<th><i class="fad fa-memo-circle-info"></i>Description</th>
						<th><i class="fad fa-list-check"></i>Status</th>
						<th><i class="fad fa-user-secret"></i>Assigned Staff</th>
						<th><i class="fad fa-calendar-days"></i>Reported Date</th>
						<th><i class="fad fa-ellipsis-vertical"></i>Issue Details</th>
					</tr>

					<!--<tr>
						<td>#1</td>
						<td>Lost PMTCT</td>
						<td>After A Recent Update, We Lost Some Of Our Patient. 223 PMTCT Patient And 19 Recapture</td>
						<td>Ongoing</td>
						<td>Naeem Bashir</td>
						<td>23 Mar 2024</td>
						<td><button>See Details</button> <i class="fad fa-arrow-right hiddenArrow"></i></td>
					</tr>!-->
				</table>
			</div>
		</div>
		<input type="text" name="issueRow" id="issueRow" style="display:none;">
	</form>
	
</body>
<?php 
	unset($_SESSION['ticketNum']);

?>
<script type="text/javascript">
//Highlighting selected navElem
	var navElems = document.querySelectorAll(".navElem");
	navElems[1].classList.add("active");

	if (sessionStorage.getItem("tableType")) {
		var tableType = sessionStorage.getItem("tableType");
	}
	else {
		var tableType = "Open";
		sessionStorage.setItem("tableType",tableType);
	}
	//HR Customization
	var userPos = "<?php echo $_SESSION['user_pos']?>";
	if (userPos == "HR") {
		navElems[0].querySelector("a p").innerHTML = "Submitted Issue";
		navElems[0].querySelector("a").setAttribute("href","tracking_page2.php");
	}
	//loading table based on the type i.e open issues or closed issues
	var xhttp = new XMLHttpRequest();
	xhttp.onload = function () {
		//alert(this.responseText);
		document.getElementById("table1").innerHTML = this.responseText;
		document.getElementById("table1").style.animation = "loadTable .5s ease";
		var counter = 0;
		var deAnime = setInterval( () => {
			if (counter > 0) {
				
				clearInterval(deAnime);
				counter = 0;
			}
			else {
				counter++;
				document.getElementById("table1").style.animation = "none";
			}
		},300)
	}

	xhttp.open("POST","tracking-inc.php");
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded")
	xhttp.send("type="+tableType);

	// selecting filter points e,g description,status etc
	sessionStorage.setItem("categoryNum",2);
	function selcCat(id){
		sessionStorage.setItem('categoryNum',id + 1);
		var ConvId = id - 1;
		var filterPoint = document.querySelectorAll(" .filterPoint");
		for (var i = 0; i < 5; i++) {
			if (i == ConvId) {
				filterPoint[i].classList = "filterPoint active";
			}
			else {
				filterPoint[i].classList = "filterPoint";
			}
		}
	}

	//filtering based on selected filter point
	var searchBox = document.getElementById("search2");
	searchBox.addEventListener("input", () => {
		var cateNum = sessionStorage.getItem("categoryNum");
		var val = searchBox.value;

		var rowNumber = document.getElementById("rowNO").value;
		var rowNO = parseInt(rowNumber);
		
		for (var t = 1; t <= rowNO; t++) {
			var regExp = new RegExp("\\b"+val,"i");
			var colmElem = document.getElementById("Colm"+t+"_"+cateNum).innerHTML;

			if (regExp.test(colmElem)) {
				document.getElementById("Colm"+t+"_1").style.display = "table-cell";
				document.getElementById("Colm"+t+"_2").style.display = "table-cell";
				document.getElementById("Colm"+t+"_3").style.display = "table-cell";
				document.getElementById("Colm"+t+"_4").style.display = "table-cell";
				document.getElementById("Colm"+t+"_5").style.display = "table-cell";
				document.getElementById("Colm"+t+"_6").style.display = "table-cell";
				document.getElementById("Colm"+t+"_7").style.display = "table-cell";
				document.getElementById("tRow"+t).style.display = "table-row";
			}
			else {
				document.getElementById("Colm"+t+"_1").style.display = "none";
				document.getElementById("Colm"+t+"_2").style.display = "none";
				document.getElementById("Colm"+t+"_3").style.display = "none";
				document.getElementById("Colm"+t+"_4").style.display = "none";
				document.getElementById("Colm"+t+"_5").style.display = "none";
				document.getElementById("Colm"+t+"_6").style.display = "none";
				document.getElementById("Colm"+t+"_7").style.display = "none";
				document.getElementById("tRow"+t).style.display = "none";
			}
			
		}
	})
	//storing the issue rownumber before sending it to the back to redirect to the details page
	function issueDets(rowNo){
		document.getElementById("issueRow").value = rowNo;
	}


	//showing the closed issues
	function showArch() {
		document.getElementById("table1").style.animation = "loadTable .5s ease";
		
		var oldType = sessionStorage.getItem("tableType");
		if (oldType == 'Open') {
			newType = "Close";
			sessionStorage.setItem("tableType",newType);
		}
		else if (oldType == "Close") {
			newType = "Open";
			sessionStorage.setItem("tableType",newType);
		}

		var xhttp2 = new XMLHttpRequest();
		xhttp2.onload = function () {
			document.getElementById("table1").innerHTML = this.responseText;
			//alert(this.responseText);
		}
		xhttp2.open("POST","tracking-inc.php");
		xhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp2.send("type="+newType);

		var counter = 0;
		var deAnime = setInterval( () => {
			if (counter > 0) {
				//alert("l");
				clearInterval(deAnime);
				counter = 0;
			}
			else {
				counter++;
				document.getElementById("table1").style.animation = "none";
			}
		},300)
	}
</script>
</html>