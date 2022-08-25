<?php


	namespace App\Observer\Exchange;


	use App\Observer\Employee\IEmployee;

	interface IEmployeeObservers
	{
		public function addEmployee(IEmployee $newEmployee): void;
		public function removeEmployee(IEmployee $unnecessaryEmployee): void;
		public function notify(string $newVacancy): void;
	}