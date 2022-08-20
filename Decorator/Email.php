<?php


	class Email extends Decorator
	{
		private string $to = "";
		private string $subject = "";
		private string $message = "";
		private string|array $additionalHeaders = [];
		private string $additionalParams = "";

		public function sendNotification(): string
		{
			//логика отправки сообщения на почту
			// mail($this->to, $this->subject, $this->message, $this->additionalHeaders, $this->additionalParams);
			return $this->content;
		}
	}