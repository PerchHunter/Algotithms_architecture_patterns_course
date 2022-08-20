<?php


	class ChromeNotification extends Decorator
	{

		public function sendNotification(): string
		{
			//логика отправки уведомления в Chrome
			return $this->content;
		}
	}