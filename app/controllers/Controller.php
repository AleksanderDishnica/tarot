<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */

	class Controller
	{
		protected $production = true;

		public function __construct(){
			echo 'construct';
		}

		function main(){
			echo 'Main Controller';
		}
	}