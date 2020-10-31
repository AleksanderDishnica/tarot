<?php
	require_once 'vendor/autoload.php';

	use app\controllers\TarotController as TarotController;
	use app\controllers\UsersController as UsersController;

	// new UsersController();die();

	if(!isset($_GET['game'])){
		new TarotController([
			'title' => 'Tarot Cards',
			'description' => 'Tarot Cards game made in PHP. Check out the source file.',
		]);
	}else{
		TarotController::start([
			'cards' => 10,
			'title' => 'Start game',
		]);
	}