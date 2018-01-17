<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sum Arrays</title>
	</head>
	<body>
		<?php

		$arr1 = array(1,2,3,4,5);
		$arr2 = array(6,7,8,9,10);
		$arrSum = array();

		function sumArrays($arr1, $arr2) {
			foreach ($arr1 as &$value1) {
				$key = array_search($value1, $arr1);
				$secondNumber = $arr2[$key];
				$array[] = $value1 + $secondNumber;
			}

				print_r($array);
		}

		sumArrays($arr1, $arr2);
		?>

	</body>
</html>

