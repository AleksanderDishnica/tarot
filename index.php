<?php
	require_once 'vendor/autoload.php';

	// Start all variables for the page
	use app\controllers\PagesController as PagesController;
	$pages = new PagesController;
	$pages->start();

	require_once 'routing.php';