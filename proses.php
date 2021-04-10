<?php 	
	include 'koneksi.php';
	

	$zakat = $_POST['zakat'];
	$nominal = $_POST['nominal'];
	$nama = $_POST['nama'];
	$hp = $_POST['hp'];
	$email = $_POST['email'];
	$bank = $_POST['bank'];
	$rek = $_POST['rek'];



	$query = mysqli_query($koneksi, "INSERT INTO tbl_zakat VALUES('','$zakat', '$nominal', '$nama', '$hp', '$email', '$bank', '$rek')") or die (mysqli_error($koneksi,$query));

	if ($query) {
		header("location: index.php");
			}else{
		echo "<h2 align=center>Proses Penginputan gagal</h2>";
	}
 ?>