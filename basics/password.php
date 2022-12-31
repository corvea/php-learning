<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Password Protected Page</title>
	</head>
	<body>
		<form action="password.php" method="POST">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password">
			<input type="submit">
		</form>
		<?php
			if ($_POST["password"] == null) {
				echo("<h1>Please enter the password!</h1>");
				return;
			}

			if ($_POST["password"] == "pleaseopenthedoor") {
				echo("<h1>You've successfully opened this password-protected page! Here are some treasures for you!</h1>");
				echo("<p style=\"color: brown;\">10000 gold coins, 5000 emerald shards, 600 cows, 100 horses, and 45 longswords received!</p>");
			} else {
				echo("<h1 style=\"color: darkred;\">Wrong password! Go away, thief!</h1>");
			}
		?>
	</body>
</html>
