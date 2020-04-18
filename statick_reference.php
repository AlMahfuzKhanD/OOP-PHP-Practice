<?php
class Cars {
	public $wheels =4;
	static $doors =6;
	

	
	static function car_detail(){ //if function declared inside class it is called methods


return self::$doors;

	}

}

class Trucks extends Cars {
static function display(){
	echo parent::car_detail();
}
}


Trucks:: display();





?>