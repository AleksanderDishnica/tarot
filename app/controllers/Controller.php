<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\controllers;

	class Controller extends ViewsController
	{
		protected $production = true;

		public function __construct(){
			return 'construct';
		}

		function main(){
			return 'Main Controller';
		}
	}