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
			return parent::section('registration/signup', $values);
		}

		public function login($values = ['title' => 'Login']){
			return parent::section('registration/login', $values);
		}
	}