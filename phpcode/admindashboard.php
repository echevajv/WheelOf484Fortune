<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Calendar</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet">
</head>

<body id="admindashboardbody">

<!--BACKGROUND IMAGES-->
	<div class="row">
		<img src="images/trees.png" id="treespositions">
	</div>
	<!--END ROW-->

<!--ALL COLUMNS-->
	<div class="container-fluid" id="admindashboard">
		<div class="row">	
			<div class="col-xs-12 col-sm-2 text-center adminnavbuttonname" id="columnoneadmin">
				<p id="adminimage" class="navbutton">JANE DOE</p>
	        </div>

	        <div class="col-xs-6 col-sm-2 text-center adminnavbutton adminnavbuttoncalendar" id="columntwoadmin">
				<p><a href="admindashboard.php" id="calendarbutton" class="navbuttoncurrent">CALENDAR</a></p>
	        </div>


	        <div class="col-xs-6 col-sm-2 text-center adminnavbutton adminnavbuttoninfo" id="columnthreeadmin">
				<p><a href="ActiveVolunteerList.php" id="volunteerbutton" class="navbutton">VOLUNTEER INFO</a></p>

	        </div>

	        <div class="col-xs-6 col-sm-2 text-center adminnavbutton adminnavbuttonforms" id="columnfouradmin">
				<p><a href="#" id="formsbutton" class="navbutton">EDIT FORMS</a></p>
	        </div>

	        <div class="col-xs-6 col-sm-2 text-center adminnavbutton adminnavbuttonmessage" id="columnfiveadmin">
				<p><a href="sendmessage.php" id="messagebutton" class="navbutton">SEND MESSAGE</a></p>
	        </div>

	       	<div class="col-xs-12 col-sm-2 text-center adminnavbutton adminnavbuttonapplicant" id="columnsixadmin">
				<p><a href="newapplicants.php" id="newapplicantbutton" class="navbutton">NEW APPLICANTS</a></p>
	        </div>
	    </div>
    </div>

   <div class="container-fluid" class="adminmainheader">
		<div class="row">	
			<div class="col-xs-12 text-left">
				<h1 class="adminnavheading">CALENDAR</h1>
			</div>
		</div>
	</div>

<!--COLUMN 2-->
			<div class="col-xs-12" id="calendarcolumntwo">
				<div id="volunteermessagechoice" class="text-center">
					<h4 class="admindashboardheader text-center">Volunteer Type</h4>
					<label class="checkbox-inline" id="choosetype">
					  <input type="checkbox" id="inlineCheckbox1">Animal Care
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2">Treatment Team
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3">Outreach
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3">Transport + Rescue
					</label>
			        <form class="navbar-form" role="search" id="searchbarall">
				        <div class="input-group">
				            <input type="text" class="form-control" placeholder="Search a volunteer" id="srch-term">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search" id="searchicon"></i></button>
				            </div>
				        </div>
			        </form>
			    </div>
			</div>
			<!--END COLUMN TWO-->
		
<!--COLUMN 3-->	
			<div class="col-xs-12" id="calendarcolumnthree">

				<div id="calendarscroll">
					<table class="table" id="admincalendar">
					<tr>
						<th colspan="4" class="text-center"><h1 class="monthyear"><strong>MAY 2017</strong></h1></th>
					</tr>
					<tr>
						<th id="dayofweek" colspan="4" class="text-center">FRI, MAY 26</th>
					</tr>
						<tr>
							<th id="calendarheader" colspan="1">LAST NAME</th>
							<th id="calendarheader" colspan="1">FIRST NAME</th>
							<th id="calendarheader" colspan="1">POSITION</th>
							<th id="calendarheader" colspan="1">TIME</th>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
					<tr>
						<th id="dayofweek" colspan="4" class="text-center">SAT, MAY 27</th>
					</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
					<tr>
						<th id="dayofweek" colspan="4" class="text-center">MON, MAY 29</th>
					</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
					<tr>
						<th id="dayofweek" colspan="4" class="text-center">TUES, MAY 30</th>
					</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
					<tr>
						<th id="dayofweek" colspan="4" class="text-center">WED, MAY 31</th>
					</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
					<tr>
						<th id="monthyear" colspan="4" class="text-center"><h1 class="monthyear"><strong>JUNE 2017</strong></h1></th>
					</tr>
					<tr>
						<th id="dayofweek" colspan="4" class="text-center">THURS, JUNE 1</th>
					</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
						<tr>
							<td id="calendarlastname">Doe</td>
							<td id="calendarfirstname">Jane</td>
							<td id="calendarposition">Animal Care</td>
							<td id="calendartime">8:00am - 4:00pm</td>
						</tr>
					</table>
		        </div>
	    		</div>
			</div>		
		</div>
	<!--END DASHBOARD-->
</body>
</html>
