<!-- dashboard for registering users !-->
<form action="tracking-inc.php" method="POST">
	<div class="manageCont">

		<div class="registerCont">
			<div class="leftBanner">
				<span>
					<img src="logo.png">
					<p>Issue Tracking</p>
				</span>
			</div>
			<div class="rightBanner">
				<div class="topSect">
					<i class="fad fa-user-plus"></i>
					<p>Register New User</p>

					<span id="regStats"> <i class="fad fa-user-check"></i>Staff Registered</span>
				</div>
				<div class="contentSect">
					<input type="text" name="fname2" placeholder="enter user Fullname">
					<input type="text" name="uname2" placeholder="Enter User Name">
					
					<div class="dropDown">
						<span class="selected">
							<p id="selcPara">Select User Position</p>
							<i class="fas fa-chevron-down" id="selcIcon"></i>
						</span>
						<span class="postList">
							<span class="options">HI Staff</span>
							<span class="options">M&E Staff</span>
							<span class="options">Operation Staff</span>
							<span class="options">Logistic Staff</span>
							<span class="options">Inventory Staff</span>	
							<span class="options">Facility Staff</span>
						</span>
						<input type="text" name="pos2" id="pos" placeholder="Select user Position" style="display:none;">
					</div>

					<input type="text" name="info2" placeholder="Enter User Contact Info">

					<div class="dropDown">
						<span class="selected3">	
							<p id="selcPara3">Select User State</p>
							<i class="fas fa-chevron-down" id="selcIcon3"></i>
						</span>

						<span class="postList3">
							<span class="options3">Kano</span>
							<span class="options3">Jigawa</span>
							<span class="options3">Bauchi</span>
						</span>
					</div>

					<div class="dropDown" style="opacity:0%; z-index:-1;">
						<span class="selected2">
							<p id="selcPara2">Select User Facility</p>
							<i class="fas fa-chevron-down" id="selcIcon2"></i>
						</span>
						<span class="postList2">
							
						</span>
					</div>

					<input type="text" name="facil2" id="facil2" placeholder="Select Facility" style="display:none;">
					<input type="text" name="stateVal" id="stateVal" placeholder="Select state" style="display:none;">
					<input type="text" name="pageNum2" id="pageNum" style="display:none;">
					<button type="submit" name="regBtn">Register User <i class="fad fa-user-plus"></i></button>
				</div>
			</div>
		</div>

		<div class="manageStaff" style="display:none;">
		</div>
	</div>
</form>