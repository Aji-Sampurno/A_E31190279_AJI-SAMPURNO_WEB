<?php
include('file_1.php');
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
?>