<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP echo</title>
	</head>
	<body>
		<?php
			/* `echo` in PHP is not a function but a language construct.
			 * You should use it without parentheses, because the parentheses
			 * won't be used like when calling a function. The parentheses in
			 * an echo statement with be evaluated like an expression.
			 * See the difference:
			 */

			echo "Hello, world"; // here, the argument to echo is "Hello, world"
			echo "<br>";
			echo("Hello, world"); // here, the argument to echo is ("Hello, world")
			echo "<br>";
			echo "Hello, world" . " Goodbye, world"; // here, the argument is a concatenated string
			echo "<br>";
			echo (2 + 1) * 3; // here, the argument is the single math expression (2 + 1) * 3
			echo "<br>";
			echo "Hello", " world", " I", " love", " you."; // here, there are 5 separate arguments
			echo "<br>";
			echo "The result is " . 1 | 2; // here, the concatenation of string and `1` is done first, then OR'd with `2`
			echo "<br>";
			echo "The result is ", 1 | 2; // here, there are 2 arguments which are evaluated individually
			echo "<br>";
		?>
	</body>
</html>
