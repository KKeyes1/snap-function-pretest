<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Answer To Life</title>
	</head>
	<body>
		<?php
		session_start();

		if(isset($_POST["question"])){

			$input = trim($_POST["answer"]);

			if($input == ""){
				echo "empty";
			} elseif($input != "42"){
				echo "false";
			} else {
				echo "true";
			}
		}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="question" method="post">
			<div>
				<?php echo "What is the answer to life, the universe, and everything?"; ?>
				<input type="text" id="answer" name="answer">
				<input type="submit" name="question">
			</div>
		</form>
	</body>
</html>