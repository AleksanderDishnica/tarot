<?php
	require_once 'vendor/autoload.php';

	use app\controllers\TarotController as TarotController;
	use app\controllers\UsersController as UsersController;

	// new UsersController();die();

	if(!isset($_GET['game'])){
		new TarotController([
			'title' => 'Tarot Cards',
			'description' => 'Tarot Cards game made in PHP. Check out the source file.',
			'logged_in' => $_SESSION['login'],
		]);
	}else{
		TarotController::start([
			'cards' => 10,
			'title' => 'Start game',
			'logged_in' => $_SESSION['login'],
		]);
	}

	if(isset($_POST['login'])){
		echo '<button class="btn btn-primary">Play Tarot game</button>';
	}else{
		echo 'You need to register in order to play the game.';
	}