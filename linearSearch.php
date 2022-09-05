<?php

	function LinearSearch($myArray, $num)
	{
		$count = count($myArray);
		for ($i = 0; $i < $count; $i++) {
			if ($myArray[$i] == $num) {
				echo "Число найдено. Совершено итераций при линейном поиске : " . $count . PHP_EOL;
				return $i;
			}
			elseif ($myArray[$i] > $num) return null;
		}

		echo "Число не найдено. Совершено итераций при линейном поиске : " . $count . PHP_EOL;
		return null;
	}