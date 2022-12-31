<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Functions</title>
	</head>
	<body>
		<?php
			/* You can define a function in PHP by using the keyword `function`.
			 * The `return` keyword is used to break out of the function, optionally
			 * also returning a value out of the function to the caller.
			 * The behavior is equivalent to other programming languages.
			 */
			function add($num1, $num2)
			{
				return $num1 + $num2;
			}

			function sub($num1, $num2)
			{
				return $num1 - $num2;
			}

			function mul($num1, $num2)
			{
				return $num1 * $num2;
			}

			function div($num1, $num2)
			{
				if ($num2 != 0)
					return $num1 / $num2;
				else
					return 0;
			}

			/* The way you call a function is similar to how you call a function
			 * in other programming languages....
			 */
			$addition = add(1, 4);
			$subtraction = sub(1, 4);
			$multiplication = mul(6, 4);
			$division = div(1, 4);

			echo("<p>$addition, $subtraction, $multiplication, $division</p>");
		?>
	</body>
</html>
