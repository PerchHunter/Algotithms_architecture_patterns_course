<?php


	class CircleAreaAdapter implements ICircle
	{
		private CircleAreaLib $circleAreaLib;

		/**
		 * CircleAreaAdapter constructor.
		 */
		public function __construct(CircleAreaLib $circleAreaLib)
		{
			$this->circleAreaLib = $circleAreaLib;
		}

		/**
		 * @param int $circumference - длина окружности
		 *
		 * @return float - площадь окружности
		 */
		public function circleArea(int $circumference): float
		{
			$diameter = $circumference / M_PI;
			return $this->circleAreaLib->getCircleArea($diameter);
		}
	}