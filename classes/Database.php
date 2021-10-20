<?php
	
/**
* Connects to Database, report if fail
*/

class Database {
	
	private $host = 'localhost';
	private $user = 'sample_user';
	private $pass = 'my$secure#password';
	private $db   = 'mydatabase';
	
	public function connect() {
		try {
			$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=utf8mb4';
			$pdo = new PDO($dsn, $this->user, $this->pass);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			return $pdo;	
		}
		catch (PDOException $e) {
			echo "Connection failed: ".$e->getMessage();
		}
		
	}
}


?>	
