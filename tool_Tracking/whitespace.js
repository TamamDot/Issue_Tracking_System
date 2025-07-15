window.onload = function () {
	var canvas = document.querySelector("canvas");
	var c = canvas.getContext("2d");

	canvas.width = "500";
	canvas.height = "500";
	var W = canvas.width;
	var H = canvas.height;
	var degree = 0;
	var color = "rgba(100, 149, 237,.3)";
	var bgColor = "#404040";
	var text = "";

	var degree1 = 40;
	var degree2 = 220;
	var degree3 = 100;

	if (degree1 > 120) {
		var reduceVal = 120 - degree1;
		var remnant1 = 0;
		var remnant2 = reduceVal;
		var remnant3 = degree3 - 120;

		alert(remnant1)
		alert(remnant2)
		alert(remnant3)
	}
	else if (degree2 > 120) {
		var reduceVal = 120 - degree2;
		var remnant2 = 0;
		var remnant3 = reduceVal;
		var remnant1 =  degree1 - 120;
		alert(remnant2+"2")
		alert(remnant3+"3")
		alert(remnant1+"1")
	}
	else if (degree3 > 120) {
		var reduceVal = 120 - degree3;
		var remnant3 = 0;
		var remnant1 = reduceVal;
		var remnant2 = degree2 - 120;
		alert(remnant3+"3")
		alert(remnant1+"1")
		alert(remnant2+"2")
	}

	function init() {

		console.log(degree1);
		var radians = degree1 * Math.PI / 180;
		c.beginPath();
		c.strokeStyle = color;
		c.lineWidth = 50;
		c.arc(W/2,H/2,150, 0 - (90 + remnant1) * Math.PI/180, radians - (90 + remnant1) * Math.PI/180, false);
		c.stroke();


		console.log(degree2);
		var radians3 = degree2 * Math.PI / 180;
		c.beginPath();
		c.strokeStyle = "rgba(255, 0, 0,.5)";
		c.lineWidth = 50;
		c.arc(W/2,H/2,150, 0  - (-30 + remnant2) * Math.PI/180, radians3  - (-30 + remnant2) * Math.PI/180, false);
		c.stroke();


		console.log(degree3);
		var radians2 = degree3 * Math.PI / 180;
		c.beginPath();
		c.strokeStyle = "rgba(255, 255, 0,.7)";
		c.lineWidth = 50;
		c.arc(W/2,H/2,150, 0 - (210 + remnant3) * Math.PI/180, radians2 - (210 + remnant3) * Math.PI/180, false);
		c.stroke();

		
	}

	

	function draw() {
		init();	
	}

	draw();
}