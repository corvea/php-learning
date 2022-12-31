<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Checkboxes</title>
	</head>
	<body>
		<form action="checkboxes.php" method="POST">
			<table>
				<tr>
					<td>Apple</td>
					<td>
						<input type="checkbox" name="fruits[]" value="apple">
					</td>
				</tr>
				<tr>
					<td>Orange</td>
					<td>
						<input type="checkbox" name="fruits[]" value="orange">
					</td>
				</tr>
				<tr>
					<td>Pear</td>
					<td>
						<input type="checkbox" name="fruits[]" value="pear">
					</td>
				</tr>
				<tr>
					<td>Kiwi</td>
					<td>
						<input type="checkbox" name="fruits[]" value="kiwi">
					</td>
				</tr>
				<tr>
					<td>Grape</td>
					<td>
						<input type="checkbox" name="fruits[]" value="grape">
					</td>
				</tr>
			</table>
			<input type="submit">
		</form>
		<?php
			echo("<p>You selected:</p>");

			if ($_POST["fruits"] != null) {
				foreach($_POST["fruits"] as $fruit) {
					echo("- " . $fruit . "<br>");
				}
			}
		?>
	</body>
</html>
