function dashboard() {
	dropDownAnime(); 
	function dropDownAnime() {
		var selcBtn1 = document.querySelector(".selcBtn");
		var list1 = document.querySelector(".list");
		var selcIcon = document.querySelector(" .selcBtn i");
		var selcPara = document.querySelector(" .selcBtn p");
		var listOpts1 = document.querySelectorAll(".listOpt");

		selcBtn1.addEventListener("click", () => {
			list1.classList.toggle("active");
			if (list1.classList == "list active") {
				selcIcon.style.transform = "rotateX(180deg)";
				selcIcon.style.transition = "all .4s ease";
			}
			else {
				selcIcon.style.transform = "rotateX(0deg)";
				selcIcon.style.transition = "all .4s ease";
			}
		})

		listOpts1.forEach(o => {
			o.addEventListener("click",() => {
				selcPara.innerHTML = o.querySelector("p").innerHTML;
				list1.classList.remove("active");
				selcIcon.style.transform = "rotateX(0deg)";
				selcIcon.style.transition = "all .4s ease";
				var xhttp2 = new XMLHttpRequest();
				xhttp2.onload = function () {
					//alert(this.responseText);
					document.querySelector(".content").innerHTML = this.responseText;

					dropDownAnime();
					var statsElem = document.querySelectorAll(".statsElem");
					for (var t = 0; t < 3; t++) {
						statsElem[t].style.animation = "appear .7s ease-in-out";
					}
					document.getElementById("toolView").onclick = function () {
						navPage('1_2');
					}
				}
				xhttp2.open("POST","tracking-inc.php");
				xhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xhttp2.send("selc_toolName="+selcPara.innerHTML);
			})
		})

		var slider = document.querySelector(".slider")
		var slideOpt1 = document.getElementById("opt1");
		var slideOpt2 = document.getElementById("opt2");

		slideOpt1.onclick = function () {
			slider.style.transform = "translate(5%,15%)";
			slider.style.transition = "all .4s ease";
			slideOpt1.style.transition = "all .4s ease";
			slideOpt2.style.transition = "all .4s ease";
			slideOpt1.style.color = "white";
			slideOpt2.style.color = "#808080";
		}

		slideOpt2.onclick = function () {
			slider.style.transform = "translate(115%,15%)";
			slider.style.transition = "all .4s ease";
			slideOpt1.style.transition = "all .4s ease";
			slideOpt2.style.transition = "all .4s ease";
			slideOpt2.style.color = "white";
			slideOpt1.style.color = "#808080";
		}

		var statePercVal = document.querySelectorAll(".statePerc");
		var statePercBar = document.querySelectorAll(".percentage");
		for (var u = 0; u < statePercVal.length; u++) {
			animateBar(u)
			
		}
		function animateBar(ID) {
			var counter1 = 0;
			var barAnima = setInterval(() => {
				if (counter1 > 0) {
					clearInterval(barAnima);
				}
				else {
					counter1++;
					statePercBar[ID].style.width = statePercVal[ID].innerHTML;
					statePercBar[ID].style.transition = "all 1.5s ease-in-out";
				}
			},100)
		}
	}
}