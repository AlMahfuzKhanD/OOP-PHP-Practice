<?php
class Cars {
function greeting(){ //if function declared inside class it is called methods

}
function greeting2(){ //if function declared inside class it is called methods

}
}

$methods =get_class_methods('Cars');

foreach ($methods as $method) {
 	echo $method . "<br>";
 } 

// $myClasses = get_declared_classes();

class Car2{

	function moveWheel(){
		echo  "Wheels move";
	}
} 

if(method_exists("Car2", "moveWheel"))	{
	echo  "method exist";
}
// 
?>