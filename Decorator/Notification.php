<?php


	class Notification implements INotification
	{

		private string $text;

		/**
		 * Notification constructor.
		 *
		 * @param string $text - текст уведомления
		 */
		public function __construct(string $text)
		{
			$this->text = $text;
		}

		public function sendNotification(): void
		{
			//логика отправки уведомления
		}
	}