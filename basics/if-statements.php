<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Branching</title>
	</head>
	<body>
		<?php
			/* If statements are the fundamental way of doing branching in
			 * programming. The way if-statements work in PHP is equivalent to
			 * other programming languages, although there is a difference in
			 * the else-if part (Else-if in PHP is written as `elseif()`).
			 * The syntax is the same as other curly braces based languages.
			 */

			$tall = true;
			$heavy = true;

			/* The logical operators are also the same as other curly braces
			 * languages.
			 */
			if ($tall && $heavy) {
				echo("The object is tall and heavy!");
			} elseif ($tall && !$heavy) {
				echo("The object is tall but not heavy!");
			} elseif (!$tall && $heavy) {
				echo("The object is not tall but heavy!");
			} else {
				echo("The object is not tall and not heavy!");
			}
		?>
	</body>
</html>
