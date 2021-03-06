<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Send Message</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet">
</head>

<body id="admindashboardbody">

	<div class="row">
		<img src="images/trees.png" id="treespositions">
	</div>

<!--ALL COLUMNS-->
	<div class="container-fluid" id="admindashboard">
		<div class="row">	

			<div class="col-xs-12 col-sm-2 text-center adminnavbuttonname" id="columnoneadmin">
				<p id="adminimage" class="navbutton">JANE DOE</p>
	        </div>

	        <div class="col-xs-6 col-sm-2 text-center adminnavbutton adminnavbuttoncalendar" id="columntwoadmin">
				<p><a href="admindashboard.php" id="calendarbutton" class="navbutton">CALENDAR</a></p>
	        </div>

	        <div class="col-xs-6 col-sm-2 text-center adminnavbutton adminnavbuttoninfo" id="columnthreeadmin">
				<p><a href="volunteerinfo.php" id="volunteerbutton" class="navbutton">VOLUNTEER INFO</a></p>
	        </div>

	        <div class="col-xs-6 col-sm-2 text-center adminnavbutton adminnavbuttonforms" id="columnfouradmin">
				<p><a href="#" id="formsbutton" class="navbutton">EDIT FORMS</a></p>
	        </div>

	        <div class="col-xs-6 col-sm-2 text-center adminnavbutton adminnavbuttonmessage" id="columnfiveadmin">
				<p><a href="sendmessage.php" id="messagebutton" class="navbuttoncurrent">SEND MESSAGE</a></p>
	        </div>

	       	<div class="col-xs-12 col-sm-2 text-center adminnavbutton adminnavbuttonapplicant" id="columnsixadmin">
				<p><a href="newapplicants.php" id="newapplicantbutton" class="navbutton">NEW APPLICANTS</a></p>
	        </div>
	    </div>
    </div>

    <div class="container-fluid" class="adminmainheader">
		<div class="row">	
			<div class="col-xs-12 text-left">
				<h1 class="adminnavheading">SEND MESSAGE</h1>
			</div>
		</div>
	</div>


<!--COLUMN 2-->
			<div class="col-xs-12" id="calendarcolumntwo">
				<div id="volunteermessagechoice" class="text-center">
					<h4 class="admindashboardheader text-center">Select a group to message</h4>
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
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3">All Groups
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
				<div id="messageform">
					<form>
						<div class="form-group">
							<label>Subject</label>
							<input class="form-control" placeholder="">
						</div>
					</form>
					<form>
						<div class="form-group">
							<label for="exampleInputPassword1">Message</label>
							<textarea class="form-control" rows="8"></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Attach File</label>
							<input type="file" id="exampleInputFile">
						</div>
						<div class="text-right">
						<button type="submit" class="btn btn-default" id="sendmessage">Send</button>
						</div>
					</form>
				</div>
			</div>		
		</div>
	<!--END DASHBOARD-->
</body>
</html>
