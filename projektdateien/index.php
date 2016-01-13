<?php
	session_start();
	
    if(isset($_GET["section"]))
    {
        $section = $_GET["section"];
    }
    else
    {
        $section = "";
    }
	
	require_once 'mysql.php';
	$db = new DB();
?>
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
		<!--<link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
		<link href="css/page.css" rel="stylesheet">
		
		<!-- Google Font Links -->
		<link href='https://fonts.googleapis.com/css?family=Asset' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300' rel='stylesheet' type='text/css'>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body role="document">

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<?php include("nav.php"); ?>
		</nav>
		
		<div class="container" role="main">
			<?php include("sites.php"); ?>
		</div>

		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
