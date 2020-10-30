<?php
	require_once 'vendor/autoload.php';

	if(!isset($_GET['game'])){
		new app\controllers\TarotController([
			'title' => 'Tarot Cards',
			'description' => 'Tarot Cards game made in PHP. Check out the source file.',
		]);
	}else{
		app\controllers\TarotController::start([
			'cards' => 10,
			'title' => 'Start game',
		]);
	}