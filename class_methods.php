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
// 
?>