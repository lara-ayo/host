<?php

class users {

	//properties amd methods goes here
	public $first = "Daniel";
	public $last = "Nielsen";
	public $haircolor = "brown";
	public $eyecolor = "blue";

	public function __construct($first, $last, $haircolor, $eyecolor){
			$this->first = $first;
			$this->last = $last;
			$this->haircolor = $haircolor;
			$this->eyecolor = $eyecolor;
	}

	public function fullname(){
		return $this-> first." ".$this->last;
	}


	public function __destruct(){
		
	}
}