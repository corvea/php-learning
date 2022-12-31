<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP While-Loops</title>
	</head>
	<body>
		<?php
			/* PHP While loops behave the same as most other languages. */
			$i = 0;
			while ($i < 5) {
				echo($i . "<br>");
				$i++;
			}
			/* It can still do infinite loops too, so beware */
		?>
	</body>
</html>
