<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	class TarotController extends Controller
	{
		protected $cards = 10;

		public __construct(array $values){
			return parent::view('index', $values);
		}
	}