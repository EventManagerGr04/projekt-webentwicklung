<?php

	switch($section)
	{
		case "events":
			include("events.php");
			break;
		
		case "createlocation":
			include("createlocation.php");
			break;
			
		case "createevent":
			include("createevent.php");
			break;
			
		case "register":
			include("register.php");
			break;
		
		default:
			include("events.php");
			break;
	}

?>