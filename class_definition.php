<?php
class Cars {

}

$myClasses = get_declared_classes(); 	
foreach ($myClasses as $class) {
	echo $class . "<br>";
} 

class Truck{

}
if(class_exists("Truck")){
	echo "Yee this class exists";
}

?>