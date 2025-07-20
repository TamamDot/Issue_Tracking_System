function inventoryList(){
	var pointElem = document.querySelectorAll(".point");
	for (var i = 0; i < 6; i++) {
	
		pointElem[i].onclick = function () {
			var elemClass = this.className;
			var elemNum = elemClass.split(" ");	
			for (var t = 1; t <= 6; t++) {
				if (t == elemNum[1]) {
					pointElem[t-1].className = "point "+t+" active";
				}
				else {
					pointElem[t-1].className = "point "+t;
				}
			}
		}
	}

	function createRow(row_num){
		var tabs = document.getElementById("table1");
		var tr1 = document.createElement("tr");	
		tr1.setAttribute("id","tableRow"+row_num);
		tabs.appendChild(tr1);
	}	

	function createColumn(rowNumber,colNumber) {
		var tr = document.getElementById("tableRow"+rowNumber);
		var td = document.createElement("td");
		var p = document.createElement('p');
		var span = document.createElement('span');
		span.className = "docBtn";
		var i = document.createElement('i');

		if (colNumber == 7) {
			span.addEventListener("click",() => {dets(rowNumber)});
			i.className = "fas fa-money-check-pen";
			span.appendChild(i);
			td.appendChild(span);
			tr.appendChild(td);	
		}
		else if (colNumber == 2) {
			p.setAttribute("id","tableCol"+rowNumber+"_"+colNumber);
			span.setAttribute("id","spanCol"+rowNumber+"_"+colNumber);
			span.appendChild(p);
			td.appendChild(span);
			tr.appendChild(td);	
		}

		else {
			p.setAttribute("id","tableCol"+rowNumber+"_"+colNumber);
			td.appendChild(p);
			tr.appendChild(td);
		}
		
	}

	var indexArray = [];
	var toolNum = sessionStorage.getItem("toolNumber");
	for (var e = 1; e < toolNum; e++) {
		createRow(e)
		for (var j = 1; j <= 7; j++) {
			createColumn(e,j)
		}
		document.getElementById("tableCol"+e+"_1").innerHTML = e;
		document.getElementById("tableCol"+e+"_2").innerHTML = sessionStorage.getItem("tool_Name"+e);
		multiColor(e,indexArray);
		document.getElementById("tableCol"+e+"_3").innerHTML = sessionStorage.getItem("dateVal"+e);
		document.getElementById("tableCol"+e+"_4").innerHTML = sessionStorage.getItem("orgAmt"+e);
		document.getElementById("tableCol"+e+"_5").innerHTML = sessionStorage.getItem("distAmt"+e);
		var total = sessionStorage.getItem("orgAmt"+e);;
		var distAmt = sessionStorage.getItem("distAmt"+e);;
		document.getElementById("tableCol"+e+"_6").innerHTML = total - distAmt;
		
	}
	function multiColor(ID,numArray){
		var colorArray = ['green','blue','red'];
		var colorIndex = Math.floor(Math.random() * 3)
		var color_num = noRepeat(numArray,colorIndex);
		var colorVal = colorArray[color_num];
		if (colorVal == "blue") {
			document.getElementById("spanCol"+ID+"_2").style.backgroundColor = "rgba(96, 130, 164,.3)";
			document.getElementById("spanCol"+ID+"_2").style.border = "1px solid #4a6682";
			document.getElementById("spanCol"+ID+"_2").style.color = "#4f7396";
		}
		else if (colorVal == "green") {
			document.getElementById("spanCol"+ID+"_2").style.backgroundColor = "rgba(42, 162, 148,.3)";
			document.getElementById("spanCol"+ID+"_2").style.border = "1px solid #1f7a6f";
			document.getElementById("spanCol"+ID+"_2").style.color = "#1a655e";
		}
		else if (colorVal == "red") {
			document.getElementById("spanCol"+ID+"_2").style.backgroundColor = "rgba(175, 96, 135,.3)";
			document.getElementById("spanCol"+ID+"_2").style.border = "1px solid #884466";
			document.getElementById("spanCol"+ID+"_2").style.color = "#994d73";
		}
	}

	function noRepeat(array,colorNum){
		if (array.length == 3) {
			array = []
			if (array.includes(colorNum) == true) {
				var newColorNum = Math.floor(Math.random() * 3)
				return noRepeat(array,newColorNum);
			}
			else {
				array.push(colorNum)
				return colorNum;
			}
		}
		else {
			if (array.includes(colorNum) == true) {
				var newColorNum = Math.floor(Math.random() * 3)
				return noRepeat(array,newColorNum);
			}
			else {
				array.push(colorNum)
				return colorNum;
			}
		}
	}

	function dets(ID) {
		var counter = 0;
		var toolNameVal = document.getElementById("tableCol"+ID+"_2").innerHTML;
		sessionStorage.setItem("docToolName",toolNameVal);
		sessionStorage.setItem("docToolID",ID);
		
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function () {
			document.querySelector(".content").innerHTML = this.responseText;
			var state_perc1 = document.getElementById("state1").value;
			var state_perc2 = document.getElementById("state2").value;
			var state_perc3 = document.getElementById("state3").value;
			drawArc(state_perc1,state_perc2,state_perc3);

			document.getElementById("returnBtn").addEventListener("click",() => {
				sessionStorage.removeItem("docToolID");
				navPage("1_2");
			})
		}
		xhttp.open("POST","tracking-inc.php");
		xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp.send("inven_doc="+toolNameVal);
	}

	if (sessionStorage.getItem("docToolID")) {
		var tool_id = sessionStorage.getItem("docToolID");
		dets(tool_id);
	}

	function drawArc(statePerc1,statePerc2,statePerc3) {

		var canvas = document.querySelector("canvas");
		var c = canvas.getContext("2d");
		
		var percDiff1 = statePerc1 / 100;
		var percDiff2 = statePerc2 / 100;
		var percDiff3 = statePerc3 / 100;

		canvas.width = "375";
		canvas.height = "292";
		var W = canvas.width;
		var H = canvas.height;

		var degree1 = Math.round(360 * percDiff1);
		var degree2 = Math.round(360 * percDiff2);
		var degree3 = Math.round(360 * percDiff3);

		if (degree1 > 120) {
			var reduceVal = 120 - degree1;
			var remnant1 = 0;
			var remnant2 = reduceVal;
			var remnant3 = degree3 - 120;
		}
		else if (degree2 > 120) {
			var reduceVal = 120 - degree2;
			var remnant2 = 0;
			var remnant3 = reduceVal;
			var remnant1 =  degree1 - 120;
		}
		else if (degree3 > 120) {
			var reduceVal = 120 - degree3;
			var remnant3 = 0;
			var remnant1 = reduceVal;
			var remnant2 = degree2 - 120;
		}
		else{
			var remnant1 = 0;
			var remnant2 = 0;
			var remnant3 = 0;
		}

		var radians1 = degree1 * Math.PI / 180;
		c.beginPath();
		c.strokeStyle = "#8ea7be";
		c.shadowBlur = 7;
		c.shadowColor = "rgba(0,0,0,.9)";
		c.lineWidth = "55";
		c.arc(W/2,H/2,110,0 - (90 + remnant1) * Math.PI/180,radians1 - (90 + remnant1) * Math.PI/180,false)
		c.stroke();
		if (degree1 > 0) {
			c.font = "20px Montserrat";
			c.fillStyle = "white";
			var startAngle = 0 - (90 + remnant1) * Math.PI/180;
			var endAngle = radians1 - (90 + remnant1) * Math.PI/180;
			var textX = W/2 + 110 * Math.cos((startAngle + endAngle) / 2) - 17;
			var textY = H/2 + 110 * Math.sin((startAngle + endAngle) / 2) + 10;
			c.fillText(statePerc1+"%",textX,textY);
		}



		var radians2 = degree2 * Math.PI/ 180;
		c.beginPath();
		c.strokeStyle = "#547492";
		c.lineWidth = "55";
		c.arc(W/2,H/2,110,0 - (-30 + remnant2) * Math.PI / 180, radians2 - (-30 + remnant2) * Math.PI / 180, false);
		c.stroke();

		if (degree2 > 0) {
			c.font = "20px Montserrat";
			var startAngle2 = 0 - (-30 + remnant2) * Math.PI / 180;
			var endAngle2 = radians2 - (-30 + remnant2) * Math.PI / 180;
			var textX2 = W/2 + 110 * Math.cos((startAngle2 + endAngle2) / 2) - 17;
			var textY2 = H/2 + 110 * Math.sin((startAngle2 + endAngle2) / 2) + 10;
			c.fillText(statePerc2+"%",textX2,textY2)
		}

		var radians3 = degree3 * Math.PI / 180;
		c.beginPath();
		c.strokeStyle = "#2f4051";
		c.lineWidth = "55";
		c.arc(W/2,H/2,110,0 - (210 + remnant3) * Math.PI / 180, radians3 - (210 + remnant3) * Math.PI / 180, false);
		c.stroke();
		if (degree3 > 0) {
			c.font = "20px Montserrat";
			var startAngle3 = 0 - (210 + remnant3) * Math.PI / 180;
			var endAngle3 = radians3 - (210 + remnant3) * Math.PI / 180;
			var textX3 = W/2 + 110 * Math.cos((startAngle3 + endAngle3) / 2) - 17;
			var textY3 = H/2 + 110 * Math.sin((startAngle3 + endAngle3) / 2) + 10;
			c.fillText(statePerc3+"%",textX3,textY3)
		}
	}


}