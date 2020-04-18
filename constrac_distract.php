<?php
class Cars {
	public $wheels =4;
	static $doors =6;
	

	 
	function __construct(){ // constract method calls automaticly
echo $this->wheels;
echo self::$doors++;

	}

}
$bmw = new Cars();
$toyota = new Cars();


// $bmw->car_detail();




?>