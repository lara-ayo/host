<?php

class viewuser extends user {


	public function showAllUsers() {
		$datas = $this->getAllUsers();
		foreach ($datas as $data) {
			echo "Name is: ".$data['user_fullname']."<br>";
			echo "Email is: ".$data['user_email']."<br>";
			echo "Username is: ".$data['user_uid']."<br>";

			
		}
	}
		

		
}