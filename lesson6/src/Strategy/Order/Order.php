<?php


	namespace App\Strategy\Order;


	use App\Strategy\IPayment;

	class Order implements IOrder
	{

		public function createOrder(float $totalSum, string $tel, IPayment $payMethod): void
		{
			$payMethod->payment($totalSum, $tel);
		}
	}