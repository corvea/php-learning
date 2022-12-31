<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Calculator</title>
	</head>
	<body>
		<form action="calculator.php" method="GET">
			<label for="operand1">Operand 1</label>
			<input type="number" id="operand1" name="operand1" step="any">
			<label for="operator">Operator</label>
			<select id="operator" name="operator">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="%">%</option>
			</select>
			<label for="operand2">Operand 2</label>
			<input type="number" id="operand2" name="operand2" step="any">
			<input type="submit">
		</form>
		<?php
			$res = 0;

			if ($_GET["operand1"] != null && $_GET["operand2"] != null &&
			    $_GET["operator"] != null) {
				if (($_GET["operator"] == "/" || $_GET["operator"] == "%") &&
					$_GET["operand2"] == 0) {
					echo("<p>Division / modulo by zero, aborting!</p>");
					return;
				}

				switch ($_GET["operator"]) {
				case "+":
					$res = $_GET["operand1"] + $_GET["operand2"];
					break;
				case "-":
					$res = $_GET["operand1"] - $_GET["operand2"];
					break;
				case "*":
					$res = $_GET["operand1"] * $_GET["operand2"];
					break;
				case "/":
					$res = $_GET["operand1"] / $_GET["operand2"];
					break;
				case "%":
					$res = $_GET["operand1"] % $_GET["operand2"];
					break;
				default:
					break;
				}
				echo("<p>Result: $res.</p>");
			}
		?>
	</body>
</html>
