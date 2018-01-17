<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Dot Product</title>
	</head>
	<body>
		<?php

		$arr1 = array(1,2,3);
		$arr2 = array(1,5,7);
		$arrDot = array();

		function dotProduct($arr1, $arr2) {
			foreach ($arr1 as &$value1) {
				$key = array_search($value1, $arr1);
				$secondNumber = $arr2[$key];
				$arrDot[] = $value1 * $secondNumber;


			}
			echo array_sum($arrDot);
		}

		dotProduct($arr1, $arr2);
		?>

	</body>
</html>