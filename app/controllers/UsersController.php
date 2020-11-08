<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\controllers;

	use app\models\Users as Users;

	class UsersController extends Controller
	{
		public function __construct(){
			$user = new Users;
			$user->welcome();
		}

		public function signup($values = ['title' => 'Sign Up']){
			$_SESSION['signup'] = true;

			return parent::section('registration/signup', $values);
		}

		public function login($values = ['title' => 'Login']){
			$_SESSION['login'] = true;

			return parent::section('registration/login', $values);
		}
	}