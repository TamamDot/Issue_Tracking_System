<!-- dashboard for adding pre define issue!-->
<div class="banner3">
	<div class="regIssue">
		<form action="tracking-inc.php" method="POST">
			<div class="inputBanner">
				<span class="input_Cont">
					<span>
						<i class="fad fa-bug"></i>
					</span>
					<input type="text" name="newIssue" placeholder="Enter New Issue head">
				</span>
				<div class="deptSect">
					<span class="deptPoint" id="deptPoint1">HI Department</span>
					<span class="deptPoint" id="deptPoint2">M&E Department</span>
					<span class="deptPoint" id="deptPoint3">Logistic Department</span>
					<span class="deptPoint" id="deptPoint4">Others</span>
					<input type="text" name="selcDept" id = "selcDept1"style="display:none;">
				</div>
				<input type="text" name="pageNum2" id="pageNum" style="display:none;">
				<button type="submit" name="addIssue">Add Issue</button>
			</div>
			<div class="picBanner">
				<img src="bgimg11.png">
			</div>
		</form>
	</div>
	<div class="issueAnalysis" style="display:none;">
		
	</div>
</div>