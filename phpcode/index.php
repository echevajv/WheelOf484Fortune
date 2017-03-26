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

<!--LOGIN-->
		<div id="allcontent">
			<div class="row">
				<div class="col-xs-12">
					<div class="login-panel panel panel-default">
						<div class="panel-heading" id="panelheading">Log in</div>
							<div class="panel-body">
								<form role="form">
									<fieldset>
	<!--EMAIL INPUT-->
										<div class="form-group">
											<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
										</div>
	<!--PASSWORD INPUT-->
										<div class="form-group">
											<input class="form-control" placeholder="Password" name="password" type="password" value="">
										</div>
	<!--LOG IN BUTTON-->
										<div class="text-right">
										<a href="dashboard.php" class="btn btn-primary" id="loginbutton">Login</a>
										</div>
									</fieldset>
								</form>
							</div>
							<!--END PANEL BODY-->
						</div>
						<!--END PANEL HEADING-->
					</div>
					<!--END LOGIN PANEL-->
				</div>
				<!--END COL XS 12-->
			</div>
			<!--END ROW-->
		<br>

<!--VOLUNTEER SIGN-UP-->
		<div class="row">
			<div class="col-xs-12">
				<div class="login-panel panel panel-default">
					<div class="panel-heading" id="panelheading">Become a Volunteer</div>
					<div class="panel-body">
						<a href="volunteeropportunities.php" id="volunteersignup" type="button" class="btn btn-primary btn-lg btn-block btn-md">Volunteer Sign-Up</a>
					</div>
					<!--END PANEL BODY-->
				</div>
				<!--END LOGIN PANEL-->
			</div>
			<!--END COL XS 12-->
		</div>
		<!--END ROW-->
	</div>
	<!--END ALL CONTENT-->

</body>
</html>
