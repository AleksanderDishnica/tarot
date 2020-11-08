<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\helpers;

	use app\controllers\Controller as Controller;

	class Helper extends Controller
	{
		public static function Alert($values = ['buttonClass' => 'danger']){
			return parent::section('helpers/alert', $values);
		}
	}