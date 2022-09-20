<html>
<head>
	<h1>Twinkle Twinkle</h1>
</head>

<body>
	<?php
	// EXERCISE 1
		echo "Twinkle, Twinkle little star.";
	?>
	
	<br><br>
	<?php
		$firstWord = "Shine";
		$secondWord = "Sun";

		echo "$firstWord, $firstWord little $secondWord.";
	?>

	<br><br>
	<?php
	// EXERCISE 2
		$x = 10;
		$y = 7;

		echo "$x + $y = " . $x + $y . "<br>";
		echo "$x - $y = " . $x - $y . "<br>";
		echo "$x * $y = " . $x * $y . "<br>";
		echo "$x / $y = " . $x / $y . "<br>";
		echo "$x % $y = " . $x % $y . "<br>";
	?>

	<br><br>
	<?php
	// EXERCISE 3
		$variable = 8;
		echo "Value is now " . $variable. ". <br>";

		$variable += 2;
 		echo "Add 2. Value is now " . $variable . ". <br>";

 		$variable -= 4;
 		echo "Subtract 4. Value is now " . $variable . ". <br>";
 		
 		$variable *= 5;
 		echo "Multiply by 5. Value is now " . $variable . ". <br>";
 		
 		$variable /= 3;
 		echo "Divide by 3. Value is now " . $variable  . ". <br>";
 		
 		$variable = ++$variable;
 		echo "Increment value by one. Value is now " . $variable  . ". <br>";
 		
 		$variable = --$variable;
 		echo "Decrement value by one. Value is now " . $variable  . ". <br>";
	?>

	<br><br>
	<?php
	// EXERCISE 4
		$name = "Harry";
		$age = 28;
		$value = NULL;

		var_dump($name);
		echo "<br>";
		print_r($name);
		echo "<br>";
		var_dump($age);
		echo "<br>";
		var_dump($value);
	?>

	<br><br>
	<?php
	// EXERCISE 5
		$around = "around";
		
		echo 'What goes ' . $around . ', comes ' . $around . '.';
	?>

	<br><br>
	<?php
	// EXERCISE 6
		for ($i = 1; $i <= 12; $i++) {
			echo $i . '*' . $i . '=' . pow($i,2) . '<br>';
		}
	?>

	<br><br>
	<table align="center" width="100%">
	<?php
	// EXERCISE 7
		$num = 7;

		for($i = 1; $i <= 7; $i++) {	
    		echo "<tr>";
	
			for($j =1; $j <= $num; $j++) {
				$multiplication_table = ($i * $j);
				echo "<td> $multiplication_table </td>";
			}
			echo "<tr/>";
		}
?>
</table>
</body>
</html>
