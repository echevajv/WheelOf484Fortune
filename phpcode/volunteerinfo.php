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

	<div id="adminclouds">
		<div class="col-xs-12" id="columnmain">
			<div id="cloudstwo">
				<div class="cloud x5" id="cloudfive"></div>
			</div>
			<div id="clouds">
				<div class="cloud x3" id="cloudthree"></div>
				<div class="cloud x2" id="cloudtwo"></div>
			</div>
		</div>
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
				<p><a href="volunteerinfo.php" id="volunteerbutton" class="navbuttoncurrent">VOLUNTEER INFO</a></p>
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
				<h1 class="adminnavheading">VOLUNTEER INFO</h1>
			</div>
		</div>
	</div>
		
<!--COLUMN 3-->	
		<div id="allvolunteerinfo">
			<div class="col-xs-12">
				<div id="volunteerinfoscroll">
					<table class="table" id="admincalendar">
					<tr>
						<th colspan="4" class="text-center"><h1 class="monthyear"><strong>Find a Volunteer</strong></h1></th>
					</tr>
					<tr>
						<th colspan="4" class="text-center">
							<form class="navbar-form" role="search" id="searchbarvolunteers">
						        <div class="input-group">
						            <input type="text" class="form-control" placeholder="Search a volunteer" id="srch-term">
						            <div class="input-group-btn">
						                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search" id="searchicon"></i></button>
						            </div>
						        </div>
					        </form>
				        </th>
					</tr>

                        <?php PopulateTable('confirmed') ?>

					</table>
				</div>
			</div>
			<!--END COLUMN TWO-->

			<!--COLUMN 2-->
		<div id="allvolunteerinfo">
			<div class="col-xs-12">
				<div id="volunteerinfohours">
					<table class="table" id="volunteerinfotable">
					<tr>
						<th colspan="2" class="text-center"><h1 class="monthyear"><strong>Total Volunteer Hours</strong></h1></th>
					</tr>
					<tr>
						<td id="calendarlastname">Animal Care</td>
						<td id="calendarfirstname">300 Hours</td>
					</tr>
					<tr>
						<td id="calendarlastname">Outreach Docent</td>
						<td id="calendarfirstname">200 Hours</td>
					</tr>
					<tr>
						<td id="calendarlastname">Treatment Team</td>
						<td id="calendarfirstname">200 Hours</td>
					</tr>
					<tr>
						<td id="calendarlastname">Transport + Rescue</td>
						<td id="calendarfirstname">400 Hours</td>
					</tr>
					<tr>
						<td id="calendarlastname">All Groups</td>
						<td id="calendarfirstname">1100 Hours</td>
					</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
Function PopulateTable ($status){
    $server = "localhost";
    $user = "root";
    $password = "sqlpass";
    $database = "wildlife";
    $query = "Select PersonID, concat_ws(', ', lastname, firstname) as name, dateapplied from person where status like '$status' order by lastname;";
    $con = mysql_connect($server, $user, $password);
    if (!empty($con)){
        //echo "Connected Successfully";
        if (mysql_select_db($database, $con)){
            //echo "Selected database successfully";
            $resultset = mysql_query($query, $con);
            if ($resultset==true){
                //echo "resultset successfull";
                while ($row = mysql_fetch_array($resultset)) {
                    //print("<table border=0 class=stylec1>");
                    $id = $row["PersonID"];
                    $name = $row["name"];
                    $dateapplied = $row["dateapplied"];

                    print("<tr>");
                    //print("<td>$id</td>");
                    print("<td>$name</td>");
                    //print("<td>$dateapplied</td>");
                    print('<td><a href="NewApplicantAnimalCare.php?id='.$id.'">View</td>');
                    print("</tr>");
                }
            }
        }
    }
}
?>