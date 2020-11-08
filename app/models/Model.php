<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 */
	namespace app\models;

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
				  echo "Connected successfully";
				} catch(PDOException $e) {
				  echo "Connection failed: " . $e->getMessage();
				}
			}
		}
	}