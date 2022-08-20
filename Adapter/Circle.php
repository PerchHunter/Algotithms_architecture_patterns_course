<?php


	class Circle implements ICircle
	{
		/**
		 * Circle constructor.
		 */
		public function __construct() {}

		/**
		 * @param int $circumference - длина окружности
		 *
		 * @return float - площадь окружности
		 */
		public function circleArea(int $circumference): float
		{
			return ($circumference ** 2) / (4 * M_PI);
		}
	}