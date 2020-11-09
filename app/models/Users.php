<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\models;
	use app\helpers\Helper as Helper;
	use PDO;
	use TableRows;

	class Users extends Model
	{
		public function welcome(){
			$stmt = $this->conn->query("SELECT * FROM users"); 
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$name = '';
			// iterate over rows
			// var_dump($data[0]['name']);die();

			// Show alert
			Helper::alert([
				'text' => 'Welcome '.$data[0]['name'].'!',
				'buttonClass' => 'success',
			]);
		}
	}