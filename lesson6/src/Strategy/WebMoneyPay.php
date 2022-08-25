<?php


	namespace App\Strategy;


	class WebMoneyPay implements IPayment
	{

		/**
		 * @inheritDoc
		 */
		public function payment(float $totalSum, string $tel): bool
		{
			//Логика обработки запроса WebMoneyPay

			$result =  'Оплата произведена!';
			if ($result) {
				return true;
			}
			return false;
		}
	}