<?php
	require_once 'vendor/autoload.php';

	if(!isset($_GET['game'])){
		new TarotController([
			'title' => 'Tarot Cards',
			'description' => 'Tarot Cards game made in PHP. Check out the source file.',
		]);
	}else{
		TarotController::start(['cards' => $_GET['game']]);
	}