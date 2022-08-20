<?php

	class SquareAreaLib
	{
		/**
		 * @param int $diagonal - диагональ окружности
		 *
		 * @return float - площадь окружности
		 */
		public function getSquareArea(int $diagonal): float
		{
			$area = ($diagonal**2) / 2;
			return $area;
		}
	}