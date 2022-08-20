<?php

	function testDecorator($message) {
		$notifications = new ChromeNotification(
			new Email(
				new SMS(
					new Notification($message)
				)
			)
		);

		$notifications->sendNotification();
	}

	testDecorator('Текст уведомления');