<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Associative Arrays</title>
	</head>
	<body>
		<?php
			/* This is an example of associative array, that is, an array that has
			 * strings as the index that has a value associated to it (key-value
			 * pairs). The keys must be unique in an associative array. The values
			 * don't have to be unique.
			 */
			$grades = array("Jim" => 100, "Barbara" => 98, "Samuel" => 76, "Frederick" => 99);
			echo("<p>" . $grades["Jim"] . "</p>");
			echo("<p>" . $grades["Barbara"] . "</p>");
			echo("<p>" . $grades["Samuel"] . "</p>");
			echo("<p>" . $grades["Frederick"] . "</p>");
			echo(count($grades));

			/* The $_GET and $_POST variables are associative arrays too! */
		?>
	</body>
</html>
