<html>

<head>

<?php



$gender = filter_input(INPUT_POST, "gender");

$weight = filter_input(INPUT_POST, "weight");

$weight_unit = filter_input(INPUT_POST, "weight_unit");

$height = filter_input(INPUT_POST, "height");

$age = filter_input(INPUT_POST, "age");

$active_level = filter_input(INPUT_POST, "active_level");

//1-5 = Sedentary - Extra Active



if ($weight_unit == "lb")

{

	$weight = round($weight * 0.453592);

}



if ($gender == "Male")

{

	$bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);

}	

elseif ($gender == "Female")

{

	$bmr = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);

}



switch($active_level)

{

	case "1":

	$multiplier = 1.2;

	break;

	

	case "2":

	$multiplier = 1.375;

	break;

	

	case "3":

	$multiplier = 1.55;

	break;

	

	case "4":

	$multiplier = 1.725;

	break;

	

	case "5":

	$multiplier = 1.9;

	break;

	

	default:

	$multiplier = 1.2;

	break;	

}



$needed_calories = round($bmr * $multiplier);



?>

<title>Caloric Intake Calculator - Results</title>

</head>

<body>



<p>To maintain your current weight, you should consume <b><u><?php echo $needed_calories;?></b></u> calories each day.</p>
<p>To gain weight, you should consume more than <b><u><?php echo $needed_calories;?></b></u> calories each day.</p>
<p>To lose weight, you should consume less than <b><u><?php echo $needed_calories;?></b></u> calories each day.</p>

<a href="./">Return to Calculator</a>

</body>

</html>