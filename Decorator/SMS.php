<?php


	class SMS extends Decorator
	{

		public function sendNotification(): string
		{
			//логика отправки SMS-сообщения
			return $this->content;
		}
	}