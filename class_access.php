<?php
class Cars {
	public $wheels =4;
	private $doors =4;
	protected $seats =4;

	
	function car_detail(){ //if function declared inside class it is called methods

echo $this->wheels;
echo $this->doors;
echo $this->seats;
	}

}
$bmw = new Cars();
//echo $bmw->wheels;
//echo $bmw->doors;
//echo $bmw->seats;
echo $bmw->car_detail();

class Gear{
	public $hamar =4;
	private $axe = 6;
	protected $engine =8;
	function detail(){
echo  $this->hamar;
echo  $this->axe;
echo  $this->engine;
	}
}
$gh = new Gear();
echo $gh->hamar;
$gh->detail();




?>