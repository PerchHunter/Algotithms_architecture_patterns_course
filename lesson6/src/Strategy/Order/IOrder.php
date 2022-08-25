<?php


	namespace App\Strategy\Order;


	use App\Strategy\IPayment;

	interface IOrder
	{
		public function createOrder(float $totalSum, string $tel, IPayment $payMethod): void;
	}