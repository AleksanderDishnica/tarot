<?php
	/**
	 * @author  Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\controllers;
	
	class ViewsController
	{
		// Includes both header and footer views
		public static function view($view_file, $items = []){
			extract($items);

			$base_dir = $_SERVER['DOCUMENT_ROOT'].'/php/tarot/app/views/';

			// Header partial
			include($base_dir.'partials/header.view.php');

			// Selected view file to load
			include($base_dir.$view_file.'.view.php');

			// Footer partial
			include($base_dir.'partials/footer.view.php');
		}

		// Use this method if you don't need header or footer included
		public static function section($view_file, $items = []){
			extract($items);

			$base_dir = $_SERVER['DOCUMENT_ROOT'].'/php/tarot/app/views/';

			// Selected view file to load
			include($base_dir.$view_file.'.view.php');
		}
	}