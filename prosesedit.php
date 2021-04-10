<?php
include "koneksi.php";


		$ID = $_POST['idZakat'];
		$zakat = $_POST['zakat'];
	    $nominal = $_POST['nominal'];
	    $nama = $_POST['nama'];
	    $hp = $_POST['hp'];
	    $email = $_POST['email'];
	    $bank = $_POST['bank'];
	    $rek = $_POST['rek'];
		


		$update="UPDATE tbl_zakat SET zakat='$zakat', nominal='$nominal', nama='$nama', hp='hp', email='$email', bank='$bank',  rek='$rek' WHERE id='$ID'";
		
		$hasil=mysqli_query($koneksi,$update);

			if ($hasil) {
				header("location: index.php");
			} else {
				echo "Artikel gagal di update";
			}
?>