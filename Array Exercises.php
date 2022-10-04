<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercises</title>
</head>
<body>
	<h1>Exercise 1: Weather Conditions</h1>

	<?php
		$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

		echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ".";
	?>

	<h1>Exercise 2: Largest Cities</h1>

	<?php
		$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
		$arrlength = count($cities);

			for ($x = 0; $x < $arrlength; $x++){
				print $cities[$x] . ", ";
			}
	?>


	<ul>
	<?php
			for ($x = 0; $x < $arrlength; $x++){
	 			print "<li>$cities[$x]</li>";
	 		}
	?>
	</ul>

	<?php 
		array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
		sort($cities);
		$citylength = count($cities);
	?>

	<ul>
	 <?php
	 		for ($x = 0; $x < $citylength; $x++) {
	 			echo "<li>$cities[$x]</li>";
	 		}
	?>
	</ul>

</body>
</html>
