<?php


	class Sort
	{
		/*  Сортировка пузырьком
		*
		*/
		public function bubbleSort($arr): array
		{
			$arrLength = count($arr);

			for ($i = 0; $i < $arrLength; $i++) {
				for ($j = $i + 1; $j < $arrLength; $j++) {
					if ($arr[$i] > $arr[$j]) {
						[$arr[$i], $arr[$j]] = [$arr[$j], $arr[$i]];
					}
				}
			}
			return $arr;
		}

		/* Шейкерная сортировка
		 *
		 * */
		public function shakeSort($arr): array
		{
			$count = count($arr);
			$left = 0;
			$right = $count - 1;

			do {
				for ($i = $left; $i < $right; $i++) {
					if ($arr[$i] > $arr[$i + 1]) {
						[$arr[$i], $arr[$i + 1]] = [$arr[$i + 1], $arr[$i]];
					}
				}

				$right--;

				for ($i = $right; $i > $left; $i--) {
					if ($arr[$i] < $arr[$i - 1]) {
						[$arr[$i], $arr[$i - 1]] = [$arr[$i - 1], $arr[$i]];
					}
				}

				$left++;

			} while ($left <= $right);

			return $arr;
		}

		/* Быстрая сортировка
		 *
		 * */
		public function quickSort($arr): array
		{
			if (count($arr) < 2) {
				return $arr;
			}

			$pivot = $arr[0];
			$less = [];
			$greater = [];

			for ($i = 1; $i < count($arr); $i++) {
				if ($arr[$i] < $pivot) {
					$less[] = $arr[$i];
				} else {
					$greater[] = $arr[$i];
				}
			}

			return array_merge($this->quickSort($less), [$pivot], $this->quickSort($greater));

		}

		/* Сортировка выбором
		 * */
		public function choiceSort($arr): array
		{
			$count = count($arr);

			if ($count <= 1) {
				return $arr;
			}

			for ($i = 0; $i < $count; $i++) {
				$minIndex = $i;

				for ($j = $i + 1; $j < $count; $j++) {
					if ($arr[$minIndex] > $arr[$j]) {
						$minIndex = $j;
					}

					if ($minIndex != $i) {
						$tmp = $arr[$i];
						$arr[$i] = $arr[$minIndex];
						$arr[$minIndex] = $tmp;
					}
				}
			}

			return $arr;
		}

		/* Сортировка вставкой
		 *
		 * */
		public function insertSort(array $arr): array
		{
			$count = count($arr);
			if ($count <= 1) {
				return $arr;
			}

			for ($i = 1; $i < $count; $i++) {
				$cur_val = $arr[$i];
				$j = $i - 1;

				while ($arr[$j] && $arr[$j] > $cur_val) {
					$arr[$j + 1] = $arr[$j];
					$arr[$j] = $cur_val;
					$j--;
				}
			}

			return $arr;
		}
	}