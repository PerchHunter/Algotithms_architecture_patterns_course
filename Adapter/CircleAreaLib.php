<?php


	class CircleAreaLib
	{
		/**
		 * @param int $diameter - диаметр окружности
		 *
		 * @return float - площадь окружности
		 */
		public function getCircleArea(int $diameter): float
		{
			$area = (M_PI * $diameter ** 2) / 4;
			return $area;
		}
	}