<?php
class Car {
	
	//properties
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;
	
	//method = hello
	public function hello()
	{
		return "Beep I am a ".$this -> comp."and I am ".this -> color;
	}
}

//create object di class.
$bmw = new Car();
$mercedes = new Car();

//set values dari class properties.
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//call hello method untuk $bmw object.
echo $bmw -> hello();
?>