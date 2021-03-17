<?php 
class mobilLengkap {
	
	private $kegiatan1;
	private $kegiatan2;
	private $kegiatan3;

	public function nontonTv()
	{
		$kegiatan1=$this -> kegiatan1 = "Tv Dihidupkan";
		$kegiatan2=$this -> kegiatan2 = "Tv Mencari Chanel";
		$kegiatan3=$this -> kegiatan3 = "Tv Menampilkan Gambar";
		return "Keterangan : <br>".$kegiatan1."<br>".$kegiatan2."<br>".$kegiatan3."<br>";
	}

	public function radio()
	{
		$kegiatan1=$this -> kegiatan1 = "Radio Dihidupkan";
		$kegiatan2=$this -> kegiatan2 = "Radio Mencari Chanel";
		$kegiatan3=$this -> kegiatan3 = "Radio Mengeluarkan Suara";
		return "Keterangan : <br>".$kegiatan1."<br>".$kegiatan2."<br>".$kegiatan3."<br>";
	}
}

class MobilMBWberaksi {
	
	private $kegiatan1;

	public function nontonTv()
	{
		$kegiatan1=$this -> kegiatan1 = "Tv Dihidupkan";
		$kegiatan2=$this -> kegiatan2 = "Tv Mencari Chanel";
		$kegiatan3=$this -> kegiatan3 = "Tv Menampilkan Gambar";
		return "Keterangan : <br>".$kegiatan1."<br>".$kegiatan2."<br>".$kegiatan3."<br>";
	}

	public function HidupkanMobil()
	{
		$kegiatan1=$this -> kegiatan1 = "Mobil Dihidupkan";
		return "Keterangan : <br>".$kegiatan1."<br>";
	}
	
	public function MatikanMobil()
	{
		$kegiatan1=$this -> kegiatan1 = "Mobil Dimatikan";
		return "Keterangan : <br>".$kegiatan1."<br>";
	}

	public function ubahGigi()
	{
		$kegiatan1=$this -> kegiatan1 = "Gigi Diubah";
		return "Keterangan : <br>".$kegiatan1."<br>";
	}
}

class MobilBMW extends mobilLengkap{
	
}

$tes1=new MobilBMW();
$tv=$tes1 -> nontonTv();
echo $tv;

$tes2=new MobilMBWberaksi();

$nyala=$tes2 -> HidupkanMobil();
$mati=$tes2 -> MatikanMobil();
$ubah=$tes2 -> ubahGigi();

echo $nyala;
echo $mati;
echo $ubah;
?>