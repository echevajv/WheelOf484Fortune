<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pending Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet">
</head>

<body id="dashboardbody">

<!--DASHBOARD-->
	<div class="row">
		<div class="col-xs-12 text-left" id="logout">
			<a href="index.php" id="logoutbutton"><strong>Log Out</strong></a>
		</div>
		<!--END LOGOUT-->
	</div>
	<!--END ROW-->

<!--ALL COLUMNS-->
	<div class="container-fluid" id="dashboard">
		<div class="row">	
<!--COLUMN ONE-->
			<div class="col-xs-12 col-sm-5 col-md-3" id="columnone">
				<img src="images/userimage.jpg" class="img-responsive" alt="volunteer" id="volunteerimage"><a href="#">
	<!--UPDATE PROFILE PICTURE-->
				<h4 class="text-center" id="updateimage"><strong>Update Profile Picture</strong></h4></a>
				<h3 class="text-center volunteerinfo" id="volunteername"><strong>John Doe</strong></h3>
				<h5 class="text-center volunteerinfo" id="volunteertype"><strong>Vet Volunteer</strong></h5>
				<br>
				<div id="editinfo">
					<h4 class="text-center volunteerinfoheader"><strong>Volunteer Information</strong></h4>
					<br>
					<a href="editanimalcareapp.php#generalinfo"><h4 id="volunteerinfo" class="infoitem">General<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></h4></a>
					<a href="editanimalcareapp.php#emergencyinfo"><h4 id="emergencyinfo" class="infoitem">Emergency<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></h4></a>
					<a href="editanimalcareapp.php#experienceinfo"><h4 id="experienceinfo" class="infoitem">Experience<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></h4></a>
					<a href="editanimalcareapp.php#additionalinfo"><h4 id="experienceinfo" class="infoitem">Documents<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></h4></a>
				</div>
				<!--END EDIT INFO-->
			</div>
			<!--END COLUMN ONE-->


<!--COLUMN 2-->
			<div class="col-xs-6 col-sm-7 col-md-3" id="columntwo">
				<div class="text-center">
					<h4 id="checkinheader" class="dashboardheader">CHECK IN</h4>
				</div>
				<!--END TEXT CENTER-->
				<div id="checkinout">
	<!--CHECK IN BUTTON-->
					<div class="col-xs-12">
						<a href="#" type="button" id="checkinbutton" class="btn btn-primary btn-lg btn-block btn-md checkinout"><strong>Check In</strong></a>
					</div>
	<!--CHECK OUT BUTTON-->
					<div class="col-xs-12">
						<a href="#" type="button" id="checkoutbutton" class="btn btn-primary btn-lg btn-block btn-md checkinout"><strong>Check Out</strong></a>
					</div>
				</div>
				<!--END CHECK IN OUT-->
				<div class="text-right totalhoursbutton">
					<h5 id="totalhoursbutton"><a href="dashboardtwo.html">Total Hours Worked</a></h5>
				</div>
				<!--END TOTAL HOURS BUTTON-->
				<div id="pendingboxone">
					<p class="pendingtext">PENDING</p>
				</div>
			</div>
			<!--END COLUMN TWO-->
		
<!--COLUMN 3-->	
			<div class="col-xs-6 col-sm-7 col-md-3" id="columnthree">
				<div class="text-center">
					<h4 id="upcomingshiftsheader" class="dashboardheader">UPCOMING SHIFT</h4>
					<div id="datetime" class="text-center">
						<div id="calendar">
	<!--MONTH-->
							<h3 id="upcomingmonth">May</h3>
	<!--DAY-->
							<h1 id="upcomingday"><strong>21</strong></h1>
						</div>
	<!--TIME-->
						<h5 id="upcomingtime">8:00am - 4:00pm</h5>
					</div>
					<!--END DATE TIME ALL-->
					<div class="text-right" id="editshiftsall">
						<h5 id="editshifts"><a href="#">Edit Shifts</a></h5>
					</div>
					<!--END EDIT SHIFTS ALL-->
				</div>
				<!--END TEXT CENTER-->
				<div id="pendingboxtwo">
					<p class="pendingtext">PENDING</p>
				</div>
			</div>
			<!--END COLUMN THREE-->

<!--COLUMN 4-->			
			<div class="col-xs-12 col-sm-7 col-md-3" id="columnfour">
				<div class="text-center" id="hoursworked">
					<h4 id="badgesheader" class="dashboardheader">BADGES</h4>
					<img src="images/badge.png" class="text-center" id="badge">
				</div>
				<!--END HOURS WORKED-->
				<div class="text-right">
					<h5 id="allbadges"><a href="#">See All Badges</a></h5>
				</div>
				<!--END TEXT RIGHT-->
				<div id="pendingboxthree">
					<p class="pendingtext">PENDING</p>
				</div>
			</div>

<!--BOX MAIN-->
			<div class="col-xs-12 col-sm-12 col-md-9" id="columnmain">
				<div class="text-left">
					<h1 id="signupheader" class="dashboardheader">SIGN UP FOR A SHIFT</h1>
				</div>
				<!--END TEXT LEFT-->
				<div class="hidden-xs">
					<img src="images/treesthree.png" id="treestwo" class="img-responsive">
				</div>
				<!--END HIDDEN XS-->

				<div class="hidden-xs">
					<img src="images/treestwo.png" id="treesthree" class="img-responsive">
				</div>
				<!--END HIDDEN XS-->

				<div class="hidden-sm hidden-md hidden-lg hidden-xl">
					<img src="images/treesfour.png" id="treestwo" class="img-responsive">
				</div>
				<!--END HIDDEN SM ... -->

				<div class="col-xs-12 col-sm-12 col-md-9" id="columnmain">
					<div id="cloudstwo">
						<div class="cloud x5" id="cloudfive"></div>
					</div>
					<div id="clouds">
						<div class="cloud x3" id="cloudthree"></div>
						<div class="cloud x2" id="cloudtwo"></div>
					</div>
				</div>

	<!--SIGN UP FIELDS-->
				<div id="formall">
					<form class="form-inline">
						<div class="form-group">
		<!--DATE FIELD-->
							<label class="selectheader">Date</label>
							<br>
							<input type="date" class="form-control" id="selectdate">
						</div>
						<!--END FORM GROUP-->
					</form>
					<br>
					<form class="form-inline" id="selecttime">
						<div class="form-group">
		<!--TIME IN FIELD-->
							<label class="selectheader">Time-In</label>
							<br>
							<input type="time" class="form-control" id="timein">
						</div>
						<!--END FORM GROUP-->
						<div class="form-group">
		<!--TIME OUT FIELD-->
							<label class="selectheader">Time-Out</label>
							<br>
							<input type="time" class="form-control" id="timeout">
						</div>
						<!--END FORM GROUP-->
					</form>
					<br>
					<form id="selecttype">
						<div class="form-group" id="selecttype">
		<!--TYPE FIELD-->
							<label class="selectheader">Type</label>
							<select id="selecttype" class="form-control">
								<option>-Select-</option>
								<option>Weighing birds</option>
								<option>Onsite tour</option>
								<option>Offsite program</option>
								<option>Other</option>
							</select>
						</div>
						<!--END FORM GROUP-->
					</form>
					<!--END SELECT TYPE-->
					<div class="text-right" id="shiftsubmitmain">
						<h5 id="shiftsubmit"><a href="#">Submit</a></h5>
					</div>
				</div>
				<!--END FORM ALL-->
				<div id="pendingboxmain">
					<p class="pendingtextmain">PENDING</p>
				</div>
			</div>
			<!--END COLUMN MAIN-->
		</div>
		<!--END ROW-->
	</div>
	<!--END DASHBOARD-->
</body>
</html>
