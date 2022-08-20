<?php


	abstract class Decorator implements INotification
	{
		protected INotification|null $content = null;

		/**
		 * Decorator constructor.
		 *
		 * @param INotification $content
		 */
		public function __construct(INotification $content)
		{
			$this->content = $content;
		}
	}