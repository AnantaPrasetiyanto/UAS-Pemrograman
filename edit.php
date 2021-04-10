<?php  include 'proses1.php'; ?>
<?php  include 'koneksi.php';


	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_zakat WHERE id='$id' ");
	$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Zakat</title>
	<style type="text/css">
		body { 
				font-family:tahoma; 
				font-size:12px; 
				background-image: url(15.png);
				background-size: cover;
				background-color: black;
			}
		#container { 
			width:450px; 
			padding:20px 40px; 
			margin:50px auto; 
			border:0px solid #555; 
			box-shadow:0px 0px 2px #555; 
			background:transparent;
			color: black;
		}

	input[type="text"] { width:200px; }
	input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
	#error { 
		border:1px solid red; 
		background:#ffc0c0; 
		padding:5px; }	
</style>
</head>
<body>
	<div id="container">
	<center>Form Edit Data</center>
		
		<form action="prosesedit.php" method="POST">
			<p>
				<input type="hidden" name="idZakat" value="<?= $row['id'];?>"/>
			</p>
			<p>
			<b>Zakat :</b><br>
				<form action="" method="POST">
					<select name="zakat" class="form-select">
				<option>--Jenis Zakat--</option>
				<option value="Penghasilan">Zakat Penghasilan</option>
				<option value="Maal">Zakat Maal</option>
				<option value="Fitrah">Zakat Fitrah</option>
			</select>
			</p>
			<p>
				<b>Nominal :</b><br>
				<input type="text" name="nominal" value="<?= $row['nominal'];?>" />
			</p>
			<p>
				<b>Nama Lengkap :</b><br>
				<input type="text" name="nama" value="<?= $row['nama'];?>" />
			</p>
			<p>
				<b>No HP :</b><br>
				<input type="text" name="hp" value="<?= $row['hp'];?>" />
			</p>
			<p>
				<b>Email :</b><br>
				<input type="text" name="email" value="<?= $row['email'];?>" />
			</p>
			<p>
				<b>Nama Bank :</b><br>
				<input type="text" name="bank" value="<?= $row['bank'];?>" />
			</p>
			<p>
				<b>Nomor Rekening :</b><br>
				<input type="text" name="rek" value="<?= $row['rek'];?>" />
			</p>
			
			<p>
				<input type="submit" name="edit" value="Update" class="tombol"/> 
			</p>
		</form>
	</div>
</body>
</html>