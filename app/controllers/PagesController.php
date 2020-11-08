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
	}