<?php
	require_once 'vendor/autoload.php';
	require_once 'app/config.php';

	// Start all variables for the page
	use app\controllers\PagesController as PagesController;
	use app\controllers\TarotController as TarotController;
	use app\controllers\UsersController as UsersController;

	$pages = new PagesController;
	$pages->start();
	
	PagesController::header(['title'=>'Tarot PHP game | login']);

	$user = new UsersController;
	$user->login();
	$user->signup();

	if($_POST['login']){
		$email = $_POST['email'];
		$password = $_POST['password'];

		echo 'Login';
	}
	else if($_POST['signup']){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		echo 'Signed up';
	}

	PagesController::footer();

	// Show header and footer
	// require_once 'routing.php';