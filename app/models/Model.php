<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\models;

	//https://stackoverflow.com/questions/9177945/fatal-error-class-app-pdo-not-found-in
	use PDO;
	use app\helpers\Helper as Helper;

	class Model
	{
		public function __construct($db = 'tarot', $connection = 'pdo'){
			if($connection == 'pdo'){
				$servername = "localhost";
				$username = "root";
				$password = "";

				try {
					$conn = new PDO("mysql:host=$servername;dbname=".$db, $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					// Show alert
					Helper::alert([
						'text' => 'PDO connection successful!',
						'buttonClass' => 'danger',
					]);
				}catch(PDOException $e){
					echo "Connection failed: " . $e->getMessage();
				}
			}
		}
	}