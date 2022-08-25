<?php


	namespace App\Strategy;


	class YandexPay implements IPayment
	{

		/**
		 * @inheritDoc
		 */
		public function payment(float $totalSum, string $tel): bool
		{
			//Логика обработки запроса YandexPay

			$result =  'Оплата произведена!';
			if ($result) {
				return true;
			}
			return false;
		}
	}