<html>
<head>
<title>Caloric Intake Calculator - Data Entry</title>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<div class="calculator_container">
	<form method="post" action="./?v=result" class="calculator">
		Gender:
		<label for="Male">Male </label><input type="radio" name="gender" id="Male" value="Male" checked></input>
		<label for="Female">Female </label><input type="radio" name="gender" id="Female" value="Female"></input></br>
	
		<label for="weight">Weight: </label><input type="number" name="weight" id="weight" value="75" required></input> 
		<select name="weight_unit">
			<option value="kg">Kgs</option>
			<option value="lb">Lbs</option>
		</select>
		<br>
		<label for="height">Height: </label><input type="number" name="height" id="height" value="160" required></input> Cm<br>
		<label for="age">Age: </label> <input type="number" name="age" id="age" value="25" required></input> Years<br>
	
		Level of Activity: 
		<select name="active_level" id="active_level">
			<option value="1">Sedentary (little or no exercise)</option>
			<option value="2">Lightly Active(light exercise/sports 1-3 days/week)</option>
			<option value="3">Moderately Active (moderate exercise/sports 3-5 days/week)</option>
			<option value="4">Very Active (hard exercise/sports 6-7 days/week)</option>
			<option value="5">Extra Active (very hard exercise/sports and physical job, or training 2x daily)</option>
		</select><br>
	
		<input type="submit" value="Calculate">
	</form>
</div>
<a href="../">Return to Portfolio</a>
</body>
</html>