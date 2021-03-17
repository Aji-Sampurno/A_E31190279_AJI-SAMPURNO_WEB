<?php 
class Item{
	private $ukuran;
	private $warna;
	private $nama;
}

class Topi extends Item{
	
	function modelTopi()
	{
		$this -> ukuran = 10;
		$this -> warna = 'Biru';
		$this -> nama = 'NIKE';
		return "Nama topi ".$this -> nama." warna ".$this -> warna." ukuran ".$this -> ukuran;
	}
}

class Celana extends Item {
	
	function tipeCelana()
	{
		$this -> ukuran = 40;
		$this -> warna = 'Navy';
		$this -> nama = 'JEANS';
		return "Nama tipe celana ".$this -> nama." warna ".$this -> warna." ukuran ".$this -> ukuran;
	}
	
	function modelCelana()
	{
		$this -> ukuran = 40;
		$this -> warna = 'Grey';
		$this -> nama = 'SlimFit';
		return "Nama model celana ".$this -> nama." warna ".$this -> warna." ukuran ".$this -> ukuran;
	}
}

class Baju extends Item {
	
	function tipeBaju()
	{
		$this -> ukuran = 'M';
		$this -> warna = 'Hitam';
		$this -> nama = 'Polo';
		return "Nama tipe baju ".$this -> nama." warna ".$this -> warna." ukuran ".$this -> ukuran;
	}
}

$topi = new Topi();
$tipecelana = new Celana();
$modelcelana = new Celana();
$tipebaju = new Baju();

echo $topi -> modelTopi();
echo "<hr/>";
echo $tipecelana -> tipeCelana();
echo "<hr/>";
echo $modelcelana -> modelCelana();
echo "<hr/>";
echo $tipebaju -> tipeBaju();
echo "<hr/>";
?>