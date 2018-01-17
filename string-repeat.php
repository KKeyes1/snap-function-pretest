<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>String Repeat</title>
	</head>
	<body>
	<?php
	session_start();
	$times = $_POST["string-repeat"];
	$strlen = strlen($_POST["string"]);

	function stringRepeat ($times, $strlen) {
		$newString = "";
		for ($i = 0; $i <= $strlen; $i=$i+1) {
			$char = substr($str, $i, 1);
			$newString = $newString + $char;
		}
		echo $newString;
	}






	?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="string-repeat" method="post">
			<div>
				<?php echo "Enter your string and the number of times you want to repeat it!"; ?>
				<input type="text" id="string" name="string">
				<input type="text" id="times" name="times">
				<input type="submit" name="string-repeat">
			</div>
		</form>
	</body>
</html>