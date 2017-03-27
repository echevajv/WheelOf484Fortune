<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Volunteer Website for The Virginia Wildlfe Center">
    <meta name="author" content="Ryan Spitzel, Faith Ripa">

    <title>Outreach Docent App</title>
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
            <h1 id="applicationmainheader">Outreach Docent Volunteer Application</h1>
            <br>
            <p id="careappinfotext">Thank you for your interest in volunteering with the outreach department at the Wildlife Center of Virginia. Once we receive your application, an outreach staff member will email you within one week to acknowledge your application and notify you of the next Volunteer Information Session.</p>
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
        <form class="outreachapp">
            <div class="form-group">
                <label>First name</label>
                <br>
                <input name="firstname" type="text" class="form-control" id="inputfirstname">
            </div>
            <div class="form-group">
                <label>Last name</label>
                <br>
                <input name="lastname" type="email" class="form-control" id="inputlastname">
            </div>
        <br>
            <!--EMAIL INPUT-->
            <div class="form-group">
                <label>Email</label>
                <input name="email" class="form-control" id="inputemail" required>
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
                <input class="form-control" id="inputzipcode" name="zipcode">
            </div>
            <!--PHONE INPUT-->
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" id="inputphone" name="phone">
            </div>
            <!--DOB INPUT-->
                <div class="form-group">
                    <label>Date of Birth</label>
                    <br>
                    <input name="dateofbirth" type="date" class="form-control" id="dateofbirth" >
            <br>
    </div>
    <!--AVAILABILITY-->
        <div class="form-group">
            <label>What days of the week are you available?</label>
            <br>
            <div>
                <label class="checkbox-inline">
                    <input  name="availablemondaycheck" type="checkbox" id="monday" value="option1">Mon
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
                <input name="availablethursdaycheck" type="checkbox" id="thursday" value="option4">Thurs
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
            <input  name="availablewintercheck" type="checkbox" id="winter" value="option4">Winter
        </label>
        </label>
    <br>
        <div class="form-group">
            <label>Are you vaccinated for Rabies?</label>
            <select name="rabiesquestion" id="selecttype" class="form-control">
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

        <!--INTERESTS AND EXPERIENCE-->
        <h3 class="applicationheader" id="additionalinfo">INTERESTS AND EXPERIENCE</h3>
        <br>
            <div class="form-group">
                <label>Why are you interested in volunteering as an outreach docent?</label>
                <textarea name="whyinterestedquestion" class="form-control" rows="5"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>What’s an environmental or wildlife issue you feel passionately about, and why?</label>
                <textarea name="passionatequestion" class="form-control" rows="5"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Do you have prior experience speaking to the public? Please describe.</label>
                <textarea name="publicspeakingquestion" class="form-control" rows="5"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Do you belong to any animal rights groups (PETA, The Humane Society, etc.)? If so, which ones?</label>
                <textarea name="animalrightsgroups" class="form-control" rows="5"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>What do you think you’d bring to the outreach volunteer team?</label>
                <textarea name="bringtoteamquestion"class="form-control" rows="5"></textarea>
            </div>
            <br>

            <!--ADDITIONAL REQUIREMENTS-->
            <h3 class="applicationheader" id="additionalinfo">Additional Requirements</h3>
            <br>
            <!--RESUME UPLOAD-->
            <div class="form-group">
                <label for="exampleInputFile">Resume or CV</label>
                <input name="resume" type="file" id="resumeupload">
                <p class="help-block">This should include information about your education and relevant work history</p>
            </div>
            <!--LETTER OF REC UPLOAD-->
            <div class="form-group">
                <label for="exampleInputFile">Letter of Recommendation</label>
                <input name="letterofrecommendation" type="file" id="letterofrecupload">
            </div>
            <br>

            <!--SUBMIT BUTTON-->
            <a href="thankyou.php" name="submittransport" type="submit" class="btn btn-primary submit" id="submitbutton">Submit</a>
        </form>
</div>
<!--END COL XS 12-->
</div>
<!--END ROW APPLICATION-->

</body>
</html>
