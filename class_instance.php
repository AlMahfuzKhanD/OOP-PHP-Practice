<?php
class Cars {
	function greeting(){ //if function declared inside class it is called methods
echo "Method activated";
	}

}
$bmw = new Cars(); // new keyword instantiate classes and here $bmw is called object of Car class
$mercedes = new Cars(); //another object

$bmw-> greeting(); // activates greeting method


 
?>