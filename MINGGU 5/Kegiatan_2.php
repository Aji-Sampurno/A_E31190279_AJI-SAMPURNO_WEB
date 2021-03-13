<?php
interface Shape{
	public function calcArea();
}

class Circle implements Shape{
	private $radius;
	
	public function _construct($radius)
	{
		$this -> radius = $radius;
	}
	
	// calcArea calculates the area of circles
	public function calcArea()
	{
		return $this -> radius * $this -> radius * pi();
	}
}

class Rectangle implements Shape{
	private $width;
	private $height;
	
	public function _construct($width ,$height)
	{
		$this -> width = $width;
		$this -> height = $height;
	}
	
	// calcArea calculates the area of rectangles
	public function calcArea()
	{
		return $this -> width * $this -> height;
	}
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ -> calcArea();
echo $rect -> calcArea();
?>