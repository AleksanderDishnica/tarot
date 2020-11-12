<?php
	require_once 'vendor/autoload.php';
	require_once 'app/config.php';

	use app\controllers\TarotController as TarotController;
	use app\controllers\UsersController as UsersController;
	use app\controllers\PagesController as PagesController;

	PagesController::header(['title'=>'Tarot PHP game | login']);

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
		echo '<div class="col-lg-12 alert">You need to register in order to play the game.</div>';
	}

	if(isset($_GET['login'])){
		$user = new UsersController;
		$user->login();
	}

	if(isset($_GET['signup'])){
		$user = new UsersController;
		$user->signup();
	}

	PagesController::footer();