<?php


	class SquareAreaAdapter implements ISquare
	{
		private SquareAreaLib $squareAreaLib;

		/**
		 * SquareAreaAdapter constructor.
		 */
		public function __construct(SquareAreaLib $squareAreaLib)
		{
			$this->squareAreaLib = $squareAreaLib;
		}

		/**
		 * @param int $sideSquare - длина квадрата
		 *
		 * @return float - площадь квадрата
		 */
		public function squareArea(int $sideSquare): float
		{
			$diagonal = $sideSquare * sqrt(2);
			return $this->squareAreaLib->getSquareArea($diagonal);
		}
	}