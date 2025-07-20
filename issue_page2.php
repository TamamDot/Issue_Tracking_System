<!-- table for the state admin to see all issue reported in their state !-->
<div class="filterCont">
	<i class="fad fa-magnifying-glass"></i>
	<input type="text" name="search1" id="search1" placeholder="Search">
	<span>
		<p>Filter</p>
		<i class="fas fa-filter"></i>
	</span>
	<div class="filterMenu">
		
	</div>
</div>
<div class="tableCont">
	<div class="innerTable">
		<div class="table">
			<table border="1px">	
				<tr>
					<th><i class="fad fa-hashtag"></i></th>
					<th><i class="fad fa-bug"></i>Issuses</th>
					<th><i class="fad fa-hospital"></i>Department</th>
					<th><i class="fad fa-memo-circle-info"></i>Description</th>
					<th><i class="fad fa-list-check"></i>Status</th>
					<th><i class="fad fa-user-secret"></i>Assigned Staff</th>
					<th><i class="fad fa-user-nurse"></i>Complaint</th>
					<th><i class="fad fa-address-book"></i>Contact Information</th>
					<th><i class="fad fa-comments"></i>ChatBox</th>
					<th><i class="fad fa-calendar-days"></i>Date of Submission</th>
				</tr>
				<!--
				<tr>
					<td>#1</td>
					<td>Missing PMTCT</td>
					<td>
						<span>International Clinic</span>
					</td>
					<td>After a recent update, we lost some of our patient. 223 PMTCT patietnt and 19 recapture</td>
					<td>
						<span>Not Solved</span>
					</td>
					<td>
						<button onclick='k(1)'>Mr Asor<i class="fas fa-chevron-down"></i></button>
					</td>
					<td>2023-02-12</td>
				</tr>
				!-->
		</table>
		</div>
	</div>
	<div class="smallerBanner">
		<form action="tracking-inc.php" method="POST" style="display:none;" id="assignForm">
			<div class="assignCont" style="display:none;">
				<div class="topHead">
					<i class="fad fa-user-secret"></i>
					<p>Staff Assignment</p>
				</div>
				<div class="assignContent">
					<div class="issueInfo">
						<span id="issueid"><i class="fad fa-bug"></i> Issue </span>
						<span id="issueName"><i class="fad fa-bullseye-arrow"></i>Lost PMTCT</span>
					</div>
					<div class="Cont">
						<div class="innerCont">
							<input type="text" name="staffAssign" id="statText">
							<input type="text" name="staffReg" id="staffReg" style="display:none;">
							<span id="selcBtn"><i class="fas fa-chevron-down" id="btnIcon"></i></span>
						</div>
						<div class="optList">
							
						</div>
					</div>

					<textarea name="comments" id="comments"></textarea>
					<span class="btnCont">
						<button name="saveBtn2" id="saveBtn" type="button">Assign Staff<i class="fad fa-file-arrow-up"></i></button>
						<span class="mailStats">
							<p>Processing</p>
							<i class="fad fa-loader"></i>
						</span>
					</span>
				</div>
			</div>	
		</form>
		<div class="chatCont" style="display:none;">
			<div class="chats">
				<div class="contactName">
					<div>
						<span class="IconLetter">
							<p id="initial1">NB</p>
						</span>
						<p id="otheruser">Naeem Bashir</p>
					</div>

					<div id="closemark">
						<i class="fas fa-xmark"></i>
					</div>
				</div>

				<div class="messageCont">
					<!--<div class="message1">
						<span class="senderIcon">
							<span>DA</span>
						</span>
						<span class="msgCont">
							<p>Hey i still need help undertsanding your problem, what do you mean he doesn't love you no more</p>
						</span>
					</div>

					<div class="message2">
						<span class="msgCont">
							<p>This nigga out here ducking me, i can't be the only one trying</p>
						</span>
						<span class="senderIcon">
							<span>AI</span>
						</span>
					</div>!-->

				</div>
			</div>
		</div>
		
	</div>
</div>