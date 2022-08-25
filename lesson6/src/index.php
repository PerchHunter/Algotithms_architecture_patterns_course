<?php
	require(__DIR__ . './../vendor/autoload.php');

	use App\Observer\Employee\Employee;
	use App\Observer\Exchange\HandHunter;
	use App\Strategy\Order\Order;
	use App\Strategy\QiwiPay;

	//test Strategy
	$order = new Order;
	$order->createOrder(1500, +79509509595, new QiwiPay());


	//test Observer
	$exchange = new HandHunter;
	$employeeIvan = new Employee('Иван', 'Senior PHP-разработчик','ivan@mail.ru',7);
	$exchange->addEmployee($employeeIvan);