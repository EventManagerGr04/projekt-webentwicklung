<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Events-4-Me</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Google Font Links -->
		<link href='https://fonts.googleapis.com/css?family=Asset' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300' rel='stylesheet' type='text/css'>
		
		<!--<link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
		<link href="css/page.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body role="document">
	<div class="bg">
		<img src="images/collage.jpg" alt="">
	</div>


		<nav class="navbar navbar-inverse navbar-fixed-top">
			<?php include("nav.php"); ?>
		</nav>
		
		<div class="container" role="main">
			<div class="row">
				<div class="col-md-12">
					<?php
					if(isUserLoggedIn() === TRUE) {
						echo "<div class='panel panel-default'>";
						echo "Du bist bereits eingeloggt! <a href='logout.php'>(Ausloggen?)</a>";
						echo "</div>";
					} else {
						if(isset($_POST['einloggen'])) {
							$nickname = $_POST['nickname'];
							$password = sha1($_POST['passwort']);
							
							if(login($nickname, $password) === TRUE) {
								echo "<div class='panel panel-default'>";
								echo "Erfolgreich eingeloggt!";
								echo "</div>";								
							} else {
								echo "<div class='panel panel-default'>";
								echo "Einloggen fehlgeschlagen!";
								echo "</div>";
							}
						}
					?>
					<form class="form-horizontal" action="login.php" method="POST">
						<div class="panel panel-default">
							<div class="panel-heading">Login</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="input1" class="col-sm-2 control-label">Nickname</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="input1" name="nickname" placeholder="Nickname" required />
									</div>
								</div>
								<div class="form-group">
									<label for="input2" class="col-sm-2 control-label">Passwort</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="input2" name="password" placeholder="Passwort" required />
									</div>
								</div>
							</div>
							<div class="panel-footer text-right">
								<button type="submit" class="btn btn-primary" name="einloggen">Einloggen</button>
							</div>
						</div>
					</form>
					<?php
					}
					?>
				</div>
			</div>
		</div>

		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
