<?php

class newclass {

	//properties and methods goes here
	public $data = "i am a property";
	public $error = "this is the class called ".__CLASS__."!";
	public static $static = 0;

	public function __construct(){
		echo "this class has been instantiated";
	}
	public function __toString(){
		echo "tostring method: ";
		return $this->error;
	}
	public static function staticmethod(){
		return self ::$static;
	}

	public function setnewproperty($newdata){
		$this->data = $newdata;
	}

	public function getproperty(){
		return $this->data;
	}

	public function __destruct() {
		echo "this is the end of the class!";
	}

}


