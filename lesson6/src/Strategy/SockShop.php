<?php


	namespace App\Strategy;


	class SockShop
	{
		private array $products;


		public function getProducts(): array
		{
			return $this->products;
		}


		public function addProduct(object $product): void
		{
			 $this->products[] = $product;
		}



	}