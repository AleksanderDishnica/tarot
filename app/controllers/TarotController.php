<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\controllers;

	class TarotController extends Controller
	{
		public $cards = 10;

		public function __construct(array $values){
			return parent::view('index', $values);
		}

		public function start(array $values){
			return parent::view('cards/index', $values);
		}
	}