<?php


	namespace App\Observer;


	interface IObserver
	{
		public function notifyMe(string $vacancy): void;
	}