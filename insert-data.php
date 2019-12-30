<?php 
	include "koneksi.php";

	$sql = "INSERT INTO user 
	(
		id,
		nama,
		role,
		availability,
		age,
		location,
		email
	) VALUE 
	(
		'1',
		'Arkademy',
		'Fronted Developer',
		'Full Time',
		'20',
		'Ambon',
		'masfajrin02@gmail.com'
	)";

	if($koneksi->query($sql) == TRUE ) {
		echo "Insert Data telah Berhasil!";
	} else {
		echo "Insert Data GAGAL";
	}
?>