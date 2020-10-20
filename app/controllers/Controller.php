<?php
	class Controller
	{
		protected $production = 0;

		public function __construct(){
			echo 'construct';
		}

		function main(){
			echo 'Main Controller';
		}
	}