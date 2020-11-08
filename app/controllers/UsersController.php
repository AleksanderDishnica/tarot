<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\controllers;

	use app\models\Users as Users;

	class UsersController extends Controller
	{
		public function __construct(){
			$users = new Users;
			$users->get_users();
		}

		public function signup(){

		}

		public function login(){
			
		}
	}