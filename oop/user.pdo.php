<?php

class user extends dbh {

	public function getAllUsers() {
		$stmt = $this->connect()->query("SELECT * FROM users");
		while ($row = $stmt->fetch()) {
			 echo $row['user_uid'];
			
		}
	}

	public function getuserswithcountcheck() {
		$user_id = 1;
		$user_uid = "divine";

		$stmt = $this->connect()->prepare("SELECT * FROM users WHERE user_id =? AND user_uid=?");
		$stmt->execute([$user_id, $user_uid]);

		if ($stmt->rowCount()) {
			while ($row = $stmt->fetch()) {
				return $row['user_uid'];
			}
		}
	}
		
}