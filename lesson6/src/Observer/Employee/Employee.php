<?php


	namespace App\Observer\Employee;


	use App\Observer\IObserver;

	class Employee implements IEmployee, IObserver
	{
		private string $name;
		private string $vacancy;
		private string $email;
		private int $experience;

		public function __construct(string $name, string $vacancy, string $email, int $experience)
		{
			$this->name = $name;
			$this->vacancy = $vacancy;
			$this->email = $email;
			$this->experience = $experience;
		}

		public function notifyMe(string $vacancy): void
		{
			echo "На HandHunter появилась нужная вам вакансия $vacancy!";
		}
	}