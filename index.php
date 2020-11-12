<?php
	require_once 'vendor/autoload.php';
	require_once 'app/config.php';

	// Start all variables for the page
	use app\controllers\PagesController as PagesController;
	$pages = new PagesController;
	$pages->start();

	// Show header and footer
	require_once 'routing.php';