<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\controllers;

	class TarotController extends Controller
	{
		public $cards = 10;

		public function __construct(array $values){
			return parent::section('index', $values);
		}

		public function start(array $values){
			return parent::section('cards/index', $values);
		}
	}