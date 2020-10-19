<?php
	require_once 'Controller.php';

	class TarotController extends Controller
	{
		public function __construct($number){
			echo "<h1>$number tarot cards</h1>";
		}
	}