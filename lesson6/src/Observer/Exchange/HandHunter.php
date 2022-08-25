<?php


	namespace App\Observer\Exchange;


	use App\Observer\Employee\IEmployee;

	class HandHunter implements IExchangeVacancy, IEmployeeObservers
	{
		private array $openVacancies = [];
		private array $employee = [];

		public function addVacancy(string $newVacancy): void
		{
			$this->openVacancies[] = $newVacancy;
			$this->notify($newVacancy);
		}

		public function removeVacancy(string $unnecessaryVacancy): void
		{
			foreach ($this->openVacancies as $vacancy) {
				if ($unnecessaryVacancy === $vacancy) {
					unset($vacancy);
					break;
				}
			}
		}

		public function addEmployee(IEmployee $newEmployee): void
		{
			$this->employee[] = $newEmployee;
		}

		public function removeEmployee(IEmployee $unnecessaryEmployee): void
		{
			foreach ($this->employee as $employee) {
				if ($unnecessaryEmployee === $employee) {
					unset($employee);
					break;
				}
			}
		}

		public function notify(string $newVacancy): void
		{
			foreach ($this->employee as $employee) {
				if ($employee->vacancy === $newVacancy) {
					$employee->notifyMe($newVacancy);
				}
			}
		}
	}