<?php 
	include "koneksi.php";
	if (isset($_POST['submit'])) {
		$id_user = $_POST["id_user"];
		$nama = $_POST["nama"];
		$role = $_POST["role"];
		$availability = $_POST["Availability"];
		$age = $_POST["age"];
		$location = $_POST["location"];
		$email = $_POST["email"];

		$sql = "UPDATE user SET nama = '$nama', role = '$role', availability = '$availability', age = '$age', location = '$location', email = '$email' WHERE id = '$id_user'";

		if ($koneksi->query($sql) == TRUE) {
			echo "Update Data Berhasil";
		} else{
			echo "Update Data GAGAL";
		}
	}

?>