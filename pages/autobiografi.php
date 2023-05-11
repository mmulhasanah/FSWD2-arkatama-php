<!DOCTYPE html>
<html>
<head>
	<title>Autobiografi</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
	<?php
		// Data diri
		$nama = 'Ummul Hasanah';
		$tempat_lahir = 'Bulukumba';
		$tanggal_lahir = '27 September 2001';
		$jenis_kelamin = 'Perempuan';
		$alamat = 'Bumi Batara Mawang Permbai Blok AD 15 NO.6';
		$foto = '../assets/image/ummul.jpg';
		$pendidikan = 'D4-Teknologi Rekayasa Jaringan Telekomunikasi';
		$hobi = 'Membaca, Menulis, Mendengarkan Musik, Menonton Drakor';

		// Tampilkan data diri
		echo '<h1>Data Diri</h1>';
		echo '<div class="container">';
        echo '<div class="photo"><img src="' . $foto . '" alt="Foto"></div>';
		echo '<div class="row"><span class="label">Nama:</span> <span class="value">' . $nama . '</span></div>';
		echo '<div class="row"><span class="label">Tempat/Tanggal Lahir:</span> <span class="value">' . $tempat_lahir . ', ' . $tanggal_lahir . '</span></div>';
		echo '<div class="row"><span class="label">Jenis Kelamin:</span> <span class="value">' . $jenis_kelamin . '</span></div>';
		echo '<div class="row"><span class="label">Alamat:</span> <span class="value">' . $alamat . '</span></div>';    
		echo '<div class="row"><span class="label">Pendidikan:</span> <span class="value">' . $pendidikan . '</span></div>';
		echo '<div class="row"><span class="label">Hobi:</span> <span class="value">' . $hobi . '</span></div>';
		echo '</div>';
	?>
</body>
</html>