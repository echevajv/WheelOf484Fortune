<?php


ini_set('display_startup_errors', 1); ini_set('display_errors', 1); error_reporting(-1);
ini_set('error_reporting', 30711);

/**
 * Created by PhpStorm.
 * User: AHasan
 * Date: 3/25/2017
 * Time: 11:36 AM
 */
class AnimalCareVolunteer
{
    private $PersonId;
    private $FirstName;
    private $LastName;
    private $MI;
    private $Email;
    private $Address;
    private $City;
    private $State;
    private $Zip;
    private $Phone;
    private $DOB;
    private $PersonTypeID;
    private $AllergiesOrLimitations;
    private $RabiesVaccinated;
    private $Permit;
    private $PermitCategory;
    private $Status;
    private $YearlyHours;
    private $YearlyMiles;
    private $DaysID;
    private $SeasonsID;

    public function __construct($FirstName, $LastName, $MI, $Email, $Address, $City, $State, $Zip, $Phone, $DOB, $AllergiesOrLimitations, $RabiesVaccinated, $Permit, $PermitCategory, $Status, $YearlyHours, $YearlyMiles)
    {
        $this->setFirstName($FirstName);
        $this->setLastName($LastName);
        $this->setMI($MI);
        $this->setEmail($Email);
        $this->setAddress($Address);
        $this->setCity($City);
        $this->setState($State);
        $this->setZip($Zip);
        $this->setPhone($Phone);
        $this->setDOB($DOB);
        $this->setAllergies($AllergiesOrLimitations);
        $this->setVaccination($RabiesVaccinated);
        $this->setPermit($Permit);
        $this->setPermitCat($PermitCategory);
        $this->setStatus($Status);
        $this->setYearlyHours($YearlyHours);
        $this->setYearlyMiles($YearlyMiles);

    }

    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function setMI($MI)
    {
        $this->MI = $MI;
    }

    public function getMI()
    {
        return $this->MI;
    }



    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function getEmail()
    {
        return $this->Email;
    }



    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function setCity($City)
    {
        $this->City = $City;
    }

    public function getCity()
    {
        return $this->City;
    }



    public function setState($State)
    {
        $this->State = $State;
    }

    public function getState()
    {
        return $this->State;
    }

    public function setZip($Zip)
    {
        $this->Zip = $Zip;
    }

    public function getZip()
    {
        return $this->Zip;
    }

    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    public function setDOB($DOB)
    {
        $this->DOB = $DOB;
    }

    public function getDOB()
    {
        return $this->DOB;
    }

    public function setAllergies($AllergiesOrLimitations)
    {
        $this->AllergiesOrLimitations = $AllergiesOrLimitations;
    }

    public function getAllergies()
    {
        return $this->AllergiesOrLimitations;
    }

    public function setVaccination($RabiesVaccinated)
    {
        $this->RabiesVaccinated = $RabiesVaccinated;
    }

    public function getVaccination()
    {
        return $this->RabiesVaccinated;
    }

    public function setPermit($Permit)
    {
        $this->Permit = $Permit;
    }

    public function getPermit()
    {
        return $this->Permit;
    }

    public function setPermitCat($PermitCategory)
    {
        $this->PermitCategory = $PermitCategory;
    }

    public function getPermitCat()
    {
        return $this->PermitCategory;
    }

    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    public function getStatus()
    {
        return $this->Status;
    }

    public function setYearlyHours($YearlyHours)
    {
        $this->YearlyHours = $YearlyHours;
    }

    public function getYearlyHours()
    {
        return $this->YearlyHours;
    }

    public function setYearlyMiles($YearlyMiles)
    {
        $this->YearlyMiles = $YearlyMiles;
    }

    public function getYearlyMiles()
    {
        return $this->YearlyMiles;
    }

    public function getPersonType()
    {
        return $this->PersonTypeID;
    }

    public function getDaysID()
    {
        return $this->DaysID;
    }

    public function getSeasonsID()
    {
        return $this->SeasonsID;
    }

}



# sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['Submission'])) {
    $FirstName = sanitize_input($_POST["firstname"]);
    $LastName = sanitize_input($_POST["lastname"]);
    $MI = "A";                                                                      
	   //$MI = sanitize_input($_POST["mi"]);
    $Email = sanitize_input($_POST["email"]);
    $Address = sanitize_input($_POST["address"]);
    $City = sanitize_input($_POST["city"]);
    $State = sanitize_input($_POST["state"]);
    $Zip = sanitize_input($_POST["zipcode"]);
    $Phone = sanitize_input($_POST["phone"]);
    $DOB = sanitize_input($_POST["dateofbirth"]);
    $PersonTypeID = 1;
    $AllergiesOrLimitations = sanitize_input($_POST["allergiesquestion"]);
	
	$RabiesVaccinated = sanitize_input($_POST["rabiesquestion"]);
	if ($RabiesVaccinated == "Yes")
	{
		$RabiesVaccinated = "Y";
	}
	else
	{
		$RabiesVaccinated = "N";
	}		
	$Permit = "";	
    $PermitCategory = "";                             
    $Status = "Applicant"; #starts off as applicant, but needs a trigger to change
    $YearlyHours = 0; //needs to be calculated
    $YearlyMiles = 0; //needs to be calculated
    $DateApplied = "2017-03-16";
    $Password = 1111;
    $LastUpdatedBy = 'Amaana';
    $LastUpdated = '2017-03-16';


    // TEST CONNECTION TO SERVER
    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'wildlife';
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        echo('Could not connect: ' . mysqli_error());
    }

	
    $AnimalCareVolunteer = new AnimalCareVolunteer($FirstName,
      $LastName, $MI, $Email, $Address, $City, $State, $Zip, $Phone, $DOB,
     $AllergiesOrLimitations, $RabiesVaccinated, $Permit, $PermitCategory, $Status, $YearlyHours, $YearlyMiles);
	 
	  $stmt = $conn->prepare("INSERT INTO Person(FIRSTNAME, LASTNAME, MI, EMAIL, PHONE, ADDRESS, CITY,"
        . " STATE, ZIPCODE, DATEOFBIRTH, ALLERGIESORLIMITATIONS, RABIESVACCINATED, VALIDPERMIT, PERMITCATEGORY,"
        . " STATUS, YEARLYHOURS, YEARLYMILESDRIVEN, DATEAPPLIED, PASSWORD, PERSONTYPEID, LASTUPDATEDBY, LASTUPDATED) "
        . " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");


    $stmt->bind_param("sssssssssssssssiississ",
        $AnimalCareVolunteer->getFirstName(),
        $AnimalCareVolunteer->getLastName(),
        $AnimalCareVolunteer->getMI(),
        $AnimalCareVolunteer->getEmail(),
        $AnimalCareVolunteer->getPhone(),
        $AnimalCareVolunteer->getAddress(),
        $AnimalCareVolunteer->getCity(),
        $AnimalCareVolunteer->getState(),
        $AnimalCareVolunteer->getZip(),
        $AnimalCareVolunteer->getDOB(),
        $AnimalCareVolunteer->getAllergies(),
        $AnimalCareVolunteer->getVaccination(),
        $AnimalCareVolunteer->getPermit(),
        $AnimalCareVolunteer->getPermitCat(),
        $AnimalCareVolunteer->getStatus(),
        $AnimalCareVolunteer->getYearlyHours(),
        $AnimalCareVolunteer->getYearlyMiles(),
		$DateApplied,
		$Password,
        $AnimalCareVolunteer->getPersonType(),
        $LastUpdatedBy,
		$LastUpdated);
        $stmt->execute();
		echo $stmt->error;
		
	
?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
</head>

<body id="loginbody">

<!--BACKGROUND IMAGES-->
<div class="row">
    <img src="images/sun.png" id="sun">
    <img src="images/trees.png" id="trees">
</div>
<!--END ROW-->

<!--THANK YOU BOX-->
<div id="allcontentthankyou">
    <div class="row">
        <div class="col-xs-12">
            <div class="login-panel panel panel-default">
                <div class="panel-heading" id="panelheading">Thank You For Applying!</div>
                <div class="panel-body">POST STUFF
                    <table>
                        <?php
                        /*show all post variables
						
                        foreach ($_POST as $key => $value) {
                            echo "<tr>";
                            echo "<td>";
                            echo $key;
                            echo "</td>";
                            echo "<td>";
                            echo $value;
                            echo "</td>";
                            echo "</tr>";
                        }
			*/
    

                        ?>
                    </table>
                    <p id="thankyoutext">Once we receive your application, the front-desk staff will email applicants with additional information. Unless otherwise specified, applicants will be added to the active referral list immediately.
                        <br>
                        <br>
                        New transport volunteers may receive calls from the public for transport assistance right away, or it may be several months until the first call.
                        <br>
                        <br>
                        Thanks for your interest in volunteering with the Wildlife Center of Virginia!</p>
                </div>
                <!--END PANEL BODY-->
                <div class="text-right">
                    <a href="index.php" class="btn btn-primary" id="backtologinbutton">Back To Login Page</a>
                </div>
                <!--END TEXT RIGHT-->
            </div>
            <!--END LOGIN PANEL-->
        </div>
        <!--END XS 12-->
    </div>
    <!--END ROW-->
</div>
<!--END ALL CONTENT THANKYOU-->

</body>






</html>
