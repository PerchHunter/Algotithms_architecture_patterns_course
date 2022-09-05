<?php

	function BinarySearch($myArray, $num)
	{

		$left = 0;
		$right = count($myArray) - 1;
		$count = 0;

		while ($left <= $right) {
			++$count;

			$middle = floor(($right + $left) / 2);

			if ($myArray[$middle] == $num) {
				echo "Число найдено. Совершено итераций при бинарном поиске : " . $count . PHP_EOL;
				return $middle;
			} elseif ($myArray[$middle] > $num) {
				$right = $middle - 1;
			} elseif ($myArray[$middle] < $num) {
				$left = $middle + 1;
			}
		}

		echo "Число не найдено. Совершено итераций при бинарном поиске : " . $count . PHP_EOL;
		return null;
	}