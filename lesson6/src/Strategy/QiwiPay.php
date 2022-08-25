<?php


	namespace App\Strategy;


	class QiwiPay implements IPayment
	{

		/**
		 * @inheritDoc
		 */
		public function payment(float $totalSum, string $tel): bool
		{
			//Логика обработки запроса QiwiPay

			$result =  'Оплата произведена!';
			if ($result) {
				return true;
			}
			return false;
		}
	}