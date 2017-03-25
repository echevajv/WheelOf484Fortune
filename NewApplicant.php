
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
                    <a href="admindashboard.html" id="backbuttonapp"><strong>Back</strong></a>
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
                    <label>First name:<p>
                            <?php
                            ProcessQuery("FirstName","Person",1);
                            ?>
                        </p></label>
                    <br>
                </div>
                <div class="form-group">
                    <label>Last name:<p>
                            <?php
                            ProcessQuery("LastName","Person",1);
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
                            ProcessQuery("Email","Person",1);
                            ?>
                        </p></label>
                </div>
                <!--ADDRESS INPUT-->
                <div class="form-group">
                    <label>Address:<p>
                            <?php
                            ProcessQuery("Address","Person",1);
                            ?>
                        </p></label>
                </div>
                <!--CITY INPUT-->
                <div class="form-group">
                    <label>City:<p>
                            <?php
                            ProcessQuery("City","Person",1);
                            ?>
                        </p></label>
                </div>
                <!--STATE INPUT-->
                <div class="form-group">
                    <label>State:<p>
                            <?php
                            ProcessQuery("State","Person",1);
                            ?>
                        </p></label>
                </div>
                <!--ZIP CODE INPUT-->
                <div class="form-group">
                    <label>Zip Code:<p>
                            <?php
                            ProcessQuery("ZipCode","Person",1);
                            ?>
                        </p></label>
                </div>
                <!--PHONE INPUT-->
                <div class="form-group">
                    <label>Phone:<p>
                            <?php
                            ProcessQuery("Phone","Person",1);
                            ?>
                        </p></label>
                </div>
                <!--DOB INPUT-->
                <form class="animalcareapp">
                    <div class="form-group">
                        <label>Date of Birth:<p>
                                <?php
                                ProcessQuery("DateOfBirth","Person",1);
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
                <p>PHP HERE</p>
                <br>
            </div>
            <label>Season availability (check all for year round)</label>
            <p>
                <?php
                ProcessQuery("SeasonAvailability","Person",1);
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
                    ProcessQuery("RabiesVaccinated","Person",1);
                    ?>
                </p>
            </div>
            <div class="form-group">
                <label>Do you hold a valid permit to rehabilitate wildlife in the state of Viginia?</label>
                <p>
                    <?php
                    ProcessQuery("ValidPermit","Person",1);
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
                    ProcessQuery("Name","EmergencyContact",1)
                    ?>
                </p>
            </div>
            <!--EMERGENCY PHONE INPUT-->
            <div class="form-group">
                <label>Phone:</label>
                <p>
                    <?php
                    ProcessQuery("Phone","EmergencyContact",1)
                    ?>
                </p>
            </div>
            <!--EMERGENCY RELATIONSHIP INPUT-->
            <div class="form-group">
                <label>Relationship:</label>
                <p>
                    <?php
                    ProcessQuery("Relationship","EmergencyContact",1)
                    ?>
                </p>
            </div>
            <br>
            <!--EXPERIENCE AND REQUIREMENTS-->
            <h3 class="applicationheader" id="experienceinfo">Experience and Requirements</h3>
            <br>
            <div class="form-group">
                <label>Please briefly describe your relevant hands-on experience with animals, if any. What did you enjoy about the experience? What did you dislike?</label>
                <p>PHP HERE</p>
            </div>
            <br>
            <div class="form-group">
                <label>Carnivorous patients are sometimes unable to eat food items whole due to their injuries; you may be required to cut and divide dead rodents, chicks, and fishes into smaller portions. Are you comfortable handling dead animals for this purpose?</label>
                <p>PHP HERE</p>
            </div>
            <br>
            <div class="form-group">
                <label>Prior to release from the Wildlife Center, many predatory birds are presented with live mice in order to evaluate their ability to capture prey in a controlled and measurable environment. What is your opinion on using live-prey for this purpose?</label>
                <p>PHP HERE</p>
            </div>
            <br>
            <div class="form-group">
                <label>Wildlife rehabilitation requires daily outdoor work -- year-round and regardless of weather conditions. Are you able to work outside during all seasons? If not, what are your limitations?</label>
                <p>PHP HERE</p>
            </div>
        </form>
        <form class="animalcareapp">
            <div class="form-group">
                <label>Are you able to lift 40 pounds on potentially uneven surfaces with minimal assistance?</label>
                <p>PHP HERE</p>
            </div>
            <br>
            <div class="form-group">
                <label>If not, are you willing to become vaccinated at your own cost?</label>
                <p>PHP HERE</p>
            </div>
        </form>
        <br>
        <form class="animalcareapp">
            <div class="form-group">
                <label>Please list all food and animal allergies, if any</label>
                <p>PHP HERE</p>
            </div>
        </form>
        <br>
        <!--AVAILABILITY INPUT-->
        <form class="animalcareapp">
            <div class="form-group">
                <label>Will you be able to commit to either a six-month or one-year schedule, with at least one shift (four hours) per week?</label>
                <p>PHP HERE</p>
            </div>
        </form>
        <br>
        <form class="animalcareapp">
            <div class="form-group">
                <label>Do you belong to any animal rights groups (PETA, The Humane Society, etc.)? If so, which ones?</label>
                <p>PHP HERE</p>
            </div>
            <br>
            <div class="form-group">
                <label>What do you hope to learn or accomplish by volunteering at the Wildlife Center of Virginia?</label>
                <p>PHP HERE</p>
            </div>
            <br>
            <div class="form-group">
                <label>Please describe an environmental or wildlife-based issue you feel passionately about, and why:</label>
                <p>PHP HERE</p>
            </div>
            <br>
            <div class="form-group">
                <label>Is there anything else that you’d like us to know about yourself or your experience?</label>
                <p>PHP HERE</p>
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
                <a href="#" type="submit" class="btn btn-primary submit" id="approvebutton"><strong>Approve applicant</strong></a>
                <a href="#" type="submit" class="btn btn-primary submit" id="savebutton"><strong>Save for later</strong></a>
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
?>