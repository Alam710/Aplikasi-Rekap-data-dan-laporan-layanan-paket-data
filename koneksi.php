<?php 
	$conn = mysqli_connect("localhost","root","","rekap_dan_laporan");

	// cek
	if (!$conn) {
		die("koneksi gagal".mysqli_connect_error());
		// echo "gagal : ". mysqli_connect_error();
	} else {
		// echo "sukses";
	}
?>