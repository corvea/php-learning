<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Mad Libs Game</title>
		<style>
			input {
				display: block;
			}
		</style>
	</head>
	<body>
		<form action="madlibs.php" method="GET">
			<label for="color">Color:</label>
			<input type="text" id="color" name="color">
			<label for="pluralNoun">Plural Noun:</label>
			<input type="text" id="pluralNoun" name="pluralNoun">
			<label for="adjective">Adjective:</label>
			<input type="text" id="adjective" name="adjective">
			<input type="submit">
		</form>
		<?php
			$color = "_____";
			$pluralNoun = "_____";
			$adjective = "_____";

			if ($_GET["color"] != null)
				$color = $_GET["color"];

			if ($_GET["pluralNoun"] != null)
				$pluralNoun = $_GET["pluralNoun"];

			if ($_GET["adjective"] != null)
				$adjective = $_GET["adjective"];

			echo("<p>Roses are $color. $pluralNoun are blue. Computers are $adjective.</p>");
		?>
	</body>
</html>
