<html>
<head>
	<h1>Twinkle Twinkle</h1>
</head>

<body>
	<?php
	// FIRST EXERCISE 
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
	// SECOND EXERCISE  
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
	// THIRD EXERCISE  
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
	// FOURTH EXERCISE  
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
</body>
</html>
