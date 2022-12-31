<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Inclusions</title>
	</head>
	<body>
		<?php
			/* You can include files into your PHP files, just don't include binary files! */
			/* Include is like copy pasting a file into this file, so you have
			 * to be careful on what you include (like, don't include files that
			 * redefine the HTML tags). If you included a HTML file that also
			 * has the HTML skeleton (the <!DOCTYPE html> blah blah), and the
			 * file you're including into also has it, then there can be conflict.
			 */
			include "include.html";

			$msg = "Woah, it works!";
			echo("<p>$msg</p>");
		?>
	</body>
</html>
