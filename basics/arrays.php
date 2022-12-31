<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Arrays</title>
	</head>
	<body>
		<?php
			$friends = array("Eugene Crabs", "Spongebob Squarepants", "Patrick Star", "Squidward Tentacles");
			echo($friends[0] . "<br>");
			echo($friends[1] . "<br>");
			echo($friends[2] . "<br>");
			echo($friends[3] . "<br>");

			$friends[1] = "Spongebob Trianglepants";
			echo($friends[1] . "<br>");

			/* php arrays can be composed of elements with differing data types */
			$messy = array("What?", 1, 1.555, true, false, "Hello!");
			echo($messy[0] . "<br>");
			echo($messy[1] . "<br>");
			echo($messy[2] . "<br>");
			echo($messy[3] . "<br>");
			echo($messy[4] . "<br>");
			echo($messy[5] . "<br>");

			/* you can also add new stuff into a predefined array */
			echo("<p> There are " . count($friends) . " elements in \$friends array.</p>");
			$friends[4] = "Sandy Cheeks";
			echo($friends[4] . "<br>");
			echo("<p> There are " . count($friends) . " elements in \$friends array.</p>");
			/* see how the array size goes up? */
		?>
	</body>
</html>
