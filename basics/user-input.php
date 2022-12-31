<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP User Input</title>
	</head>
	<body>
		<form action="user-input.php" method="GET">
			<table>
				<tr>
					<td>
						<p style="display: inline;">Name:</p>
					</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>
						<p style="display: inline;">Age:</p>
					</td>
					<td>
						<input type="number" name="age">
					</td>
				</tr>
			<table>
			<input type="submit">
		</form>
		<?php
			if ($_GET["name"] != null && $_GET["age"] != null) {
				if ($_GET["name"] == "corvea") {
					echo("<p>Hello, world's greatest birdie, " . $_GET["name"] . ".</p>");
					echo("<p> You are 219 years old, no matter what!</p>");
				} else {
					echo("<p>Hello, " . $_GET["name"] . ".</p>");
					echo("<p> You are " . $_GET["age"] . " years old.</p>");
				}
			}
		?>
	</body>
</html>
