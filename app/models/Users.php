<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\models;
	use app\helpers\Helper as Helper;

	class Users extends Model
	{
		public function welcome(){
			// Show alert
			Helper::alert([
				'text' => 'Welcome user!',
				'buttonClass' => 'success',
			]);
		}
	}