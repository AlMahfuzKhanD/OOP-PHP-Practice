<?php
class Cars {
	var $wheels =4;

	
	function car_detail(){ //if function declared inside class it is called methods
return  "hello";

	}

}
$bmw = new Cars();

class Trucks extends Cars{ //class trucks inherits class Cars
//var $wheels =10;
}

$tacoma = new Trucks();
echo $tacoma->wheels;

class Gear extends Cars{

}
$jet = new Gear();
echo $jet->wheels . "this is wheel of jet";




?>