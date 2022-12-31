<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Learning</title>
	</head>
	<body>
		<?php
			/* variable definitions, use $<YOUR_VARIABLE_NAME_HERE> */
			$name = "corvea"; // string data type
			$age = 219; // integer data type
			$length = 10.3; // floating point data type
			$male = true; // boolean data type
			$msg = "Hello, world!";
			/* variable interpolation, also use $<YOUR_VARIABLE_NAME_HERE> */
			/* NOTICE HOW PHP EVALUATES THE STATEMENTS AND MODIFIES THE WEBPAGE CONTENT */
			/* yeah, we can put HTML code in echo function! */
			echo("<h1>$msg</h1>");
			echo("<hr>");
			echo("<p>I'm $name. I'm $age years old. My length is $length cm. Nice to meet you!</p>");
			/* concatenation operator and some string manipulation functions */
			/* strtoupper converts a string into the UPPERCASE version */
			echo("<p>" . strtoupper($name) . "</p>");
			/* strtolower converts a string into the lowercase version */
			echo("<p>" . strtolower($msg) . "</p>");
			/* strlen returns the number of characters in a string / its length */
			echo("<p>" . strlen($msg) . "</p>");
			/* indexing, starts from index 0 */
			echo($name[0] . "<br>");
			echo($name[1] . "<br>");
			echo($name[2] . "<br>");
			echo($name[3] . "<br>");
			echo($name[4] . "<br>");
			echo($name[5] . "<br>");
			echo("<p>Notice how <code>< p ></code> and <code>< br ></code> tags behave differently</p>");
			/* string replace function, <str_to_be_replaced>, <replacement_str>, <intended_str> */
			echo(str_replace("Hello", "Goodbye", $msg) . "<br>");
			/* substring function, <intended_str>, <start_index>, <optional_length> */
			echo(substr($msg, 0) . "<br>");
			echo(substr($msg, 7) . "<br>");
			echo(substr($msg, 7, 3) . "<br>");
			/* notice how these string manipulating functions don't actually mutate our strings */
			echo($msg . "<br>");
			/* arithmetic operators */
			echo(1 + 3 . "<br>");
			echo(1 - 3 . "<br>");
			echo(11 * 3 . "<br>");
			echo(11 * 3.234 . "<br>");
			echo(11 / 3 . "<br>");
			echo(11 / 3.2 . "<br>");
			echo(11 % 3 . "<br>");
			echo(11 % 6 . "<br>");
			echo(13.4456 . "<br>");
			/* order of operation */
			echo(13 + 2 * 5 . "<br>");
			echo((13 + 2) * 5 . "<br>");
			/* contracted version of arithmetic operators */
			$num = 0;
			echo($num . "<br>");
			$num += 5;
			echo($num . "<br>");
			$num++;
			echo($num . "<br>");
			echo($num++ . "<br>");
			echo(++$num . "<br>");
			$num--;
			echo($num . "<br>");
			echo($num-- . "<br>");
			echo(--$num . "<br>");
			$num -= 3;
			echo($num . "<br>");
			$num *= 4;
			echo($num . "<br>");
			$num /= 2;
			echo($num . "<br>");
			$num %= 3;
			echo($num . "<br>");
			/* abs function returns the positive value of a number */
			$num = -123;
			echo(abs($num) . "<br>");
			$num = -123.2323;
			echo(abs($num) . "<br>");
			/* pow function, x raised to the power y */
			$x = 2;
			$y = 4;
			echo(pow($x, $y) . "<br>");
			/* sqrt function */
			echo(sqrt(144) . "<br>");
			echo(sqrt(99) . "<br>");
			/* min function */
			echo(min(-50, 45) . "<br>");
			/* max function */
			echo(max(50, 50.00001) . "<br>");
			/* round function, rounds to nearest integer */
			echo(round(50.34) . "<br>");
			echo(round(50.50) . "<br>");
			echo(round(50) . "<br>");
			/* ceil and floor function */
			echo(ceil(40.11) . "<br>");
			echo(floor(40.99) . "<br>");
		?>
	</body>
</html>
