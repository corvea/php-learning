<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Switch Statements</title>
	</head>
	<body>
		<?php
			/* Switch statements are like if statements for a SINGLE variable
			 * to be compared to multiple values or cases. Switch statements in
			 * PHP behave like Java's JDK7++ switch statement.
			 */

			$str1 = "Hello, world!";

			switch($str1) {
			case "Hello, world!":
				echo("Hello, user!");
				break;
			case "Goodbye, world!":
				echo("Goodbye, user!");
				break;
			default:
				echo("I don't understand!");
				break;
			}
		?>
	</body>
</html>
