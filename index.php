<html>
<head>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<div class="container">
	
	<h3><u>Caloric Intake Calculator</u></h3>
	
	<?php
	if(!isset($view))
	{
		$view = filter_input(INPUT_POST, "v");
		if (!isset($view))
		{
			$view = filter_input(INPUT_GET, "v");
		}
	}
	
	switch($view)
	{
		case "result": 
		include ("view/results.php");
		break;
		
		default:
		include ("view/input.php");
		break;
	}
	?>
	
</div>
</body>
</html>