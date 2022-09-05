<?php

	function InterpolationSearch($myArray, $num)
	{
		$start = 0;
		$last = count($myArray) - 1;
		$count = 0;

		while (($start <= $last) && ($num >= $myArray[$start]) && ($num <= $myArray[$last])) {
			$pos = floor($start + (
				             (($last - $start) / ($myArray[$last] - $myArray[$start]))
				             * ($num - $myArray[$start])
			             ));
			++$count;

			if ($myArray[$pos] == $num) {
				echo "Число найдено. Совершено итераций при интерполяционном поиске : " . $count . PHP_EOL;
				return $pos;
			}

			if ($myArray[$pos] < $num) {
				$start = $pos + 1;
			} else {
				$last = $pos - 1;
			}
		}

		echo "Число не найдено. Совершено итераций при интерполяционном поиске : " . $count . PHP_EOL;
		return null;
	}