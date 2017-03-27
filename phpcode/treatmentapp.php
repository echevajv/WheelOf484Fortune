<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Volunteer Website for The Virginia Wildlfe Center">
    <meta name="author" content="Ryan Spitzel, Faith Ripa">

    <title>Treatment Team App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
</head>

<body>

<!--APPLICATION-->
<div class="row" id="application">
    <div class="col-xs-12">
        <div class="backbuttonapp" id="back">
            <div class="col-xs-12 text-left">
                <a href="volunteeropportunities.php" id="backbuttonapp"><strong>Back</strong></a>
            </div>
            <!--END COL XS 12-->
        </div>
        <!--END BACK BUTTON APP-->
        <div id="careappinfo">
            <h1 id="applicationmainheader">Treatment Team Volunteer Application</h1>
            <br>
            <p id="careappinfotext">Thank you for your interest in volunteering with the treatment team department at the Wildlife Center of Virginia. Once we receive your application, a treatment team staff member will email you within one week to acknowledge your application and notify you of the next Volunteer Information Session.</p>
        </div>
        <!--END CARE APP INFO-->
    </div>
    <!--END COL XS 12-->
</div>
<!--END ROW-->
<br>
<div class="row" id="application">
    <div class="col-xs-12">
        <!--GENERAL INFORMATION-->
        <h3 class="applicationheader" id="generalinfo">General Information</h3>
        <br>
        <!--NAME INPUT-->
        <form class="treatmentapp" action="thankyou.php" method="post">
            <div class="form-group">
                <label>First name</label>
                <br>
                <input name="firstname" type="text" class="form-control" id="inputfirstname">
            </div>
            <div class="form-group">
                <label>Last name</label>
                <br>
                <input name="lastname" type="text" class="form-control" id="inputlastname">
            </div>
        <br>
            <!--EMAIL INPUT-->
            <div class="form-group">
                <label>Email</label>
                <input name="email"class="form-control" id="inputemail" required>
            </div>
            <!--ADDRESS INPUT-->
            <div class="form-group">
                <label>Address</label>
                <input name="address" class="form-control" id="inputaddress" required>
            </div>
            <!--CITY INPUT-->
            <div class="form-group">
                <label>City</label>
                <input name="city" class="form-control" id="inputcity">
            </div>
            <!--STATE INPUT-->
            <div class="form-group">
                <label>State</label>
                <input name="state" class="form-control" id="inputstate">
            </div>
            <!--ZIP CODE INPUT-->
            <div class="form-group">
                <label>Zip Code</label>
                <input class="form-control" id="inputzipcode">
            </div>
            <!--PHONE INPUT-->
            <div class="form-group">
                <label>Phone</label>
                <input name="phone" class="form-control" id="inputphone">
            </div>
            <!--DOB INPUT-->
                <div class="form-group">
                    <label>Date of Birth</label>
                    <br>
                    <input name="datofbirth" type="date" class="form-control" id="dateofbirth">
            <br>
    </div>
    <!--AVAILABILITY-->
        <div class="form-group">
            <label>What days of the week are you available?</label>
            <br>
            <div>
                <label class="checkbox-inline">
                    <input name="availablemondaycheck" type="checkbox" id="monday" value="option1">Mon
                </label>
                <br>
            </div>

            <label class="checkbox-inline">
                <input name="availabletuesdaycheck" type="checkbox" id="tuesday" value="option2">Tues
            </label>
            <br>

            <label class="checkbox-inline">
                <input name="availablewednesdaycheck" type="checkbox" id="wednesday" value="option3">Wed
            </label>
            <br>

            <label class="checkbox-inline">
                <input name="availablethursdaycheck" type="checkbox" id="thusday" value="option4">Thurs
            </label>
            <br>

            <label class="checkbox-inline">
                <input name="availablefridaycheck" type="checkbox" id="friday" value="option5">Fri
            </label>
            <br>

            <label class="checkbox-inline">
                <input name="availablesaturdaycheck" type="checkbox" id="saturday" value="option6">Sat
            </label>
            <br>

            <label class="checkbox-inline">
                <input name="availablesundaycheck" type="checkbox" id="sunday" value="option7">Sun
            </label>
        </div>
        <label>Season availability (check all for year round)</label>
        <br>
        <div>
            <label class="checkbox-inline">
                <input name="availablespringcheck" type="checkbox" id="spring" value="option1">Spring
            </label>
            <br>
        </div>

        <label class="checkbox-inline">
            <input name="availablesummercheck" type="checkbox" id="summer" value="option2">Summer
        </label>
        <br>

        <label class="checkbox-inline">
            <input name="availablefallcheck" type="checkbox" id="fall" value="option3">Fall
        </label>
        <br>

        <label class="checkbox-inline">
            <input name="availablewintercheck" type="checkbox" id="winter" value="option4">Winter
        </label>
        </label>
    <br>
        <div class="form-group">
            <label>Are you vaccinated for Rabies?</label>
            <select  name="rabiesquestion" id="selecttype" class="form-control">
                <option>-Select-</option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <div class="form-group">
            <label>Do you hold a valid permit to rehabilitate wildlife in the state of Viginia?</label>
            <select name="rehabwildlifepermmit" id="selecttype" class="form-control">
                <option>-Select-</option>
                <option>No</option>
                <option>Permit 1</option>
                <option>Permit 2</option>
                <option>Permit 4</option>
            </select>
        </div>
    <br>

    <!--EMERGENCY CONTACT-->
        <h3 class="applicationheader" id="emergencyinfo">Emergency Contact Information</h3>
        <br>
        <!--EMERGENCY NAME INPUT-->
        <div class="form-group">
            <label>Name</label>
            <input name="emergencyname" class="form-control" id="inputemergencyname" placeholder="First and last" required>
        </div>
        <!--EMERGENCY EMAIL INPUT-->
        <div class="form-group">
            <label>Phone</label>
            <input name="emergencyemail" class="form-control" id="inputemergencyemail" required>
        </div>
        <!--EMERGENCY ADDRESS INPUT-->
        <div class="form-group">
            <label>Relationship</label>
            <input name="emergencyaddress" class="form-control" id="inputemergencyaddress">
        </div>
        <br>

        <!--ADDITIONAL REQUIREMENTS-->
        <h3 class="applicationheader" id="additionalinfo">Experience</h3>
        <br>
            <div class="form-group">
                <label>Please describe any previous medical or veterinary training you have completed.</label>
                <textarea name="trainingquestion" class="form-control" rows="5"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>The case load at the Center can be unpredictable and vary greatly depending on the time of year.  Please describe the work environment that you work best in including how you best retain information that is taught to you.</label>
                <textarea name="bestworkenvironmentquestion" class="form-control" rows="5"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>The Center admits many trauma cases from all over the state.  In order for a patient to be released back into the wild it must be able to successfully survive on its own in the wild free of chronic pain or debilitation.  Due to this fact, the Center does humanely euthanize patients that do not meet this standard.  Do you have personal experience with euthanasia and how does it affect you?</label>
                <textarea name="euthanasiaquestion" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Taking care of animals is a messy job that requires all team members to clean out dirty crates, chop rats or mice for feeding to patients, and collect fecal samples for analysis for example.  Is this something that you foresee struggling with?</label>
                <textarea name="strigglingquestion" class="form-control" rows="5"></textarea>
            </div>

        <!--AVAILABILITY INPUT-->
            <div class="form-group">
                <label>Handling Skills</label>
                <br>
                <label class="checkbox-inline">
                    <input name="smallmammalscheck" type="checkbox" id="smallmammals" value="option1">Small mammals
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="largemammalscheck" type="checkbox" id="largemammals" value="option2">Large mammals
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="rvscheck" type="checkbox" id="rvs" value="option3">RVS
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="eaglescheck" type="checkbox" id="eagles" value="option4">Eagles
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="smallraptorscheck" type="checkbox" id="smallraptors" value="option5">Small raptors
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="largeraptorscheck" type="checkbox" id="largeraptors" value="option6">Large raptors
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="reptilescheck" type="checkbox" id="reptiles" value="option7">Reptiles
                </label>
            </div>
            <br>
            <div class="form-group">
                <label>Veterinary Training</label>
                <br>
                <label class="checkbox-inline">
                    <input name="vetcheck" type="checkbox" id="vet" value="option1">Vet
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="techniciancheck" type="checkbox" id="technician" value="option2">Technician
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="vetstudent" type="checkbox" id="vetstudent" value="option3">Vet student
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="techstudent" type="checkbox" id="techstudent" value="option4">Tech student
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="vetassistant" type="checkbox" id="vetassistant" value="option5">Vet assistant
                </label>
            </div>
            <br>
            <div class="form-group">
                <label>Patient Care Skills</label>
                <br>
                <label class="checkbox-inline">
                    <input name="medicatingcheck" type="checkbox" id="medicating" value="option1">Medicating
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="bandagingcheck" type="checkbox" id="bandaging" value="option2">Bandaging
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="woundcaregcheck" type="checkbox" id="woundcare" value="option3">Wound care
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="diagnosticscheck" type="checkbox" id="diagnostics" value="option4">Diagnostics
                </label>
                <br>
                <label class="checkbox-inline">
                    <input name="anesthesiacheck" type="checkbox" id="anesthesia" value="option5">Anesthesia
                </label>
            </div>

            <div class="form-group">
                <label>Special Interests or Hobbies:</label>
                <textarea name="interestshobbiesquestion" class="form-control" rows="5"></textarea>
            </div>
            <br>
            <!--SUBMIT BUTTON-->
            <a href="thankyou.php" type="submit" class="btn btn-primary submit" id="submitbutton">Submit</a>
	</form>
</div>
<!--END COL XS 12-->
</div>
<!--END ROW APPLICATION-->

</body>
</html>
