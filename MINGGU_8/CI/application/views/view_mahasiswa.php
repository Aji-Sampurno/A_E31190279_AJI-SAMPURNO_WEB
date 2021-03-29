<?php
	foreach($Mahasiswa as $row)
	{
		echo "Nama :".$row['nama'];
		echo "<br/>";
		echo "Prodi :".$row['prodi'];
		echo "<br/>";
	}

	foreach($Prodi as $row)
	{
		echo "Program Studi :".$row['prodi'];
		echo "<br/>";
		echo "Keterangan :".$row['keterangan'];
		echo "<br/>";
	}

	foreach($Angkatan as $row)
	{
		echo "Angkatan :".$row['angkatan'];
		echo "<br/>";
	}
?>
