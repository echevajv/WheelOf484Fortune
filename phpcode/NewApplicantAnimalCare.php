
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
                <a href="newapplicants.php" id="backbuttonapp"><strong>Back</strong></a>
            </div>
            <!--END COL XS 12-->
        </div>
        <!--END BACK BUTTON APP-->
        <div id="careappinfo">
            <h1 id="applicationmainheader">Animal Care Volunteer Application</h1>
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
        <form class="animalcareapp">
            <div class="form-group">
                <label>Volunteer ID<p>
                        <?php
                        $PersonID = $_GET["id"];
                        print $PersonID;
                        ?>
                    </p></label>
                <br>
            </div>
            <div class="form-group">
                <label>First name:<p>
                        <?php
                        ProcessQuery("FirstName","Person",$PersonID);
                        ?>
                    </p></label>
                <br>
            </div>
            <div class="form-group">
                <label>Last name:<p>
                        <?php
                        ProcessQuery("LastName","Person",$PersonID);
                        ?>
                    </p></label>
                <br>
            </div>
        </form>
        <form class="animalcareapp">
            <!--EMAIL INPUT-->
            <div class="form-group">
                <label>Email:<p>
                        <?php
                        ProcessQuery("Email","Person",$PersonID);
                        ?>
                    </p></label>
            </div>
            <!--ADDRESS INPUT-->
            <div class="form-group">
                <label>Address:<p>
                        <?php
                        ProcessQuery("Address","Person",$PersonID);
                        ?>
                    </p></label>
            </div>
            <!--CITY INPUT-->
            <div class="form-group">
                <label>City:<p>
                        <?php
                        ProcessQuery("City","Person",$PersonID);
                        ?>
                    </p></label>
            </div>
            <!--STATE INPUT-->
            <div class="form-group">
                <label>State:<p>
                        <?php
                        ProcessQuery("State","Person",$PersonID);
                        ?>
                    </p></label>
            </div>
            <!--ZIP CODE INPUT-->
            <div class="form-group">
                <label>Zip Code:<p>
                        <?php
                        ProcessQuery("ZipCode","Person",$PersonID);
                        ?>
                    </p></label>
            </div>
            <!--PHONE INPUT-->
            <div class="form-group">
                <label>Phone:<p>
                        <?php
                        ProcessQuery("Phone","Person",$PersonID);
                        ?>
                    </p></label>
            </div>
            <!--DOB INPUT-->
            <form class="animalcareapp">
                <div class="form-group">
                    <label>Date of Birth:<p>
                            <?php
                            ProcessQuery("DateOfBirth","Person",$PersonID);
                            ?>
                        </p></label>
                    <br>
            </form>
    </div>
    </form>
    <!--AVAILABILITY-->
    <form class="animalcareapp">
        <div class="form-group">
            <label>What days of the week are you available?</label>
            <p>
                <!--PHP HERE-->
            </p>
            <br>
        </div>
        <label>Season availability (check all for year round)</label>
        <p>
            <?php
            ProcessQuery("SeasonAvailability","Person",$PersonID);
            ?>
        </p>
        <br>
    </form>
    <br>
    <form class="animalcareapp">
        <div class="form-group">
            <label>Are you vaccinated for Rabies?</label>
            <p>
                <?php
                ProcessQuery("RabiesVaccinated","Person",$PersonID);
                ?>
            </p>
        </div>
        <div class="form-group">
            <label>Do you hold a valid permit to rehabilitate wildlife in the state of Viginia?</label>
            <p>
                <?php
                ProcessQuery("ValidPermit","Person",$PersonID);
                ?>
            </p>
        </div>
    </form>
    <br>

    <!--EMERGENCY CONTACT-->
    <form class="animalcareapp">
        <h3 class="applicationheader" id="emergencyinfo">Emergency Contact Information</h3>
        <br>
        <!--EMERGENCY NAME INPUT-->
        <div class="form-group">
            <label>Name:</label>
            <p>
                <?php
                ProcessQuery("Name","EmergencyContact",$PersonID)
                ?>
            </p>
        </div>
        <!--EMERGENCY PHONE INPUT-->
        <div class="form-group">
            <label>Phone:</label>
            <p>
                <?php
                ProcessQuery("Phone","EmergencyContact",$PersonID)
                ?>
            </p>
        </div>
        <!--EMERGENCY RELATIONSHIP INPUT-->
        <div class="form-group">
            <label>Relationship:</label>
            <p>
                <?php
                ProcessQuery("Relationship","EmergencyContact",$PersonID)
                ?>
            </p>
        </div>
        <br>
        <!--EXPERIENCE AND REQUIREMENTS-->
        <h3 class="applicationheader" id="experienceinfo">Experience and Requirements</h3>
        <br>
        <div class="form-group">
            <label>Please briefly describe your relevant hands-on experience with animals, if any. What did you enjoy about the experience? What did you dislike?</label>
            <p>                        
			<?php
                ProcessQuery("Answer1","AnimalCare",$PersonID);
            ?>
			</p>
        </div>
        <br>
        <div class="form-group">
            <label>Carnivorous patients are sometimes unable to eat food items whole due to their injuries; you may be required to cut and divide dead rodents, chicks, and fishes into smaller portions. Are you comfortable handling dead animals for this purpose?</label>
            <p>
			<?php
                ProcessQuery("Answer2","AnimalCare",$PersonID);
            ?>
			
			</p>
        </div>
        <br>
        <div class="form-group">
            <label>Prior to release from the Wildlife Center, many predatory birds are presented with live mice in order to evaluate their ability to capture prey in a controlled and measurable environment. What is your opinion on using live-prey for this purpose?</label>
            <p>
			<?php
                ProcessQuery("Answer3","AnimalCare",$PersonID);
            ?>
			
			</p>
        </div>
        <br>
        <div class="form-group">
            <label>Wildlife rehabilitation requires daily outdoor work -- year-round and regardless of weather conditions. Are you able to work outside during all seasons? If not, what are your limitations?</label>
            <p>
			
			<?php
                ProcessQuery("Answer4","AnimalCare",$PersonID);
            ?>
			
			</p>
        </div>
    </form>
    <form class="animalcareapp">
        <div class="form-group">
            <label>Are you able to lift 40 pounds on potentially uneven surfaces with minimal assistance?</label>
            <p>
                <!--PHP HERE-->
            </p>
        </div>
        <br>
        <div class="form-group">
            <label>If not, are you willing to become vaccinated at your own cost?</label>
            <p>
                <!--PHP HERE-->
            </p>
        </div>
    </form>
    <br>
    <form class="animalcareapp">
        <div class="form-group">
            <label>Please list all food and animal allergies, if any</label>
            <p>
                <!--PHP HERE-->
            </p>
        </div>
    </form>
    <br>
    <!--AVAILABILITY INPUT-->
    <form class="animalcareapp">
        <div class="form-group">
            <label>Will you be able to commit to either a six-month or one-year schedule, with at least one shift (four hours) per week?</label>
            <p>
                <!--PHP HERE-->
            </p>
        </div>
    </form>
    <br>
    <form class="animalcareapp" method="post" action="newapplicants.php?id=<?php print $PersonID ?>">
        <div class="form-group">
            <label>Do you belong to any animal rights groups (PETA, The Humane Society, etc.)? If so, which ones?</label>
            <p>
			<?php
                ProcessQuery("Answer5","AnimalCare",$PersonID);
            ?>
			</p>
        </div>
        <br>
        <div class="form-group">
            <label>What do you hope to learn or accomplish by volunteering at the Wildlife Center of Virginia?</label>
            <p>
			
			<?php
                ProcessQuery("Answer6","AnimalCare",$PersonID);
            ?>
			</p>
        </div>
        <br>
        <div class="form-group">
            <label>Please describe an environmental or wildlife-based issue you feel passionately about, and why:</label>
            <p>
			<?php
                ProcessQuery("Answer7","AnimalCare",$PersonID);
            ?>
			</p>
        </div>
        <br>
        <div class="form-group">
            <label>Is there anything else that you’d like us to know about yourself or your experience?</label>
            <p>
			<?php
                ProcessQuery("Answer8","AnimalCare",$PersonID);
            ?>
			
			</p>
        </div>
        <br>
        <a href="#"><h4 id="resumecheck">Resume</h4></a>
        <br>
        <br>
        <br>
        <a href="#"><h4 id="coverlettercheck">Cover Letter</h4></a>
        <br>
        <br>
        <br>
        <hr>

        <!--SUBMIT BUTTON-->
        <div class="text-center">
            <input type="submit" value="Approve Applicant" class="btn btn-primary submit" id="approvebutton" name ="approvebutton">
            <input type="submit" value="Save For Later" class="btn btn-primary submit" id="savebutton" name ="savebutton">
        </div>
        <br>
    </form>
</div>
<!--END COL XS 12-->
</div>
<!--END ROW APPLICATION-->


</body>
</html>
<?php
Function ProcessQuery ($attribute, $table, $id){
    $server = "localhost";
    $user = "root";
    $password = "sqlpass";
    $database = "wildlife";
    $query = "Select " . $attribute . " from " . $table . " where PersonID = " . $id . ";";
    $con = mysql_connect($server, $user, $password);
    if (!empty($con)){
        //echo "Connected Successfully";
        if (mysql_select_db($database, $con)){
            //echo "Selected database successfully";
            $resultset = mysql_query($query, $con);
            if ($resultset==true){
                //echo "resultset successfull";

                while ($row = mysql_fetch_array($resultset)){
                    //print("<table border=0 class=stylec1>");
                    $state = $row[$attribute];
                    print $state;

                }

            }
        }
    }
}

