<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Capitalize String</title>
	</head>
	<body>
		<?php
		session_start();
		echo ucfirst($_POST["string"]);
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="input" method="post">
			<div>
				<?php echo "Enter Text"; ?>
				<input type="text" id="string" name="string">
				<input type="submit" name="input">
			</div>
		</form>
	</body>
</html>