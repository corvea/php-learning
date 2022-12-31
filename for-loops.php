<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP For Loops</title>
	</head>
	<body>
		<?php
			echo("0");
			for ($i = 1; $i < 100; $i++) {
				echo(", " . $i);
			}
			echo("<br>");

			$arr = array("I", "love", "chicken", "nuggets", "with", "thick", "gravy");
			foreach($arr as $a) {
				echo($a . " ");
			}
			echo("<br>");

			for ($i = count($arr) - 1; $i >= 0; $i--)
				echo($arr[$i] . " ");
		?>
	</body>
</html>
