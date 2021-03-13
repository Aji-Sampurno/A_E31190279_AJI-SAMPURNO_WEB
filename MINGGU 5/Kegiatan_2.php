<?php
include('kegiatan_1.php');
class miniCar implements Car {
	
	private $model;
	
	public function setModel($name)
	{
		$this -> model = $name;
	}
	
	public function getModel()
	{
		return $this -> model;
	}
}

$model1 = new miniCar();
$model2 = new miniCar();
$model3 = new miniCar();

$model1 -> setModel('multi-purpose vehicle');
$model2 -> setModel('sedan');
$model3 -> setModel('hatchback');

echo $model1 -> getModel();
echo "<br>";
echo $model2 -> getModel();
echo "<br>";
echo $model3 -> getModel();
?>