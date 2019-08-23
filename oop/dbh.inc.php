<?php

class dbh {

	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $charset;

	protected function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "fleetmgr";
		$this->charset = "utf8mb4";

		/* Attempt to connect to MySQL database */
		try {
			$dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
			$pdo = new PDO($dsn, $this->username, $this->password);
			// Set the PDO error mode to exception
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
			echo "Connection failed: ".$e->getmessage();
		}

		
	}
}