<?php
	// https://stackoverflow.com/questions/17554824/mysqli-connection-not-working-inside-function
	global $conn;

	require_once 'vendor/autoload.php';

	use app\controllers\TarotController as TarotController;
	use app\controllers\UsersController as UsersController;

	// new UsersController();die();

	if(!isset($_GET['game'])){
		if(isset($_SESSION['login'])){
			$login = $_SESSION['login'];
		}else{
			$login = false;
		}

		new TarotController([
			'title' => 'Tarot Cards',
			'description' => 'Tarot Cards game made in PHP. Check out the source file.',
			'logged_in' => $login,
		]);
	}else{
		if(isset($_SESSION['login'])){
			$login = $_SESSION['login'];
		}else{
			$login = false;
		}

		TarotController::start([
			'cards' => 10,
			'title' => 'Start game',
			'logged_in' => $login,
		]);
	}

	if(isset($_POST['login'])){
		echo '<button class="btn btn-primary" href="play.php">Play Tarot game</button>';
	}else{
		echo 'You need to register in order to play the game.';
	}

	if(isset($_GET['login'])){
		$user = new UsersController;
		$user->login();
	}

	if(isset($_GET['signup'])){
		$user = new UsersController;
		$user->register();
	}