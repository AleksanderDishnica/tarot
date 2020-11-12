<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\controllers;
	
	// Start session for the start of the page
	session_start();

	class PagesController extends Controller
	{
		public function start(){
			$_SESSION['login'] = false;
		}

		public function header(array $values){
			return parent::section('partials/header', $values);
		}

		public function footer(array $values = []){
			return parent::section('partials/footer', $values);
		}
	}