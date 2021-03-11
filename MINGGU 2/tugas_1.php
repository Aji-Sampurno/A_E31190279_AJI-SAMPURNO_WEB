<?php
class laptop {
	public $pemilik;
	public $merk;
	
	public function hidupkan_laptop()
	{
		return "Hidupkan laptop ".$this -> merk." milik ".$this -> pemilik; 
	}
	
	public function matikan_laptop()
	{
		return "Matikan laptop ".$this -> merk." milik ".$this -> pemilik;
	}
	
	public function restart_laptop()
	{
		return "Matikan_laptop ".$this -> merk." milik ".$this -> pemilik. ". Hidupkan laptop ".$this -> merk." milik ".$this -> pemilik;
	}
}

$asus = new laptop();
$acer = new laptop();
$lenovo = new laptop();

$asus -> merk = 'ASUS';
$asus -> pemilik = 'A';

$acer -> merk = 'Acer';
$acer -> pemilik = 'B';

$lenovo -> merk = 'Lenovo';
$lenovo -> pemilik = 'C';


echo $asus -> hidupkan_laptop(); 
echo "<br/>";
echo $acer -> matikan_laptop(); 
echo "<br/>";
echo $lenovo -> restart_laptop(); 
?>