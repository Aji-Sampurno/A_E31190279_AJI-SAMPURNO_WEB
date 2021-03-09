<?php
//declare class
class Car {
	//properties
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;
	
	//method = hello
	public function hello()
	{
		return "beep";
	}
}

//membuat instance
$bmw = new car ();
$mercedes = new car();

// get values
echo $bmw -> color;
echo "<br />";
echo $mercedes -> color;
echo "<br/>";

// set values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes ->comp = "mercedes benz";

echo $bmw -> color;
echo "<br />";
echo $mercedes -> color;
echo "<br />";
echo $bmw -> comp;
echo "<br />";
echo $mercedes ->comp;
echo "<br />";

echo $bmw -> hello();
echo "<br />";
echo $mercedes -> hello();
?>