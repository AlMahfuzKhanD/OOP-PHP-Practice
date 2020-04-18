<?php
class Cars {
	
	private $doors =4;
	

	
	function get_values(){ //if function declared inside class it is called methods


echo $this->doors;

	}

	function set_values(){ //if function declared inside class it is called methods


$this->doors = 10;

	}

}
$bmw = new Cars();

$bmw->get_values();
$bmw->set_values();




?>