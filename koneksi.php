<?php 
	
	$koneksi = mysqli_connect("localhost","root","","db_zakat" );

	if (!$koneksi) {
		die("Gagal Terhubung dengan database".mysqli_connect_error());
	}

 ?>