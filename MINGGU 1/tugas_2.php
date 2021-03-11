<?php
class kendaraan{
	public $jenis_kendaraan;
	public $jumlah_roda;
	public $merk;
	public $bahan_bakar;
	public $harga;
	public $tahun_pembuatan;
	
	public function dapatSubsidi()
	{
		if ($this -> bahan_bakar = 'premium')&&($this -> tahun_pembuatan < 2005) $subsidi = 'iya';
		else $subsidi = 'tidak';
		return "$subsidi";
	}
	
	public function hargaSecond()
	{
		if ($this -> tahun_pembuatan > 2010) $second = $this -> harga * 20/100;
		else if ($this -> tahun_pembuatan >= 2010) $second = $this -> harga * 30/100;
		else ($this -> tahun_pembuatan < 2005) $second = $this -> harga * 40/100;
		return"$second";
	}
}

//membuat kendaraan
$SUV = new kendaraan();
$Sedan = new kendaraan();
$Coupe = new kendaraan();
$Hatchback = new kendaraan();
$MPV = new kendaraan();

//memberi nilai
$SUV -> jenis_kendaraan = 'SUV';
$SUV -> jumlah_roda = '4';
$SUV -> merk = 'Daihatsu';
$SUV -> bahan_bakar = 'Pertamax';
$SUV -> harga = 'Rp 251.800.000';
$SUV -> tahun_pembuatan = '2006';

$sedan -> jenis_kendaraan = 'Sedan';
$Sedan -> jumlah_roda = '4';
$Sedan -> merk = 'Honda';
$Sedan -> bahan_bakar = 'Premium';
$Sedan -> harga = 'Rp 235.000.000';
$Sedan -> tahun_pembuatan = '2000';

$Coupe -> jenis_kendaraan = 'Coupe';
$Coupe -> jumlah_roda = '4';
$Coupe -> merk = 'Honda';
$Coupe -> bahan_bakar = 'Premium';
$Coupe -> harga = 'Rp 235.000.000';
$Coupe -> tahun_pembuatan = '2000';

$Hatchback -> jenis_kendaraan = 'Hatchback';
$Hatchback -> jumlah_roda = '4';
$Hatchback -> merk = 'Honda';
$Hatchback -> bahan_bakar = 'Premium';
$Hatchback -> harga = 'Rp 235.000.000';
$Hatchback -> tahun_pembuatan = '2000';

$MPV -> jenis_kendaraan = 'MPV';
$MPV -> jumlah_roda = '4';
$MPV -> merk = 'Toyota';
$MPV -> bahan_bakar = 'Pertamax';
$MPV -> harga = 'Rp 146.190.000';
$MPV -> tahun_pembuatan = '2016';

//output
echo $SUV -> hargaSecond();
?>