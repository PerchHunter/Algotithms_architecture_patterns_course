<?php

	class Square implements ISquare
	{
		/**
		 * Square constructor.
		 */
		public function __construct() {}

		/**
		 * @param int $sideSquare - длина стороны квадрата
		 *
		 * @return float - площадь квадрата
		 */
		public function squareArea(int $sideSquare): float
		{
			return $sideSquare ** 2;
		}
	}