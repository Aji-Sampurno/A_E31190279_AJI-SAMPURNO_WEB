<?php

class Tingkatan {
	
	public $nama_depan;
	public $nama_belakang;
	public $umur;
	public $status;
	public $gender;
	
	public $model;
	
	public function getNama()
	{
		return "Nama  : " . $this -> nama_depan ." ". $this -> nama_belakang;
	}
	
	public function getUmur()
	{
		return "Umur  : ".$this -> umur." tahun";
	}
	
	public function getGender()
	{
		return "Gender : ".$this -> gender;
	}
	
	public function getStatus()
	{
		if ($this -> umur >= 20 . $this -> status = 'menikah')$hubungan = "Sudah Menikah";
		else $hubungan = 'Belum Menikah';
		return "$hubungan";
	}
	
}

$hana = new Tingkatan();
$stevany = new Tingkatan();
$marshanda = new Tingkatan();
$febi = new Tingkatan();
$wulan = new Tingkatan();

$hana -> nama_depan = 'Hana';
$hana -> nama_belakang = 'Maria';
$hana -> umur = 19;
$hana -> status = 'single';
$hana -> gender = 'perempuan';

$stevany -> nama_depan = 'Stevany';
$stevany -> nama_belakang = 'Ceryawati';
$stevany -> umur = 20;
$stevany -> status = 'menikah';
$stevany -> gender = 'perempuan';

$marshanda -> nama_depan = 'Marshanda';
$marshanda -> nama_belakang = 'Asti';
$marshanda -> umur = 18;
$marshanda -> status = 'single';
$marshanda -> gender = 'perempuan';

$febi -> nama_depan = 'Febi';
$febi -> nama_belakang = 'Putri';
$febi -> umur = 18;
$febi -> status = 'menikah';
$febi -> gender = 'perempuan';

$wulan -> nama_depan = 'Wulan';
$wulan -> nama_belakang = 'islami';
$wulan -> umur = 25;
$wulan -> status = 'menikah';
$wulan -> gender = 'perempuan';

echo $hana -> getNama();
echo "<br/>";
echo $hana -> getUmur();
echo "<br/>";
echo $hana -> getGender();
echo "<br/>";
echo "Status : ".$hana -> getStatus();
echo "<br/>";
echo "<br/>";
echo $marshanda -> getNama();
echo "<br/>";
echo $marshanda -> getUmur();
echo "<br/>";
echo $marshanda -> getGender();
echo "<br/>";
echo "status : ".$marshanda -> getStatus();
echo "<br/>";
echo "<br/>";
echo $stevany -> getNama();
echo "<br/>";
echo $stevany -> getUmur();
echo "<br/>";
echo $stevany -> getGender();
echo "<br/>";
echo "Status : ".$stevany -> getStatus();
echo "<br/>";
echo "<br/>";
echo $febi -> getNama();
echo "<br/>";
echo $febi -> getUmur();
echo "<br/>";
echo $febi -> getGender();
echo "<br/>";
echo "Status : ".$febi -> getStatus();
echo "<br/>";
echo "<br/>";
echo $wulan -> getNama();
echo "<br/>";
echo $wulan -> getUmur();
echo "<br/>";
echo $wulan -> getGender();
echo "<br/>";
echo "Status : ".$wulan -> getStatus();

?>