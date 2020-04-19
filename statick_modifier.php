<?php
class Cars {
	public $wheels =4;
	static $doors =4;
	

	
	static function car_detail(){ //if function declared inside class it is called methods


echo Cars::$doors;

	}

}

echo Cars::$doors; // static modifier, static modifier don't need any objects
Cars::car_detail();

class Gear{
	public $hamar = 9;
	static $engine = 3;
}
//$vbg = new Gear();
echo Gear::$engine;





?>