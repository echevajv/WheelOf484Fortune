<?php
$PersonID = $_GET["id"];

if($_POST['approvebutton'])
{
    SendDBCommand("update Person set status = 'confirmed' where personID = $PersonID;");
}

if($_POST['savebutton'])
{
    SendDBCommand("update Person set status = 'rejected' where personID = $PersonID;");
}
?>

<?php
session_start();



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | New Applicants</title>
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
            <p href="#" id="adminimage" class="navbutton">JANE DOE</p>
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
            <p><a href="sendmessage.php" id="messagebutton" class="navbutton">SEND MESSAGE</a></p>
        </div>

        <div class="col-xs-12 col-sm-2 text-center adminnavbutton adminnavbuttonapplicant" id="columnsixadmin">
            <p><a href="newapplicants.php" id="newapplicantbutton" class="navbuttoncurrent">NEW APPLICANTS</a></p>
        </div>
    </div>
</div>

<!--THANK YOU BOX-->
<div id="allcontentapplicant">
    <div class="row">
        <div class="col-xs-12">
            <div class="login-panel panel panel-default">
                <div class="panel-heading" id="panelheading">New Applicants</div>
                <div class="panel-body">
                    <div id="newapplicantscroll">
                        <table class="table">
                            <tr id="applicantheader">
                                <th class="text-center"><strong>ID</strong></th>
                                <th class="text-center"><strong>Name</strong></th>
                                <th class="text-center"><strong>Date Applied</strong></th>
                                <th class="text-center"><strong></strong></th>
                            </tr>
                            <?php PopulateTable('applicant') ?>
                        </table>

                    </div>
                    <!--END PANEL BODY-->
                </div>
                <!--END LOGIN PANEL-->
            </div>
            <!--END XS 12-->
        </div>
        <!--END ROW-->
    </div>
    <!--END ALL CONTENT THANKYOU-->


    <div id="allcontentsavedapplicant">
        <div class="row">
            <div class="col-xs-12">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" id="panelheading">Saved Applicants</div>
                    <div class="panel-body">
                        <div id="newapplicantscroll">
                            <table class="table">
                                <tr id="applicantheader">
                                    <th class="text-center"><strong>ID</strong></th>
                                    <th class="text-center"><strong>Name</strong></th>
                                    <th class="text-center"><strong>Date Applied</strong></th>
                                    <th class="text-center"><strong></strong></th>
                                </tr>
                                <?php PopulateTable('rejected'); ?>
                            </table>
                        </div>
                        <!--END PANEL BODY-->
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
                    print("<td>$id</td>");
                    print("<td>$name</td>");
                    print("<td>$dateapplied</td>");
                    print('<td><a href="NewApplicantAnimalCare.php?id='.$id.'">View</td>');
                    print("</tr>");
                }
            }
        }
    }
}
?>
<?php
function sendDBCommand($sql){
    //insert into database
    $servername = "localhost";
    $username = "root";
    $password = "sqlpass";
    $dbname = "wildlife";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($conn->query($sql) === TRUE) {
        echo "Volunteer Status Updated";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
