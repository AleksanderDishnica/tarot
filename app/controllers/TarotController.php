<?php
	/**
	 * @author  Aleksander Dishnica <adishnica@yahoo.com>
	 */
	class TarotController extends Controller
	{
		protected $base_dir = $_SERVER['DOCUMENT_ROOT'].'/php/tarot/app/views/';
		protected $cards = 10;

		public function __construct($cards = $this->cards, $view_file, $items = []){
			extract($items);

			// Header partial
			include($base_dir.'partials/header.view.php');

			// Selected view file to load
			include($base_dir.$view_file.'.view.php');

			// Footer partial
			include($base_dir.'partials/footer.view.php');
		}
	}