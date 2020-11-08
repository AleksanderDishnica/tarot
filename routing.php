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
		echo '<button class="btn btn-primary" href="play.php">Play Tarot game</button>';
	}else{
		echo 'You need to register in order to play the game.';
	}

	if(isset($_GET['login'])){
		echo '<form action="" method="POST">
			Email:<br><input type="email" name="email"><br>
			Password:<br><input type="password" name="password"><br>
			<button type="submit">Login</button>
		</form>';
	}

	if(isset($_GET['signup'])){
		echo '<form action="" method="POST">
			<h3>Register to play the Tarot game</h3>
			Name:<br><input type="text" name="name"><br>
			Email:<br><input type="email" name="email"><br>
			Password:<br><input type="password" name="password"><br>
			<button type="submit">Signup</button>
		</form>';
	}