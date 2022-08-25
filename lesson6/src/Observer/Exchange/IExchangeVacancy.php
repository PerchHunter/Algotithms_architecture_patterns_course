<?php


	namespace App\Observer\Exchange;


	interface IExchangeVacancy
	{
		public function addVacancy(string $newVacancy): void;
		public function removeVacancy(string $unnecessaryVacancy): void;
	}