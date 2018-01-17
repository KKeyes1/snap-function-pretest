<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>String Repeat</title>
	</head>
	<body>
	<?php
	session_start();

		$input = trim($_POST["times"]);
		$str = trim($_POST["string"]);

		function stringRepeat($input, $str) {
			$newString = "";
			for($k = 1; $k <= $input; $k = $k + 1) {
				for($i = 0; $i < strlen($str); $i = $i + 1) {
					$char = $str{$i};
					echo $char;
				}

			}

		}

	stringRepeat ($input, $str);

	?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="string-repeat" method="post">
			<div>
				<?php echo "Enter your string and the number of times you want to repeat it!"; ?>
				<input type="text" id="string" name="string">
				<input type="number" id="times" name="times">
				<input type="submit" name="string-repeat">
			</div>
		</form>
	</body>
</html>