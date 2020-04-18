<?php
class Cars {

	var $wheel_count = 4; //var is used to create property
	var $door_count = 6; 
	function car_detail(){ //if function declared inside class it is called methods
return "This car has " . $this->wheel_count . " wheel <br>";

	}

}
$bmw = new Cars(); // new keyword instantiate classes and here $bmw is called object of Car class
$mercedes = new Cars(); //another object

echo $bmw-> wheel_count =10 . "<br>"; // activates greeting method
echo $mercedes-> wheel_count . "<br>"; // activates greeting method

echo  $mercedes->car_detail();


 
?>