<?php
class Cars {

}

$myClasses = get_declared_classes(); 	
foreach ($myClasses as $class) {
	echo $class . "<br>";
} 
?>