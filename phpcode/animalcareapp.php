<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Volunteer Website for The Virginia Wildlfe Center">
    <meta name="author" content="Ryan Spitzel, Faith Ripa">

    <title>Animal Care App</title>
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
                <h1 id="applicationmainheader">Animal Care Volunteer Application</h1>
                <br>
                <p id="careappinfotext">Thank you for your interest in volunteering with the rehabilitation department at the Wildlife Center of Virginia. Once we receive your application, a rehabilitation staff member will email you within one week to acknowledge your application and notify you of the next Volunteer Information Session.</p> 
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
				<form class="animalcareapp" action="thankyou.php" method="post">
					<div class="form-group">
					<label>First name</label>
					<br>
					<input type="text" class="form-control" id="inputfirstname" name="firstname" required>
					</div>
					<div class="form-group">
					<label>Last name</label>
					<br>
					<input type="text" class="form-control" id="inputlastname" name="lastname" required>
					</div>
				<br>
				
	<!--EMAIL INPUT-->	            
	            <div class="form-group">
	                <label>Email</label>
	                <input class="form-control" id="inputemail" name="email" required>
	            </div>
	<!--ADDRESS INPUT-->	            
	            <div class="form-group">
	                <label>Address</label>
	                <input class="form-control" id="inputaddress" required name="address " required>
	            </div>
	<!--CITY INPUT-->	            
	            <div class="form-group">
	                <label>City</label>
	                <input class="form-control" id="inputcity" name="city" required>
	            </div>
	<!--STATE INPUT-->
	            <div class="form-group">
	                <label>State</label>
	                <input class="form-control" id="inputstate" name="state" required>
	            </div>
	<!--ZIP CODE INPUT-->
	            <div class="form-group">
	                <label>Zip Code</label>
	                <input class="form-control" id="inputzipcode" name="zipcode" required>
	            </div>
	<!--PHONE INPUT-->
	            <div class="form-group">
	                <label>Phone</label>
	                <input class="form-control" id="inputphone" name="phone" required>
	            </div>
	<!--DOB INPUT-->
			
				<div class="form-group">
					<label>Date of Birth</label>
					<br>
					<input type="date" class="form-control" id="dateofbirth" name="dateofbirth" required>
				
	        	    <br>
	        	</div>
	        
	        	<!--AVAILABILITY-->          
		    
	       		<div class="form-group">
	                <label>What days of the week are you available?</label>
	                <br>
						<label class="checkbox-inline">
						<input type="checkbox" id="monday" value="option1" name="availablemondaycheck">Mon
						</label>
						<br>

						<label class="checkbox-inline">
						<input type="checkbox" id="tuesday" value="option2" name="availabletuesdaycheck">Tues
						</label>
						<br>

						<label class="checkbox-inline">
						<input type="checkbox" id="wednesday" value="option3" name="availablewednesdaycheck">Wed
						</label>
						<br>

						<label class="checkbox-inline">
						<input type="checkbox" id="thusday" value="option4" name="availablethursdaycheck">Thurs
						</label>
						<br>

						<label class="checkbox-inline">
						<input type="checkbox" id="friday" value="option5" name="availablefridaycheck">Fri
						</label>
						<br>

						<label class="checkbox-inline">
						<input type="checkbox" id="saturday" value="option6" name="availablesaturdaycheck">Sat
						</label>
						<br>

						<label class="checkbox-inline">
						<input type="checkbox" id="sunday" value="option7" name="availablesundaycheck">Sun
						</label>
	            </div>
	        

<!--EMERGENCY CONTACT-->
		
		        <h3 class="applicationheader" id="emergencyinfo" name="emergencycontact">Emergency Contact Information</h3>
		        <br>
	<!--EMERGENCY NAME INPUT-->
	            <div class="form-group">
	                <label>Name</label>
	                <input class="form-control" id="inputemergencyname" name="emergencyname" placeholder="First and last" required>
	            </div>
	<!--EMERGENCY PHONE INPUT-->
	            <div class="form-group">
	                <label>Phone</label>
	                <input class="form-control" id="inputemergencyemail" name="emergencyphone" required>
	            </div>
	<!--RELATIONSHIP INPUT-->
	            <div class="form-group">
	                <label>Relationship</label>
	                <input class="form-control" id="inputemergencyaddress" name="emergencyrelationship">
	            </div>
	            <br>
<!--EXPERIENCE AND REQUIREMENTS-->
		        <h3 class="applicationheader" id="experienceinfo">Experience and Requirements</h3>
		        <br>
	            <div class="form-group">
	                <label>Please briefly describe your relevant hands-on experience with animals, if any. What did you enjoy about the experience? What did you dislike?</label>
	                <textarea class="form-control" name="answer1" rows="5" required></textarea>
	            </div>
	            <br>
	            <div class="form-group">
	                <label>Carnivorous patients are sometimes unable to eat food items whole due to their injuries; you may be required to cut and divide dead rodents, chicks, and fishes into smaller portions. Are you comfortable handling dead animals for this purpose?</label>
	                <textarea class="form-control" name="answer2" rows="5" required></textarea>
	            </div>
	            <br>
	            <div class="form-group">
	                <label>Prior to release from the Wildlife Center, many predatory birds are presented with live mice in order to evaluate their ability to capture prey in a controlled and measurable environment. What is your opinion on using live-prey for this purpose?</label>
	                <textarea class="form-control" name="answer3" rows="5"></textarea>
	            </div>
	            <br>
	            <div class="form-group">
	                <label>Wildlife rehabilitation requires daily outdoor work -- year-round and regardless of weather conditions. Are you able to work outside during all seasons? If not, what are your limitations?</label>
	                <textarea class="form-control" name="answer4" rows="5" required></textarea>
	            </div>
        	
	            <div class="form-group">
	                <label>Are you able to lift 40 pounds on potentially uneven surfaces with minimal assistance?</label>
	                <select id="selecttype" class="form-control" name="liftquestion">
	                    <option>-Select-</option>
	                    <option id="yes">Yes</option>
	                    <option id="no">No</option>
	                </select>
	            </div>
	            <br>
	            <div class="form-group">
	                <label>Are you vaccinated for Rabies?</label>
	                <select id="selecttype" class="form-control" name="rabiesquestion">
	                    <option>-Select-</option>
	                    <option>Yes</option>
	                    <option>No</option>
	                </select>
	            </div>
	            <br>
	            <div class="form-group">
	                <label>If not, are you willing to become vaccinated at your own cost?</label>
	                <select id="selecttype" class="form-control" name="vaccinatedquestion">
	                    <option>-Select-</option>
	                    <option>Yes</option>
	                    <option>No</option>
	                </select>
	            </div>
        	
        	<br>
	        
	            <div class="form-group">
	                <label>Please list all food and animal allergies, if any</label>
	                <textarea class="form-control" name="allergiesquestion" rows="5" required></textarea>
	            </div>
	        
	        <br>
	<!--AVAILABILITY INPUT-->
	        
	            <div class="form-group">
	                <label>Will you be able to commit to either a six-month or one-year schedule, with at least one shift (four hours) per week?</label>
	                <select id="selecttype" name="commitschedulequestion" class="form-control">
	                    <option>-Select-</option>
	                    <option>Yes</option>
	                    <option>No</option>
	                </select>
	            </div>
	        
	        <br>
	        
	            <div class="form-group">
	                <label>Do you belong to any animal rights groups (PETA, The Humane Society, etc.)? If so, which ones?</label>
	                <textarea class="form-control" name="answer5" rows="5" required></textarea>
	            </div>
	            <br>
	            <div class="form-group">
	                <label>What do you hope to learn or accomplish by volunteering at the Wildlife Center of Virginia?</label>
	                <textarea class="form-control" name="answer6" rows="5" required></textarea>
	            </div>
	            <br>
	            <div class="form-group">
	                <label>Please describe an environmental or wildlife-based issue you feel passionately about, and why:</label>
	                <textarea class="form-control" name="answer7" rows="5" required></textarea>
	            </div>
	            <br>
	            <div class="form-group">
	                <label>Is there anything else that you’d like us to know about yourself or your experience?</label>
	                <textarea class="form-control" name="answer8" rows="5" required></textarea>
	            </div>
	            <br>

<!--ADDITIONAL REQUIREMENTS-->
	        <h3 class="applicationheader" id="additionalinfo">Additional Requirements</h3>
	            <br>
	<!--RESUME UPLOAD-->	            
	            <div class="form-group">
	                <label for="exampleInputFile">Resume or CV</label>
	                <input type="file" name="resume" id="resumeupload">
	                <p class="help-block">This should include information about your education and relevant work history</p>
	            </div>
	<!--LETTER OF REC UPLOAD-->	            
	            <div class="form-group">
	                <label for="exampleInputFile">Letter of Recommendation</label>
	                <input type="file" name="letterofrecommendation" id="letterofrecupload">
	            </div>
	            <br>

<!--SUBMIT BUTTON-->
	            <input type="submit" name="Submission" class="btn btn-primary submit" id="submitbutton">
	        </form>
        </div>
        <!--END COL XS 12-->
    </div>
    <!--END ROW APPLICATION-->


</body>
</html>
