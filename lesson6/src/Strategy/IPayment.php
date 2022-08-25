<?php


	namespace App\Strategy;


	interface IPayment
	{
		/**
		 * @param float $totalSum
		 * @param string $tel
		 *
		 * @return bool
		 */
		public function payment(float $totalSum, string $tel): bool;
	}