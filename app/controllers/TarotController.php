<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	class TarotController extends Controller
	{
		protected $cards = 10;

		public function __construct(array $values){
			return parent::view('index', $values);
		}

		public function start($cards = $this->cards){
			for($i = 0; $i < $cards; $i++){
				return parent::view('cards', $values);
			}
		}
	}